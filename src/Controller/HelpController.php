<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelpController extends AbstractController
{
    /**
     * @Route("/politique-des-retours", name="retours")
     */
    public function index()
    {
        return $this->render('help/retours.html.twig', []);
    }
    /**
     * @Route("/guide-des-des-tailles", name="tailles")
     */
    public function tailles()
    {
        return $this->render('help/taille.html.twig', []);
    }
    /**
     * @Route("/tailles-hommes", name="thomme")
     */
    public function tailleHomme()
    {
        return $this->render('help/taille-hommes.html.twig', []);
    }
    /**
     * @Route("/tailles-femmes", name="tfemme")
     */
    public function tailleFemmes()
    {
        return $this->render('help/taille-femmes.html.twig', []);
    }
    /**
     * @Route("/politique-de-confidentialite", name="confidentialite")
     */
    public function confidentialite()
    {
        return $this->render('help/politique-confidentialite.html.twig', []);
    }
    /**
     * @Route("/faq", name="faq")
     */
    public function faq()
    {
        return $this->render('help/faq.html.twig', []);
    }
    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgv()
    {
        return $this->render('help/cgv.html.twig', []);
    }
}
