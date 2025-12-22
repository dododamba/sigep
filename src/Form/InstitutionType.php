<?php

namespace App\Form;

use App\Entity\Institution;
use App\Entity\TypeInstitution;
use App\Entity\SectorInstitution;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Url;

class InstitutionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // === Informations Générales ===
            ->add('name', TextType::class, [
                'label' => 'Nom de l\'Institution',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Ministère de l\'Éducation Nationale',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est obligatoire']),
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('acronym', TextType::class, [
                'label' => 'Acronyme',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: MEN',
                ],
                'constraints' => [
                    new Length([
                        'max' => 50,
                        'maxMessage' => 'L\'acronyme ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('typeInstitution', EntityType::class, [
                'class' => TypeInstitution::class,
                'label' => 'Type d\'entité',
                'required' => true,
                'placeholder' => 'Sélectionner le type...',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le type d\'institution est obligatoire']),
                ],
            ])
            ->add('sector', EntityType::class, [
                'class' => SectorInstitution::class,
                'label' => 'Secteur d\'activité',
                'required' => false,
                'placeholder' => 'Sélectionner le secteur...',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('creationDate', DateType::class, [
                'label' => 'Date de création',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description / Mission',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 4,
                    'placeholder' => 'Description des missions et attributions de l\'institution...',
                ],
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo de l\'institution',
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'accept' => 'image/png, image/jpeg, image/jpg',
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (PNG, JPG)',
                        'maxSizeMessage' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Maximum autorisé: {{ limit }} {{ suffix }}.',
                    ])
                ],
            ])

            // === Leadership & Contact ===
            ->add('headName', TextType::class, [
                'label' => 'Nom du Responsable (Ministre/DG)',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Nom complet du responsable',
                ],
            ])
            ->add('headTitle', TextType::class, [
                'label' => 'Titre / Fonction',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Ministre, Directeur Général',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email officiel',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'contact@domaine.td',
                ],
                'constraints' => [
                    new Email(['message' => 'Veuillez entrer une adresse email valide']),
                ],
            ])
            ->add('phone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '+235 XX XX XX XX',
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse physique',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Quartier, Avenue, Ville',
                ],
            ])
            ->add('website', UrlType::class, [
                'label' => 'Site Web',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'https://...',
                ],
                'constraints' => [
                    new Url(['message' => 'Veuillez entrer une URL valide']),
                ],
            ])

            // === Statut ===
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'required' => true,
                'choices' => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                    'En restructuration' => 'En restructuration',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Institution::class,
            'attr' => [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}
