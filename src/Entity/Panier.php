<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Commande", inversedBy="panier", cascade={"persist", "remove"})
     */
    private $commande;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LignePanier", mappedBy="panier", orphanRemoval=true, cascade={"persist", "remove"})
     */
    private $lignePaniers;

    public function __construct()
    {
        $this->lignePaniers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    public function setCommande(?Commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * @return Collection|LignePanier[]
     */
    public function getLignePaniers(): Collection
    {
        return $this->lignePaniers;
    }

    public function addLignePanier(LignePanier $lignePanier): self
    {
        if (!$this->lignePaniers->contains($lignePanier)) {
            $this->lignePaniers[] = $lignePanier;
            $lignePanier->setPanier($this);
        }

        return $this;
    }

    public function removeLignePanier(LignePanier $lignePanier): self
    {
        if ($this->lignePaniers->contains($lignePanier)) {
            $this->lignePaniers->removeElement($lignePanier);
            // set the owning side to null (unless already changed)
            if ($lignePanier->getPanier() === $this) {
                $lignePanier->setPanier(null);
            }
        }

        return $this;
    }
}
