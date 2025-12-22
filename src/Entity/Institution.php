<?php

namespace App\Entity;

use App\Repository\InstitutionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\String\Slugger\AsciiSlugger;

#[ORM\Entity(repositoryClass: InstitutionRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Institution
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $acronym = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logo = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[ORM\ManyToOne(inversedBy: 'institutions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeInstitution $typeInstitution = null;

    #[ORM\ManyToOne(inversedBy: 'institutions')]
    private ?SectorInstitution $sector = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $creationDate = null;

    // Leadership & Contact
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $headName = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $headTitle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $website = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 20)]
    private ?string $status = 'Actif';

    
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'institution')]
    private Collection $users;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\PrePersist]
    public function prePersist(): void
    {
        $this->createdAt = new \DateTime();
        $this->generateSlug();
        $this->users = new ArrayCollection();

    }

    #[ORM\PreUpdate]
    public function preUpdate(): void
    {
        $this->updatedAt = new \DateTime();
        $this->generateSlug();
    }

    private function generateSlug(): void
    {
        if ($this->name) {
            $slugger = new AsciiSlugger();
            $this->slug = strtolower($slugger->slug($this->name));
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

    public function getAcronym(): ?string
    {
        return $this->acronym;
    }

    public function setAcronym(?string $acronym): static
    {
        $this->acronym = $acronym;
        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): static
    {
        $this->logo = $logo;
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

    public function getTypeInstitution(): ?TypeInstitution
    {
        return $this->typeInstitution;
    }

    public function setTypeInstitution(?TypeInstitution $typeInstitution): static
    {
        $this->typeInstitution = $typeInstitution;
        return $this;
    }

    public function getSector(): ?SectorInstitution
    {
        return $this->sector;
    }

    public function setSector(?SectorInstitution $sector): static
    {
        $this->sector = $sector;
        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(?\DateTimeInterface $creationDate): static
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function getHeadName(): ?string
    {
        return $this->headName;
    }

    public function setHeadName(?string $headName): static
    {
        $this->headName = $headName;
        return $this;
    }

    public function getHeadTitle(): ?string
    {
        return $this->headTitle;
    }

    public function setHeadTitle(?string $headTitle): static
    {
        $this->headTitle = $headTitle;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;
        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): static
    {
        $this->website = $website;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
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

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): static
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function __toString(): string
    {
        return $this->name ?? '';
    }

     /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setInstitution($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getInstitution() === $this) {
                $user->setInstitution(null);
            }
        }

        return $this;
    }
    
    /**
     * Retourne le nombre d'utilisateurs actifs dans l'institution
     */
    public function getActiveUsersCount(): int
    {
        return $this->users->filter(function(User $user) {
            return $user->isVerified();
        })->count();
    }
    
    /**
     * Retourne les administrateurs de l'institution
     */
    public function getAdministrators(): Collection
    {
        return $this->users->filter(function(User $user) {
            return $user->isAdmin();
        });
    }
    
    /**
     * Vérifie si un utilisateur fait partie de cette institution
     */
    public function hasUser(User $user): bool
    {
        return $this->users->contains($user);
    }

}
