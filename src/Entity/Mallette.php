<?php

namespace App\Entity;

use App\Repository\MalletteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MalletteRepository::class)
 */
class Mallette
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $theme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_coloriages;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_artistes;

    /**
     * @ORM\Column(type="text")
     */
    private $description_artistes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image_oeuvres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $legende_oeuvres;

    /**
     * @ORM\OneToMany(targetEntity=Jeux::class, mappedBy="id_nom")
     */
    private $jeu_id;

    /**
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="mallette")
     */
    private $paniers;

    

    public function __construct()
    {
        $this->jeu_id = new ArrayCollection();
        $this->paniers = new ArrayCollection();
       
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImageColoriages(): ?string
    {
        return $this->image_coloriages;
    }

    public function setImageColoriages(string $image_coloriages): self
    {
        $this->image_coloriages = $image_coloriages;

        return $this;
    }

    public function getImageArtistes(): ?string
    {
        return $this->image_artistes;
    }

    public function setImageArtistes(string $image_artistes): self
    {
        $this->image_artistes = $image_artistes;

        return $this;
    }

    public function getDescriptionArtistes(): ?string
    {
        return $this->description_artistes;
    }

    public function setDescriptionArtistes(string $description_artistes): self
    {
        $this->description_artistes = $description_artistes;

        return $this;
    }

    public function getImageOeuvres(): ?string
    {
        return $this->image_oeuvres;
    }

    public function setImageOeuvres(string $image_oeuvres): self
    {
        $this->image_oeuvres = $image_oeuvres;

        return $this;
    }

    public function getLegendeOeuvres(): ?string
    {
        return $this->legende_oeuvres;
    }

    public function setLegendeOeuvres(string $legende_oeuvres): self
    {
        $this->legende_oeuvres = $legende_oeuvres;

        return $this;
    }

    /**
     * @return Collection|Jeux[]
     */
    public function getJeuId(): Collection
    {
        return $this->jeu_id;
    }

    public function addJeuId(Jeux $jeuId): self
    {
        if (!$this->jeu_id->contains($jeuId)) {
            $this->jeu_id[] = $jeuId;
            $jeuId->setIdNom($this);
        }

        return $this;
    }

    public function removeJeuId(Jeux $jeuId): self
    {
        if ($this->jeu_id->removeElement($jeuId)) {
            // set the owning side to null (unless already changed)
            if ($jeuId->getIdNom() === $this) {
                $jeuId->setIdNom(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Panier[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers[] = $panier;
            $panier->setMallette($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->removeElement($panier)) {
            // set the owning side to null (unless already changed)
            if ($panier->getMallette() === $this) {
                $panier->setMallette(null);
            }
        }

        return $this;
    }

    
    
}
