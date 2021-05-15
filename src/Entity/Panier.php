<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="paniers")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Mallette::class, inversedBy="paniers")
     */
    private $mallette;

    
    public function __construct(SessionInterface $sesion)
    {
      $this->session = $sesion;   
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getMallette(): ?Mallette
    {
        return $this->mallette;
    }

    public function setMallette(?Mallette $mallette): self
    {
        $this->mallette = $mallette;

        return $this;
    }

    

   
}
