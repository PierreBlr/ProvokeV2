<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin_login", name="admin_login")
     * @IsGranted("ROLE_USER")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();

        return $this->render('admin/login.html.twig', [
            'hasError'=> $error !== null,
            "username"=> $username
        ]);
    }
    /**
     * @Route("/admin_logout", name="admin_logout")
     */
    public function logout(){
        //...
    }
}