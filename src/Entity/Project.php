<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'project')]
class Project
{
    public const STATUS_PLANIFIE = 'planifie';
    public const STATUS_EN_COURS = 'en-cours';
    public const STATUS_EN_RETARD = 'en-retard';
    public const STATUS_TERMINE = 'termine';
    public const STATUS_SUSPENDU = 'suspendu';

    public const PRIORITY_HAUTE = 'haute';
    public const PRIORITY_MOYENNE = 'moyenne';
    public const PRIORITY_NORMALE = 'normale';

    public const SECTOR_INFRASTRUCTURE = 'infrastructure';
    public const SECTOR_SANTE = 'sante';
    public const SECTOR_ENERGIE = 'energie';
    public const SECTOR_AGRICULTURE = 'agriculture';
    public const SECTOR_EDUCATION = 'education';
    public const SECTOR_EAU = 'eau';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le nom du projet est obligatoire')]
    #[Assert\Length(max: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 50, unique: true)]
    #[Assert\NotBlank(message: 'Le code du projet est obligatoire')]
    #[Assert\Length(max: 50)]
    private ?string $code = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Le secteur est obligatoire')]
    private ?string $sector = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $localisation = null;

    #[ORM\Column(length: 20)]
    private ?string $priorite = self::PRIORITY_NORMALE;

    #[ORM\Column(length: 20)]
    private ?string $status = self::STATUS_PLANIFIE;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $budgetTotal = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $montantDecaisse = null;

    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    #[Assert\Range(min: 0, max: 100)]
    private ?int $progress = 0;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sourceFinancement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $maitreOuvrage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chefProjet = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $beneficiaires = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $financementNational = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $financementPartenaires = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    private ?string $financementAutre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Institution::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Institution $institution = null;

    #[ORM\ManyToOne(targetEntity: Partner::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Partner $partnerPrincipal = null;

    #[ORM\ManyToMany(mappedBy: 'projets', targetEntity: Financement::class)]
    private Collection $financements;

