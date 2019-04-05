<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        return $this->render('about/about-us.html.twig', [
        ]);
    }
    /**
     * @Route("/work-with-us", name="partenaires")
     */
    public function partnership()
    {
        return $this->render('about/partenaires.html.twig', [
        ]);
    }
}
