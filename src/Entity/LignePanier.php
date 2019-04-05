<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LignePanierRepository")
 */
class LignePanier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Panier", inversedBy="lignePaniers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $panier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        if ($this->article === $article) {
            $this->quantite++;
        } else {
            $this->article = $article;
            $this->quantite = 1;
        }
        return $this;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        $this->panier = $panier;

        return $this;
    }
    public function getPrix()
    {
        if (empty($this->prix)) {
            //prix de l'article * qte
            $this->prix = $this->article->getPrix() * $this->getQuantite();
        }
    }
}
