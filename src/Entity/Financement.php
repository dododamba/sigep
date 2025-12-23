<?php

namespace App\Entity;

use App\Repository\FinancementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FinancementRepository::class)]
#[ORM\Table(name: 'financements')]
#[ORM\HasLifecycleCallbacks]
class Financement
{
    // Types de financement
    public const TYPE_PRET = 'pret';
    public const TYPE_DON = 'don';
    public const TYPE_SUBVENTION = 'subvention';
    public const TYPE_PRET_CONCESSIONNEL = 'pret-concessionnel';
    public const TYPE_CREDIT = 'credit';

    // Statuts
    public const STATUT_ACTIF = 'actif';
    public const STATUT_EN_NEGOCIATION = 'en-negociation';
    public const STATUT_CLOTURE = 'cloture';
    public const STATUT_SUSPENDU = 'suspendu';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotBlank(message: 'Le bailleur de fonds est obligatoire')]
    private Partner $bailleur;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le type de financement est obligatoire')]
    private ?string $type = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'Le numéro de convention est obligatoire')]
    private ?string $numeroConvention = null;

    #[ORM\Column(length: 255, unique: true, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de signature est obligatoire')]
    private ?\DateTimeInterface $dateSignature = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateEntreeVigueur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date d\'échéance est obligatoire')]
    private ?\DateTimeInterface $dateEcheance = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    #[Assert\NotBlank(message: 'Le montant engagé est obligatoire')]
    #[Assert\Positive(message: 'Le montant doit être positif')]
    private ?string $montantEngage = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    #[Assert\PositiveOrZero]
    private ?string $montantDecaisse = '0.00';

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2, nullable: true)]
    #[Assert\PositiveOrZero]
    private ?string $contrepartieNationale = '0.00';

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $tauxInteret = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $dureeFinancement = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $differeRemboursement = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $conditions = null;

    #[ORM\Column(length: 50)]
    private ?string $statut = self::STATUT_ACTIF;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\ManyToMany(targetEntity: Project::class, inversedBy: 'financements')]
    #[ORM\JoinTable(name: 'financement_projet')]
    private Collection $projets;

    #[ORM\OneToMany(mappedBy: 'financement', targetEntity: Decaissement::class)]
    private Collection $decaissements;


    #[ORM\OneToMany(mappedBy: 'financement', targetEntity: Convention::class)]
    private Collection $conventions;

    public function __construct()
    {
        $this->projets = new ArrayCollection();
        $this->decaissements = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->statut = self::STATUT_ACTIF;
        $this->montantDecaisse = '0.00';
        $this->contrepartieNationale = '0.00';
        $this->conventions = new ArrayCollection();

    }

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
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
        if ($this->numeroConvention) {
            $slug = strtolower($this->numeroConvention);
            $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
            $this->slug = trim($slug, '-');
        }
    }

    // ===== Getters & Setters =====

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBailleur(): ?Partner
    {
        return $this->bailleur;
    }

    public function setBailleur(Partner $bailleur): static
    {
        $this->bailleur = $bailleur;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getNumeroConvention(): ?string
    {
        return $this->numeroConvention;
    }

    public function setNumeroConvention(string $numeroConvention): static
    {
        $this->numeroConvention = $numeroConvention;
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

    public function getDateSignature(): ?\DateTimeInterface
    {
        return $this->dateSignature;
    }

    public function setDateSignature(?\DateTimeInterface $dateSignature): static
    {
        $this->dateSignature = $dateSignature;
        return $this;
    }

    public function getDateEntreeVigueur(): ?\DateTimeInterface
    {
        return $this->dateEntreeVigueur;
    }

    public function setDateEntreeVigueur(?\DateTimeInterface $dateEntreeVigueur): static
    {
        $this->dateEntreeVigueur = $dateEntreeVigueur;
        return $this;
    }

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->dateEcheance;
    }

    public function setDateEcheance(?\DateTimeInterface $dateEcheance): static
    {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    public function getMontantEngage(): ?string
    {
        return $this->montantEngage;
    }

    public function setMontantEngage(?string $montantEngage): static
    {
        $this->montantEngage = $montantEngage;
        return $this;
    }

    public function getMontantDecaisse(): ?string
    {
        return $this->montantDecaisse ?? '0.00';
    }

    public function setMontantDecaisse(?string $montantDecaisse): static
    {
        $this->montantDecaisse = $montantDecaisse;
        return $this;
    }

    public function getContrepartieNationale(): ?string
    {
        return $this->contrepartieNationale ?? '0.00';
    }

    public function setContrepartieNationale(?string $contrepartieNationale): static
    {
        $this->contrepartieNationale = $contrepartieNationale;
        return $this;
    }

    public function getTauxInteret(): ?string
    {
        return $this->tauxInteret;
    }

    public function setTauxInteret(?string $tauxInteret): static
    {
        $this->tauxInteret = $tauxInteret;
        return $this;
    }

    public function getDureeFinancement(): ?string
    {
        return $this->dureeFinancement;
    }

    public function setDureeFinancement(?string $dureeFinancement): static
    {
        $this->dureeFinancement = $dureeFinancement;
        return $this;
    }

    public function getDiffereRemboursement(): ?string
    {
        return $this->differeRemboursement;
    }

    public function setDiffereRemboursement(?string $differeRemboursement): static
    {
        $this->differeRemboursement = $differeRemboursement;
        return $this;
    }

    public function getConditions(): ?string
    {
        return $this->conditions;
    }

    public function setConditions(?string $conditions): static
    {
        $this->conditions = $conditions;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;
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

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Project $projet): static
    {
        if (!$this->projets->contains($projet)) {
            $this->projets->add($projet);
        }
        return $this;
    }

    public function removeProjet(Project $projet): static
    {
        $this->projets->removeElement($projet);
        return $this;
    }

    // ===== Helper Methods =====

    public function getTauxDecaissement(): float
    {
        $engage = (float) $this->montantEngage;
        $decaisse = (float) $this->montantDecaisse;
        
        if ($engage <= 0) {
            return 0.0;
        }
        
        return round(($decaisse / $engage) * 100, 2);
    }

    public function getMontantRestant(): float
    {
        return round((float)$this->montantEngage - (float)$this->montantDecaisse, 2);
    }

 

    public function getBailleurShortName(): string
    {
        return $this->bailleur->getAcronym() ?? substr($this->getBailleurLabel(), 0, 3);
    }

    public function getTypeBailleur(): string
    {
        return match($this->bailleur) {
            self::BAILLEUR_NATIONAL => 'National',
            self::BAILLEUR_AFD, self::BAILLEUR_CHINE => 'Bilatéral',
            default => 'Multilatéral'
        };
    }

    public function getTypeLabel(): string
    {
        return match($this->type) {
            self::TYPE_PRET => 'Prêt',
            self::TYPE_DON => 'Don',
            self::TYPE_SUBVENTION => 'Subvention',
            self::TYPE_PRET_CONCESSIONNEL => 'Prêt Concessionnel',
            self::TYPE_CREDIT => 'Crédit',
            default => $this->type ?? 'Non défini'
        };
    }

    public function getStatutLabel(): string
    {
        return match($this->statut) {
            self::STATUT_ACTIF => 'Actif',
            self::STATUT_EN_NEGOCIATION => 'En négociation',
            self::STATUT_CLOTURE => 'Clôturé',
            self::STATUT_SUSPENDU => 'Suspendu',
            default => $this->statut ?? 'Non défini'
        };
    }

    public function isActif(): bool
    {
        return $this->statut === self::STATUT_ACTIF;
    }

    public function isApproachingDeadline(): bool
    {
        if (!$this->dateEcheance) return false;
        $diff = (new \DateTime())->diff($this->dateEcheance);
        return $diff->days <= 90 && $diff->invert === 0;
    }

    public function isExpired(): bool
    {
        return $this->dateEcheance && $this->dateEcheance < new \DateTime();
    }

    // ===== Static Methods =====

    public static function getTypes(): array
    {
        return [
            'Prêt' => self::TYPE_PRET,
            'Don' => self::TYPE_DON,
            'Subvention' => self::TYPE_SUBVENTION,
            'Prêt Concessionnel' => self::TYPE_PRET_CONCESSIONNEL,
            'Crédit' => self::TYPE_CREDIT,
        ];
    }

  
    public static function getStatuts(): array
    {
        return [
            'Actif' => self::STATUT_ACTIF,
            'En négociation' => self::STATUT_EN_NEGOCIATION,
            'Clôturé' => self::STATUT_CLOTURE,
            'Suspendu' => self::STATUT_SUSPENDU,
        ];
    }

    public function __toString(): string
    {
        return sprintf('%s - %s', $this->numeroConvention, $this->getBailleurLabel());
    }

    public function getConventions(): Collection
    {
        return $this->conventions;
    }

}
