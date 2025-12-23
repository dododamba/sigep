<?php

namespace App\Form;

use App\Entity\Audit;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;

class AuditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('projet', EntityType::class, [
                'class' => Project::class,
                'choice_label' => function (Project $projet) {
                    return $projet->getName() . ' (' . $projet->getCode() . ')';
                },
                'placeholder' => 'Sélectionner un projet...',
                'label' => 'Projet',
                'required' => true,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type d\'audit/contrôle',
                'choices' => Audit::getTypes(),
                'required' => true,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Audit financier du 1er semestre 2025',
                    'maxlength' => 255,
                ],
            ])
            ->add('dateAudit', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de l\'audit/contrôle',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('auditeur', TextType::class, [
                'label' => 'Auditeur / Contrôleur',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Nom de l\'auditeur ou contrôleur',
                    'maxlength' => 255,
                ],
            ])
            ->add('organisme', TextType::class, [
                'label' => 'Organisme / Cabinet',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Cabinet KPMG, Inspection Générale...',
                    'maxlength' => 255,
                ],
            ])
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                ],
                'help' => 'Si l\'audit s\'étend sur plusieurs jours',
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('objectifs', TextareaType::class, [
                'label' => 'Objectifs de l\'audit',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 3,
                    'placeholder' => 'Décrivez les objectifs de cet audit ou contrôle...',
                ],
            ])
            ->add('resultat', TextareaType::class, [
                'label' => 'Résultat / Conclusion',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 4,
                    'placeholder' => 'Résumé des conclusions et constatations...',
                ],
            ])
            ->add('recommandations', TextareaType::class, [
                'label' => 'Recommandations',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 4,
                    'placeholder' => 'Liste des recommandations formulées...',
                ],
            ])
            ->add('observations', TextareaType::class, [
                'label' => 'Observations',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 3,
                    'placeholder' => 'Remarques ou observations particulières...',
                ],
            ])
            ->add('documentsFiles', FileType::class, [
                'label' => 'Documents justificatifs',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => [
                    'class' => 'form-input',
                    'accept' => '.pdf,.doc,.docx,.xls,.xlsx',
                ],
                'constraints' => [
                    new All([
                        new File([
                            'maxSize' => '10M',
                            'mimeTypes' => [
                                'application/pdf',
                                'application/msword',
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                'application/vnd.ms-excel',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            ],
                            'mimeTypesMessage' => 'Format de fichier non valide',
                        ])
                    ])
                ],
                'help' => 'PDF, Word, Excel (Max 10MB par fichier)',
            ])
            ->add('photosFiles', FileType::class, [
                'label' => 'Photos',
                'required' => false,
                'mapped' => false,
                'multiple' => true,
                'attr' => [
                    'class' => 'form-input',
                    'accept' => 'image/*',
                ],
                'constraints' => [
                    new All([
                        new File([
                            'maxSize' => '5M',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/jpg',
                                'image/png',
                                'image/webp',
                            ],
                            'mimeTypesMessage' => 'Format d\'image non valide',
                        ])
                    ])
                ],
                'help' => 'JPG, PNG, WEBP (Max 5MB par photo)',
            ])
        ;

        // Si on modifie un audit existant, ajouter les champs de statut
        if ($options['show_status_fields']) {
            $builder
                ->add('statut', ChoiceType::class, [
                    'label' => 'Statut',
                    'choices' => Audit::getStatuts(),
                    'attr' => [
                        'class' => 'form-select',
                    ],
                ])
                ->add('niveau', ChoiceType::class, [
                    'label' => 'Niveau d\'évaluation',
                    'choices' => Audit::getNiveaux(),
                    'required' => false,
                    'placeholder' => 'Sélectionner un niveau...',
                    'attr' => [
                        'class' => 'form-select',
                    ],
                ])
                ->add('score', IntegerType::class, [
                    'label' => 'Score (%)',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-input',
                        'min' => 0,
                        'max' => 100,
                        'placeholder' => '0-100',
                    ],
                    'help' => 'Score en pourcentage (0 à 100)',
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Audit::class,
            'show_status_fields' => false,
        ]);
    }
}
