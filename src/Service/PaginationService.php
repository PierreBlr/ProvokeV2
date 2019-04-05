<?php

namespace App\Service;

use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RequestStack;

class PaginationService {
    
    private $entityClass;
    private $limit = 10;
    private $currentPage = 1;
      /**
     * Le manager de Doctrine qui nous permet notamment de trouver le repository dont on a besoin
     *
     * @var ObjectManager
     */
    private $manager;
    /**
     * Le moteur de template Twig qui va permettre de générer le rendu de la pagination
     *
     * @var Twig\Environment
     */
    private $twig;
    /**
     * Le nom de la route que l'on veut utiliser pour les boutons de la navigation
     *
     * @var string
     */
    private $route;
    /**
     * Le chemin vers le template qui contient la pagination
     *
     * @var string
     */
    private $templatePath;


        public function __construct(ObjectManager $manager, Environment $twig, RequestStack $request, $templatePath){
            $this->route        = $request->getCurrentRequest()->attributes->get('_route');
            $this->manager      = $manager;
            $this->twig         = $twig;
            $this->templatePath = $templatePath;
        }

        public function setTemplatePath(){
            $this->templatePath = $templatePath;

            return $this;
        }

        public function getTemplatePath(){
            return $this->templatePath;
        }

        public function setRoute($route){
            $this->route = $route;

            return $this;
        }

        public function getRoute(){
             return $this->route;
        }

        public function display(){
            $this->twig->display($this->templatePath,[
                'page'=> $this->currentPage,
                'pages' => $this->getPage(),
                'route' => $this->route
            ]);
        }

        public function getPages(){
            if(empty($this->entityClass)) {
                // Si il n'y a pas d'entité configurée, on ne peut pas charger le repository, la fonction
                // ne peut donc pas continuer !
                throw new \Exception("Vous n'avez pas spécifié l'entité sur laquelle nous devons paginer, utilisez la méthode setEntityClass() de votre objet PaginationService !");
            }
            //1 Connaitre le total des enregistrements de la table
            $repo = $this->manager->getRepository($this->entityClass);
            $total = count($repo->findAll());
            //2 Faire la division, l'arrondi et le renvoyer
            $pages = ceil($total/ $this->limit);

            return $pages;
        }

        public function getData(){
            if(empty($this->entityClass)) {
                throw new \Exception("Utilisez la méthode setEntityClass() de l'objet PaginationService");
            }
            //1 Calculer l'Offset
            $offset = $this->currentPage * $this->limit - $this->limit;

            //2 Demander au Repository de retrouver l'élément
            $repo = $this->manager->getRepository($this->entityClass);
            $data = $repo->findBy([],[],$this->limit, $offset);

            //3 Renvoyer les éléments en question
            return $data;
        }
    
        public function setPage($page){
            $this->currentPage = $page;

            return $this;
        }
        public function getPage(){
            return $this->currentPage;
        }

        public function setLimit($limit){
            $this->limit = $limit;

            return $this;
        }
        public function getLimit(){
            return $this->limit;
        }

        public function setEntityClass($entityClass){
            $this->entityClass = $entityClass;
            
            return $this;
        }

        public function getEntityClass(){
            return $this->entityClass;
        }

}


