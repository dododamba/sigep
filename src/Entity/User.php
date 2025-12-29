<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà pris !')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;
    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avatar = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastname = null; 

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $address = null;

    
    #[ORM\Column(type: 'boolean')]
    private bool $isVerified = false;

     #[ORM\Column(length: 50, nullable: true)]
    private ?string $matricule = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $hireDate = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $department = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $accessLevel = 'USER_STANDARD';


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $slug = null;

      #[ORM\Column(length: 255, nullable: true)]
    private ?string $phone = null;


    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    

    #[ORM\ManyToOne(targetEntity: Institution::class, inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?Institution $institution = null;

    #[ORM\ManyToOne(targetEntity: Role::class)]
    #[ORM\JoinColumn(nullable: true)]
    private ?Role $role = null;
        
    #[ORM\Column(type: 'json')]
    private array $roles = [];

    public function __construct()
    {
        $this->setSlug('uuid-' . uniqid()); // Utilisation d'uniqid() au lieu de str_randomize()
        $this->createdAt = new \DateTimeImmutable();
        $this->isVerified = false;
    }


 
    public function getFullName(): string
    {
        return trim(($this->firstname ?? '') . ' ' . ($this->lastname ?? ''));
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }



      public function getRole(): ?Role
    {
        return $this->role;
    }

    public function setRole(?Role $role): self
    {
        $this->role = $role;
        return $this;
    }


    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

  /**
     * @see UserInterface
     */
        public function getRoles(): array
        {
            $roles = ['ROLE_USER'];

            if ($this->role && $this->role->getIsActive()) {
                $roles[] = $this->role->getCode();
            }

            return array_unique($roles);
        }




    public function setRoles(array $roles): self
{
    // Nettoyage + sécurité
    $this->roles = array_values(array_unique($roles));

    return $this;
}


    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;
        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;
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

    // === MÉTHODES UTILITAIRES ===

    /**
     * Retourne une représentation string de l'utilisateur
     */
    public function __toString(): string
    {
        return $this->getFullName() ?: $this->email ?: 'Utilisateur #' . $this->id;
    }

    /**
     * Vérifie si l'utilisateur a un rôle spécifique
     */
    public function hasRole(string $role): bool
    {
        return in_array($role, $this->getRoles(), true);
    }

    /**
     * Vérifie si l'utilisateur est administrateur
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('ROLE_ADMIN');
    }

    /**
     * Vérifie si l'utilisateur est manager
     */
    public function isManager(): bool
    {
        return $this->hasRole('ROLE_MANAGER');
    }

    /**
     * Obtient l'initiales de l'utilisateur pour l'avatar
     */
    public function getInitials(): string
    {
        $firstname = $this->firstname ? strtoupper(substr($this->firstname, 0, 1)) : '';
        $lastname = $this->lastname ? strtoupper(substr($this->lastname, 0, 1)) : '';
        
        return $firstname . $lastname ?: strtoupper(substr($this->email, 0, 2));
    }

    /**
     * Vérifie si l'utilisateur appartient à la même institution qu'un autre utilisateur
     */
    public function isSameInstitution(User $otherUser): bool
    {
        return $this->institution && $otherUser->getInstitution() 
            && $this->institution->getId() === $otherUser->getInstitution()->getId();
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


     /**
     * Get the institution associated with the user
     */
    public function getInstitution(): ?Institution
    {
        return $this->institution;
    }

    /**
     * Set the institution for the user
     */
    public function setInstitution(?Institution $institution): static
    {
        $this->institution = $institution;
        return $this;
    }
    
    // ... autres méthodes ...

    /**
     * Vérifie si l'utilisateur appartient à une institution spécifique
     */
    public function belongsToInstitution(?Institution $institution): bool
    {
        if (!$this->institution || !$institution) {
            return false;
        }
        return $this->institution->getId() === $institution->getId();
    }
    
    /**
     * Vérifie si l'utilisateur est responsable de son institution
     */
    public function isInstitutionHead(): bool
    {
        return $this->institution && 
               $this->institution->getHeadName() === $this->getFullName();
    }

     public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(?string $matricule): static
    {
        $this->matricule = $matricule;
        return $this;
    }

    public function getHireDate(): ?\DateTimeInterface
    {
        return $this->hireDate;
    }

    public function setHireDate(?\DateTimeInterface $hireDate): static
    {
        $this->hireDate = $hireDate;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): static
    {
        $this->department = $department;
        return $this;
    }

    public function getAccessLevel(): ?string
    {
        return $this->accessLevel;
    }

    public function setAccessLevel(?string $accessLevel): static
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }


     
    /**
     * Retourne le niveau d'accès en format lisible
     */
    public function getAccessLevelLabel(): string
    {
        return match($this->accessLevel) {
            'SUPER_ADMIN' => 'Super Administrateur',
            'ADMIN' => 'Administrateur',
            'MANAGER' => 'Gestionnaire',
            default => 'Utilisateur Standard'
        };
    }
    
    /**
     * Vérifie si l'utilisateur est super administrateur
     */
    public function isSuperAdmin(): bool
    {
        return $this->accessLevel === 'SUPER_ADMIN' || $this->hasRole('ROLE_SUPER_ADMIN');
    }


    
    /**
     * Retourne toutes les permissions de l'utilisateur
     */
    public function getPermissions(): array
    {
        if ($this->role && $this->role->getIsActive()) {
            return $this->role->getPermissions();
        }

        return [];
    }


  
}