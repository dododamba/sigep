<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Institution;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'];
        $institution = $options['institution'];

        $builder
            // Informations personnelles
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prénom est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le prénom ne peut pas dépasser {{ limit }} caractères'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Saisissez le prénom'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom de famille',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est obligatoire']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 255,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Saisissez le nom de famille'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse email',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'email est obligatoire']),
                    new Assert\Email(['message' => 'Veuillez saisir un email valide'])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'exemple@email.com'
                ]
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => '+235 XX XX XX XX'
                ],
                'help' => 'Format recommandé: +235 XX XX XX XX'
            ])
            ->add('address', TextareaType::class, [
                'label' => 'Adresse',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Adresse complète'
                ]
            ])
            
            // Informations professionnelles
            ->add('matricule', TextType::class, [
                'label' => 'Matricule',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de matricule'
                ],
                'help' => 'Numéro d\'identification unique de l\'agent'
            ])
            ->add('hireDate', DateType::class, [
                'label' => 'Date d\'embauche',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'help' => 'Date d\'entrée en service'
            ])
            ->add('department', TextType::class, [
                'label' => 'Département/Service',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Direction, service ou département'
                ]
            ])
            
            // Institution (affiché mais en lecture seule si déjà définie)
            ->add('institution', EntityType::class, [
                'label' => 'Institution',
                'class' => Institution::class,
                'choice_label' => 'name',
                'placeholder' => 'Sélectionner une institution',
                'required' => false,
                'disabled' => $institution !== null, // Désactivé si l'institution est déjà définie
                'data' => $institution, // Pré-remplir avec l'institution courante
                'attr' => [
                    'class' => 'form-select'
                ],
                'help' => $institution 
                    ? 'Institution assignée automatiquement' 
                    : 'Sélectionnez l\'institution de rattachement'
            ])
            
            // Sécurité et accès
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent être identiques',
                'required' => !$isEdit,
                'first_options' => [
                    'label' => 'Mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Minimum 8 caractères',
                        'autocomplete' => 'new-password'
                    ],
                    'help' => $isEdit 
                        ? 'Laisser vide pour conserver le mot de passe actuel' 
                        : 'Minimum 8 caractères, lettres et chiffres recommandés'
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Répétez le mot de passe',
                        'autocomplete' => 'new-password'
                    ]
                ],
                'constraints' => $isEdit ? [] : [
                    new Assert\NotBlank(['message' => 'Le mot de passe est obligatoire']),
                    new Assert\Length([
                        'min' => 8,
                        'minMessage' => 'Le mot de passe doit contenir au moins {{ limit }} caractères'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
                        'message' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre'
                    ])
                ],
                'mapped' => false,
            ])
            
            ->add('roles', ChoiceType::class, [
                'label' => 'Rôles système',
                'choices' => [
                    'Utilisateur standard' => 'ROLE_USER',
                    'Gestionnaire' => 'ROLE_MANAGER',
                    'Administrateur' => 'ROLE_ADMIN',
                    'Super Administrateur' => 'ROLE_SUPER_ADMIN'
                ],
                'multiple' => true,
                'expanded' => true,
                'required' => false,
                'data' => $options['data']->getRoles() ?: ['ROLE_USER'],
                'attr' => [
                    'class' => 'roles-checkbox-group'
                ],
                'help' => 'Sélectionnez un ou plusieurs rôles pour définir les permissions'
            ])
            
            ->add('accessLevel', ChoiceType::class, [
                'label' => 'Niveau d\'accès',
                'choices' => [
                    'Utilisateur Standard' => 'USER_STANDARD',
                    'Gestionnaire' => 'MANAGER',
                    'Administrateur' => 'ADMIN',
                    'Super Administrateur' => 'SUPER_ADMIN'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'help' => 'Définit le niveau de privilèges dans le système'
            ])
            
            ->add('isVerified', CheckboxType::class, [
                'label' => 'Compte vérifié et actif',
                'required' => false,
                'data' => !$isEdit,
                'attr' => [
                    'class' => 'form-check-input'
                ],
                'help' => 'Un compte vérifié peut se connecter au système'
            ])
            
            // Avatar
            ->add('avatarFile', FileType::class, [
                'label' => 'Photo de profil',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/gif',
                            'image/webp'
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPG, PNG, GIF, WEBP)',
                        'maxSizeMessage' => 'Le fichier ne doit pas dépasser 2MB'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'accept' => 'image/*'
                ],
                'help' => 'Formats acceptés: JPG, PNG, GIF, WEBP (max 2MB)'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_edit' => false,
            'institution' => null,
        ]);

        $resolver->setAllowedTypes('is_edit', 'bool');
        $resolver->setAllowedTypes('institution', ['null', Institution::class]);
    }
}
