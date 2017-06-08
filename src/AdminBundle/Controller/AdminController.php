<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
	/**
     * @Route("/admin")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Admin/Layout:layout.html.twig');
    }
}
