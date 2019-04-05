<?php

namespace App\Service;

use Doctrine\Common\Persistence\ObjectManager;

class RequeteService {
    private $manager;

    public function __construct(ObjectManager $manager){
        $this->manager = $manager;
    }

    public function getMenCategories(){
        return $this->manager->createQuery(
             'SELECT c.nom FROM App\Entity\Categorie, App\Entity\MainCategorie WHERE c.main_categorie_id = m.id AND m.id = 1')->getResult();
     }
     public function getWomenCategories(){
        return $this->$manager->createQuery(
          'SELECT c.nom FROM App\Entity\Categorie, App\Entity\MainCategorie WHERE c.main_categorie_id = m.id AND m.id = 2')->getResult();
     }
     public function getAccessoiresCategories(){
        return $this->$manager->createQuery(
          'SELECT c.nom FROM App\Entity\Categorie, App\Entity\MainCategorie WHERE c.main_categorie_id = m.id AND m.id = 3')->getResult();
     }


    public function getMenArticles(){
       return $this->$manager->createQuery(
            'SELECT a.nom, a.image, c.nom, m.nom FROM App\Entity\Article a, App\Entity\Categorie c, App\Entity\MainCategorie m WHERE c.main_categorie_id = m.id AND c.id = :id AND c.main_categorie.id = 1')->getResult();
    }
    public function getWomenArticles(){
        return $this->$manager->createQuery(
          'SELECT a.nom, a.image, c.nom, m.nom FROM App\Entity\Article a, App\Entity\Categorie c, App\Entity\MainCategorie m WHERE c.main_categorie_id = m.id AND c.id = :id AND c.main_categorie.id = 2')->getResult();
     }
     public function getAccessoiresArticles(){
        return $this->$manager->createQuery(
          'SELECT a.nom, a.image, c.nom, m.nom FROM App\Entity\Article a, App\Entity\Categorie c, App\Entity\MainCategorie m WHERE c.main_categorie_id = m.id AND c.id = :id AND c.main_categorie.id = 3')->getResult();
     }
     public function getArticle(){
          return $this->$manager->createQuery(
               'SELECT a.nom, a.image, a.description, a.prix FROM App\Entity\Article a WHERE ORDER BY a.createdAt DESC')->getResult();
     }
}