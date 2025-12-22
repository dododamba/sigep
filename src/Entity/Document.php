<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DocumentRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Document
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /* =====================
     * Relations
     * ===================== */

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(onDelete: 'CASCADE', nullable: true)]
    private ?Financement $financement = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(onDelete: 'CASCADE', nullable: true)]
    private ?Decaissement $decaissement = null;

    /* =====================
     * Métadonnées fichier
     * ===================== */

    #[ORM\Column(length: 255)]
    private string $nomOriginal;

    #[ORM\Column(length: 255)]
    private string $nomFichier; // Nom stocké sur le serveur

    #[ORM\Column(length: 150)]
    private string $typeMime;

    #[ORM\Column(type: 'integer')]
    private int $taille; // en octets

    #[ORM\Column(length: 50)]
    private string $extension;

    #[ORM\Column(length: 255)]
    private string $chemin; // ex: uploads/financements/2025/

    /* =====================
     * Métadonnées métier
     * ===================== */

    #[ORM\Column(length: 50)]
    private string $categorie; 
    // ex: convention, contrat, facture, preuve_paiement, rapport

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private string $statut = 'valide';
    // valide, expiré, rejeté, en_attente

    /* =====================
     * Audit & traçabilité
     * ===================== */

    #[ORM\Column(length: 150)]
    private string $creePar;

    #[ORM\Column(type: 'datetime_immutable')]
    private \DateTimeImmutable $creeLe;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $misAJourLe = null;

    /* =====================
     * Lifecycle Callbacks
     * ===================== */

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->creeLe = new \DateTimeImmutable();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->misAJourLe = new \DateTime();
    }

    /* =====================
     * Getters & Setters
     * ===================== */

    public function getId(): ?int { return $this->id; }

    public function getFinancement(): ?Financement { return $this->financement; }
    public function setFinancement(?Financement $financement): self
    {
        $this->financement = $financement;
        return $this;
    }

    public function getDecaissement(): ?Decaissement { return $this->decaissement; }
    public function setDecaissement(?Decaissement $decaissement): self
    {
        $this->decaissement = $decaissement;
        return $this;
    }

    public function getNomOriginal(): string { return $this->nomOriginal; }
    public function setNomOriginal(string $nomOriginal): self
    {
        $this->nomOriginal = $nomOriginal;
        return $this;
    }

    public function getNomFichier(): string { return $this->nomFichier; }
    public function setNomFichier(string $nomFichier): self
    {
        $this->nomFichier = $nomFichier;
        return $this;
    }

    public function getTypeMime(): string { return $this->typeMime; }
    public function setTypeMime(string $typeMime): self
    {
        $this->typeMime = $typeMime;
        return $this;
    }

    public function getTaille(): int { return $this->taille; }
    public function setTaille(int $taille): self
    {
        $this->taille = $taille;
        return $this;
    }

    public function getExtension(): string { return $this->extension; }
    public function setExtension(string $extension): self
    {
        $this->extension = $extension;
        return $this;
    }

    public function getChemin(): string { return $this->chemin; }
    public function setChemin(string $chemin): self
    {
        $this->chemin = $chemin;
        return $this;
    }

    public function getCategorie(): string { return $this->categorie; }
    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStatut(): string { return $this->statut; }
    public function setStatut(string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getCreePar(): string { return $this->creePar; }
    public function setCreePar(string $creePar): self
    {
        $this->creePar = $creePar;
        return $this;
    }

    public function getCreeLe(): \DateTimeImmutable { return $this->creeLe; }

    public function getMisAJourLe(): ?\DateTimeInterface { return $this->misAJourLe; }
}
