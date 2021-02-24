<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepriseRepository::class)
 */
class Entreprise
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="bigint")
     */
    private $CodePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SiteInternet;

    /**
     * @ORM\OneToMany(targetEntity=Candidature::class, mappedBy="entreprises")
     */
    private $postuler;

    public function __construct()
    {
        $this->postuler = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getSiteInternet(): ?string
    {
        return $this->SiteInternet;
    }

    public function setSiteInternet(string $SiteInternet): self
    {
        $this->SiteInternet = $SiteInternet;

        return $this;
    }

    /**
     * @return Collection|Candidature[]
     */
    public function getPostuler(): Collection
    {
        return $this->postuler;
    }

    public function addPostuler(Candidature $postuler): self
    {
        if (!$this->postuler->contains($postuler)) {
            $this->postuler[] = $postuler;
            $postuler->setEntreprises($this);
        }

        return $this;
    }

    public function removePostuler(Candidature $postuler): self
    {
        if ($this->postuler->removeElement($postuler)) {
            // set the owning side to null (unless already changed)
            if ($postuler->getEntreprises() === $this) {
                $postuler->setEntreprises(null);
            }
        }

        return $this;
    }
}
