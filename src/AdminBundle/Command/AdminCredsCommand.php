<?php

namespace AdminBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AdminBundle\Entity\User;
use AdminBundle\Entity\Role;
use AdminBundle\Entity\RoleUser;


class AdminCredsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('admin:creds')
            ->setDescription('Getting Admin default username and password')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $encoded = md5('admin123');
        $em = $this->getContainer()->get('doctrine')->getManager();
            
        $query = $em->createQuery(
                    'SELECT u
                     FROM AdminBundle:User u
                     WHERE u.username = :username And u.password = :password'
                      )->setParameter('username', 'admin')
                       ->setParameter('password', $encoded);
        $data = $query->getOneorNullResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
        $c = count($data);
        if(empty($c)){ 
            $roles = [
                            [
                                'name' => 'admin',
                                'display_name' => 'Admin',
                                'description' => 'Super admin'
                            ],
                            [
                                'name' => 'approver',
                                'display_name' => 'Approver',
                                'description' => 'Approver'
                            ],
                            [
                                'name' => 'editor',
                                'display_name' => 'Editor',
                                'description' => 'Editor'
                            ],
                            [
                                'name' => 'user',
                                'display_name' => 'General User',
                                'description' => 'General User'
                            ],
                            
                       ];
                     

                       foreach($roles as $key) {
                          $r = new Role();   
                           //echo $key['name'];

                           $r->setName($key['name']);
                           $r->setDisplayName($key['display_name']);
                           $r->setDescription($key['description']);
                           $r->setCreatedon();
                           $em->persist($r);
                           if($key['name']=='admin'){
                            $em->flush();
                               $roleid =$r->getId();                              
                           }                            
                       } 

                    $user = new User();      
                    $user->setFullname('adminuser');
                    $user->setEmail('admin@gmail.com');
                    $user->setPassword($encoded);
                    $user->setAddress('abc street');
                    $user->setCity('London');
                    $user->setCountry('UK');
                    $user->setUsername('admin');
                    $user->setDeleted('0');
                    $user->setCreatedon();
                    $user->setIsadmin($roleid);
                    $em->persist($user);
                    $em->flush(); 

                    $userid = $user->getId();  
                    $ru = new RoleUser();                         
                    $ru->setUserId($userid);  
                    $ru->setRoleId($roleid);   
                    $ru->setCreatedon(); 
                    $em->persist($ru);
                     $em->flush();
        }       
        
        $output->writeln('Your username : admin');
        $output->writeln('Your password : admin123');
    }

}
