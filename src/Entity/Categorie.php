<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 * @Vich\Uploadable
 */
class Categorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\MainCategorie", inversedBy="categories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mainCategorie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="categorie")
     */
    private $articles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }
    /**
     * @Vich\UploadableField(mapping="categorie_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updateAt;

    // ...

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getId(): ? int
    {
        return $this->id;
    }

    public function getNom(): ? string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrl(): ? string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getMainCategorie(): ? MainCategorie
    {
        return $this->mainCategorie;
    }

    public function setMainCategorie(? MainCategorie $mainCategorie): self
    {
        $this->mainCategorie = $mainCategorie;

        return $this;
    }
    public function __toString(): string
    {
        return $this->nom;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategorie($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getCategorie() === $this) {
                $article->setCategorie(null);
            }
        }

        return $this;
    }

    public function getImage(): ? string
    {
        return $this->image;
    }
    public function getImageFile()
    {
        return $this->imageFile;
    }

    public function setImage(? string $image): self
    {
        $this->image = $image;

        return $this;
    }
    /**
    * @return \Datetime 
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
    * @param \Datetime $updatedAt
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function getUpdateAt(): ? \DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(? \DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }
}
