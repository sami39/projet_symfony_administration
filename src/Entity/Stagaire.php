<?php

namespace App\Entity;

use App\Repository\StagaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StagaireRepository::class)
 */
class Stagaire
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
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $code_Postal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Telephone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_portfolio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_github;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lien_cv;

    /**
     * @ORM\Column(type="date")
     */
    private $Promtion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Avatar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zone_de_mobilite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
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

    public function getCodePostal(): ?int
    {
        return $this->code_Postal;
    }

    public function setCodePostal(int $code_Postal): self
    {
        $this->code_Postal = $code_Postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLienPortfolio(): ?string
    {
        return $this->lien_portfolio;
    }

    public function setLienPortfolio(string $lien_portfolio): self
    {
        $this->lien_portfolio = $lien_portfolio;

        return $this;
    }

    public function getLienGithub(): ?string
    {
        return $this->lien_github;
    }

    public function setLienGithub(string $lien_github): self
    {
        $this->lien_github = $lien_github;

        return $this;
    }

    public function getLienCv(): ?string
    {
        return $this->lien_cv;
    }

    public function setLienCv(string $lien_cv): self
    {
        $this->lien_cv = $lien_cv;

        return $this;
    }

    public function getPromtion(): ?\DateTimeInterface
    {
        return $this->Promtion;
    }

    public function setPromtion(\DateTimeInterface $Promtion): self
    {
        $this->Promtion = $Promtion;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->Avatar;
    }

    public function setAvatar(string $Avatar): self
    {
        $this->Avatar = $Avatar;

        return $this;
    }

    public function getCompetance(): ?string
    {
        return $this->competance;
    }

    public function setCompetance(string $competance): self
    {
        $this->competance = $competance;

        return $this;
    }

    public function getMobile(): ?bool
    {
        return $this->mobile;
    }

    public function setMobile(bool $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getZoneDeMobilite(): ?string
    {
        return $this->zone_de_mobilite;
    }

    public function setZoneDeMobilite(string $zone_de_mobilite): self
    {
        $this->zone_de_mobilite = $zone_de_mobilite;

        return $this;
    }
}
