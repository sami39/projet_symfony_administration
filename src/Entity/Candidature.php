<?php

namespace App\Entity;

use App\Entity\User;
use App\Entity\Entreprise;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CandidatureRepository;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="date")
     */
    private $datedemande;

    /**
     * @ORM\Column(type="date")
     */
    private $daterelance;

    /**
     * @ORM\Column(type="date")
     */
    private $dateentretient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=Entreprise::class, inversedBy="postuler")
     */
    private $entreprises;

  

    public function getId(): ?int
    {
        return $this->id;
    }

   
    

    public function getDatedemande(): ?\DateTimeInterface
    {
        return $this->datedemande;
    }

    public function setDatedemande(\DateTimeInterface $datedemande): self
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    public function getDaterelance(): ?\DateTimeInterface
    {
        return $this->daterelance;
    }

    public function setDaterelance(\DateTimeInterface $daterelance): self
    {
        $this->daterelance = $daterelance;

        return $this;
    }

    public function getDateentretient(): ?\DateTimeInterface
    {
        return $this->dateentretient;
    }

    public function setDateentretient(\DateTimeInterface $dateentretient): self
    {
        $this->dateentretient = $dateentretient;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCategory(): ?User
    {
        return $this->category;
    }

    public function setCategory(?User $category): self
    {
        $this->category = $category;

        return $this;
    }
    public function getEntreprises(): ?Entreprise
    {
        return $this->entreprises;
    }

    public function setEntreprises(?Entreprise $entreprises): self
    {
        $this->entreprises = $entreprises;

        return $this;
    }

}
