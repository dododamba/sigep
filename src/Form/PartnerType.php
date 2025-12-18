<?php

namespace App\Form;

use App\Entity\Partner;
use App\Entity\TypePartner;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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

class PartnerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Informations Générales
            ->add('name', TextType::class, [
                'label' => 'Nom de l\'organisation',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Banque Mondiale',
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
                    'placeholder' => 'Ex: BM',
                ],
                'constraints' => [
                    new Length([
                        'max' => 50,
                        'maxMessage' => 'L\'acronyme ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            ->add('typePartner', EntityType::class, [
                'class' => TypePartner::class,
                'label' => 'Type de partenaire',
                'required' => true,
                'placeholder' => 'Sélectionner...',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le type de partenaire est obligatoire']),
                ],
            ])
            ->add('siteWeb', UrlType::class, [
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
            ->add('description', TextareaType::class, [
                'label' => 'Description / Mission',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 3,
                    'placeholder' => 'Brève description des axes d\'intervention...',
                ],
            ])
            ->add('logoFile', FileType::class, [
                'label' => 'Logo du partenaire',
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

            // Point Focal / Contact
            ->add('contactName', TextType::class, [
                'label' => 'Nom complet',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Nom du représentant',
                ],
            ])
            ->add('contactRole', TextType::class, [
                'label' => 'Fonction',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Représentant Résident',
                ],
            ])
            ->add('contactEmail', EmailType::class, [
                'label' => 'Email',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'email@exemple.com',
                ],
                'constraints' => [
                    new Email(['message' => 'Veuillez entrer une adresse email valide']),
                ],
            ])
            ->add('contactPhone', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '+235 XX XX XX XX',
                ],
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse physique (Bureau Tchad)',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Adresse complète',
                ],
            ])

            // Statut
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'required' => true,
                'choices' => [
                    'Actif' => 'Actif',
                    'Inactif' => 'Inactif',
                    'Suspendu' => 'Suspendu',
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
            'data_class' => Partner::class,
            'attr' => [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}
