<?php

namespace Hotel\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FramerworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    
     
     public function loginAction()
     {
         return $this->render('security/login.html.twig');
     }
     
    /**
     * @Route("/logout")
     * @throws \RuntimeException
     */
     public function logoutAction()
     {
        throw new \RuntimeException('WI PRIUEIE');
        #return $this->render('security/login.html.twig');
     }
}