    #[ORM\ManyToMany(targetEntity: Partner::class, inversedBy: 'projects')]
    #[ORM\JoinTable(name: 'project_partner')]
    private Collection $partners;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->status = self::STATUS_PLANIFIE;
        $this->priorite = self::PRIORITY_NORMALE;
        $this->progress = 0;
        $this->financements = new ArrayCollection();
        $this->partners = new ArrayCollection();
    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime();
        $this->generateSlug();
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updatedAt = new \DateTime();
        $this->generateSlug();
    }

    private function generateSlug(): void
    {
        if ($this->name) {
            $slug = strtolower($this->name);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $slug = trim($slug, '-');
            $this->slug = $slug . '-' . ($this->id ?? uniqid());
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;
        return $this;
    }

    public function getSector(): ?string
    {
        return $this->sector;
    }

    public function setSector(?string $sector): static
    {
        $this->sector = $sector;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): static
    {
        $this->localisation = $localisation;
        return $this;
    }

    public function getPriorite(): ?string
    {
        return $this->priorite;
    }

    public function setPriorite(?string $priorite): static
    {
        $this->priorite = $priorite;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getBudgetTotal(): ?string
    {
        return $this->budgetTotal;
    }

    public function setBudgetTotal(?string $budgetTotal): static
    {
        $this->budgetTotal = $budgetTotal;
        return $this;
    }

    public function getMontantDecaisse(): ?string
    {
        return $this->montantDecaisse;
    }

    public function setMontantDecaisse(?string $montantDecaisse): static
    {
        $this->montantDecaisse = $montantDecaisse;
        return $this;
    }

    public function getProgress(): ?int
    {
        return $this->progress;
    }

    public function setProgress(?int $progress): static
    {
        $this->progress = $progress;
        return $this;
    }

    public function getSourceFinancement(): ?string
    {
        return $this->sourceFinancement;
    }

    public function setSourceFinancement(?string $sourceFinancement): static
    {
        $this->sourceFinancement = $sourceFinancement;
        return $this;
    }

    public function getMaitreOuvrage(): ?string
    {
        return $this->maitreOuvrage;
    }

    public function setMaitreOuvrage(?string $maitreOuvrage): static
    {
        $this->maitreOuvrage = $maitreOuvrage;
        return $this;
    }

    public function getChefProjet(): ?string
    {
        return $this->chefProjet;
    }

    public function setChefProjet(?string $chefProjet): static
    {
        $this->chefProjet = $chefProjet;
        return $this;
    }

    public function getBeneficiaires(): ?string
    {
        return $this->beneficiaires;
    }

    public function setBeneficiaires(?string $beneficiaires): static
    {
        $this->beneficiaires = $beneficiaires;
        return $this;
    }

    public function getFinancementNational(): ?string
    {
        return $this->financementNational;
    }

    public function setFinancementNational(?string $financementNational): static
    {
        $this->financementNational = $financementNational;
        return $this;
    }

    public function getFinancementPartenaires(): ?string
    {
        return $this->financementPartenaires;
    }

    public function setFinancementPartenaires(?string $financementPartenaires): static
    {
        $this->financementPartenaires = $financementPartenaires;
        return $this;
    }

    public function getFinancementAutre(): ?string
    {
        return $this->financementAutre;
    }

    public function setFinancementAutre(?string $financementAutre): static
    {
        $this->financementAutre = $financementAutre;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getInstitution(): ?Institution
    {
        return $this->institution;
    }

    public function setInstitution(?Institution $institution): static
    {
        $this->institution = $institution;
        return $this;
    }

    public function getPartnerPrincipal(): ?Partner
    {
        return $this->partnerPrincipal;
    }

    public function setPartnerPrincipal(?Partner $partnerPrincipal): static
    {
        $this->partnerPrincipal = $partnerPrincipal;
        return $this;
    }

    public function getFinancements(): Collection
    {
        return $this->financements;
    }

    public function setFinancements(Collection $financements): static
    {
        $this->financements = $financements;
        return $this;
    }

    public function getPartners(): Collection
    {
        return $this->partners;
    }

    public function setPartners(Collection $partners): static
    {
        $this->partners = $partners;
        return $this;
    }

    // Helper methods
    public function getTauxDecaissement(): float
    {
        if (!$this->budgetTotal || floatval($this->budgetTotal) == 0) {
            return 0;
        }
        return round((floatval($this->montantDecaisse) / floatval($this->budgetTotal)) * 100, 2);
    }

    public function getSectorLabel(): string
    {
        return match($this->sector) {
            self::SECTOR_INFRASTRUCTURE => 'Infrastructure',
            self::SECTOR_SANTE => 'Santé',
            self::SECTOR_ENERGIE => 'Énergie',
            self::SECTOR_AGRICULTURE => 'Agriculture',
            self::SECTOR_EDUCATION => 'Éducation',
            self::SECTOR_EAU => 'Eau & Assainissement',
            default => $this->sector ?? 'Non défini'
        };
    }

    public function getSectorIcon(): string
    {
        return match($this->sector) {
            self::SECTOR_INFRASTRUCTURE => 'road',
            self::SECTOR_SANTE => 'heart-pulse',
            self::SECTOR_ENERGIE => 'zap',
            self::SECTOR_AGRICULTURE => 'wheat',
            self::SECTOR_EDUCATION => 'graduation-cap',
            self::SECTOR_EAU => 'droplets',
            default => 'folder'
        };
    }

    public function getStatusLabel(): string
    {
        return match($this->status) {
            self::STATUS_PLANIFIE => 'Planifié',
            self::STATUS_EN_COURS => 'En cours',
            self::STATUS_EN_RETARD => 'En retard',
            self::STATUS_TERMINE => 'Terminé',
            self::STATUS_SUSPENDU => 'Suspendu',
            default => $this->status ?? 'Non défini'
        };
    }

    public function getPrioriteLabel(): string
    {
        return match($this->priorite) {
            self::PRIORITY_HAUTE => 'Haute',
            self::PRIORITY_MOYENNE => 'Moyenne',
            self::PRIORITY_NORMALE => 'Normale',
            default => $this->priorite ?? 'Non définie'
        };
    }

    public static function getStatuses(): array
    {
        return [
            'Planifié' => self::STATUS_PLANIFIE,
            'En cours' => self::STATUS_EN_COURS,
            'En retard' => self::STATUS_EN_RETARD,
            'Terminé' => self::STATUS_TERMINE,
            'Suspendu' => self::STATUS_SUSPENDU,
        ];
    }

    public static function getPriorities(): array
    {
        return [
            'Haute' => self::PRIORITY_HAUTE,
            'Moyenne' => self::PRIORITY_MOYENNE,
            'Normale' => self::PRIORITY_NORMALE,
        ];
    }

    public static function getSectors(): array
    {
        return [
            'Infrastructure' => self::SECTOR_INFRASTRUCTURE,
            'Santé' => self::SECTOR_SANTE,
            'Énergie' => self::SECTOR_ENERGIE,
            'Agriculture' => self::SECTOR_AGRICULTURE,
            'Éducation' => self::SECTOR_EDUCATION,
            'Eau & Assainissement' => self::SECTOR_EAU,
        ];
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }

     
}
