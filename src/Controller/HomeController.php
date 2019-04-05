<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\MainCategorie;
use App\Service\RequeteService;
use App\Service\PaginationService;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'Provoke',
        ]);
    }

    /**
     * @Route("/shop/{main}", name="show_categories")
     */
    public function showcats(CategorieRepository $repo, MainCategorie $main)
    {
        /*$pagination->setEntityClass(Categorie::class)     
                    ->setPage($page);*/

        $cats = $repo->findAllByMainCategorie($main->getId());
                    
        return $this->render('home/categories.html.twig', [
            //"pagination" => $pagination,
            "cats" => $cats
        ]);
    }

    /**
     * @Route("/shop/list/{cat}", name="show_articles")
     */
    public function showarticles(ArticleRepository $repo, Categorie $cat)
    {
        //$repo = $this->getDoctrine()->getRepository(Categorie::class);

        $articles = $repo->findAllByCategorie($cat->getId());
    
        return $this->render('home/articles.html.twig', [
            "articles"=> $articles
        ]);
    }

    /**
     * @Route("/shop/detail/{art}", name="show_detail")
     */
    public function detailarticle( ArticleRepository $repo, Article $art)
    {
        return $this->render('home/article.html.twig', [
            "article" => $art
        ]);
    }
}
