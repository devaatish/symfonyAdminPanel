<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AdminBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

class AdminController extends Controller
{
	public function __construct()
	{
  	  	
    		$this->session = new Session();
    		
			
	}
	/**
     * @Route("/admin")
     */
    public function indexAction()
    {
    	if ($this->session->has("name")) {
   			 	$myVar = $this->session->get("name");
    			return $this->render('AdminBundle:Admin/Layout:layout.html.twig');
		}else{
       		 	return $this->redirect('http://localhost:8000/login');
   		 }
    }

    /**
     * @Route("/login")
     */
    public function loginAction(Request $request)
    {
	     return $this->render('AdminBundle:Admin:login.html.twig', array(
 	         'last_username' => '',
 	         'error'         => 'Invalid username password',
	     ));    
    }

    /**
     * @Route("/login_check")
     */
    public function login_checkAction(Request $request)
    {
   		$em = $this->get('doctrine')->getManager();
		$username = $request->get('username');		
		$password=$request->get('password');
		$password =  $this->passwordencoderAction($password);
		
		$query = $em->createQuery(
   				 'SELECT u
 				   FROM AdminBundle:User u
				    WHERE u.username = :username And u.password = :password'
					)->setParameter('username', $username)
					->setParameter('password', $password);			
		$data = $query->getOneorNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

		$c = count($data);
		if(!empty($c)){
			
			$this->session->set('name', $username);
			$this->session->set('fullname', $data['fullname']);
			$this->session->set('id', $data['id']);

			$q = $em->createQuery('SELECT r FROM AdminBundle:Role r
				WHERE r.id = :id'
				)->setParameter('id', $data['isadmin']);
			$role = $q->getOneorNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

			$this->session->set('role',$role['name']);

			$this->session->getFlashBag()->add('message', 'Login successfull');
			return $this->redirect('http://localhost:8000/admin');
			//return $this->redirectToRoute('/admin');	    
			
		}else{
			// set flash messages
			if($username != '' || $password != ''){
			 	return $this->render('AdminBundle:Admin:login.html.twig', array(
 	            'error'         => 'invalid username password',
	     		));
			}else{
				return $this->render('AdminBundle:Admin:login.html.twig', array(
 	            'error'         => 'something is wrong',
	     		));
			}
		   
		}
    }

    /**
     * @Route("/admin/forgot_password")
     */
    public function forgot_passwordAction()
    {
        return $this->render('AdminBundle:Admin:forgot_password.html.twig');
    }

    /**
     * @Route("registration")
     */
    public function registrationAction(Request $request)
    {
    	// or fetch the em via the container
    	$em = $this->get('doctrine')->getManager();

    	$user = new User();
    	$user->setFullname($request->get('fullname'));
    	$user->setEmail($request->get('email'));
    	$plainPassword = $request->get('password');
		$encoded = $this->passwordencoderAction($plainPassword);
    	$user->setPassword($encoded);
    	$user->setAddress($request->get('address'));
    	$user->setCity($request->get('city'));
    	$user->setCountry($request->get('country'));
    	$user->setUsername($request->get('username'));
    	$user->setDeleted('0');
    	$user->setCreatedon(); 

    	$em->persist($user);
    	$em->flush(); 	

        return $this->render('AdminBundle:Admin:login.html.twig',array(
	        'error'         => '',
	    ));
    }
    public function passwordencoderAction($plainPassword){
    	$user = new User();
    	$encoded = md5($plainPassword);
    	//$encoder = $this->container->get('security.password_encoder');
		//$encoded = $encoder->encodePassword($user, $plainPassword);
		return $encoded;

    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
    	session_destroy();
        return $this->redirect('http://localhost:8000/admin');
    }

    /**
     * @Route("/admin/user")
     */
    public function userAction()
    {
    	return $this->render('AdminBundle:Admin:user_profile.html.twig',array(
	        'error'         => '',
	    ));
        
    }

}
