<?php

namespace App\Form;

use App\Entity\Project;
use App\Entity\Institution;
use App\Entity\Partner;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Informations générales
            ->add('name', TextType::class, [
                'label' => 'Nom du projet',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Route Nationale N\'Djamena - Abéché',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du projet est obligatoire']),
                    new Assert\Length(['max' => 255]),
                ],
            ])
            ->add('code', TextType::class, [
                'label' => 'Code projet',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'PRJ-2025-XXX',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le code du projet est obligatoire']),
                    new Assert\Length(['max' => 50]),
                ],
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: N\'Djamena, Région du Lac...',
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'placeholder' => 'Décrivez les objectifs et la portée du projet...',
                    'rows' => 4,
                ],
            ])
            ->add('sector', ChoiceType::class, [
                'label' => 'Secteur d\'activité',
                'required' => true,
                'choices' => Project::getSectors(),
                'placeholder' => 'Sélectionner un secteur',
                'attr' => [
                    'class' => 'form-select',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le secteur est obligatoire']),
                ],
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priorité',
                'required' => true,
                'choices' => Project::getPriorities(),
                'expanded' => false,
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('status', ChoiceType::class, [
                'label' => 'Statut',
                'required' => true,
                'choices' => Project::getStatuses(),
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            
            // Dates
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin prévue',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            
            // Finances
            ->add('budgetTotal', NumberType::class, [
                'label' => 'Budget total (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            ->add('montantDecaisse', NumberType::class, [
                'label' => 'Montant décaissé (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            ->add('progress', IntegerType::class, [
                'label' => 'Progression (%)',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'min' => 0,
                    'max' => 100,
                    'placeholder' => '0',
                ],
                'constraints' => [
                    new Assert\Range([
                        'min' => 0,
                        'max' => 100,
                        'notInRangeMessage' => 'La progression doit être entre {{ min }}% et {{ max }}%',
                    ]),
                ],
            ])
            ->add('sourceFinancement', TextType::class, [
                'label' => 'Source de financement',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Banque Mondiale, BAD, Budget National...',
                ],
            ])
            ->add('financementNational', NumberType::class, [
                'label' => 'Financement national (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            ->add('financementPartenaires', NumberType::class, [
                'label' => 'Financement partenaires (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            ->add('financementAutre', NumberType::class, [
                'label' => 'Autres financements (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            
            // Responsables
            ->add('maitreOuvrage', TextType::class, [
                'label' => 'Maître d\'ouvrage',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Ministère des Infrastructures',
                ],
            ])
            ->add('chefProjet', TextType::class, [
                'label' => 'Chef de projet',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Nom du responsable',
                ],
            ])
            ->add('beneficiaires', TextType::class, [
                'label' => 'Bénéficiaires',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: 500,000 habitants',
                ],
            ])
            
            // Notes
            ->add('notes', TextareaType::class, [
                'label' => 'Notes additionnelles',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'placeholder' => 'Informations complémentaires...',
                    'rows' => 3,
                ],
            ])
        ;

        // Ajouter les relations si les entités existent
        if (class_exists(Institution::class)) {
            $builder->add('institution', EntityType::class, [
                'class' => Institution::class,
                'label' => 'Institution responsable',
                'required' => false,
                'placeholder' => 'Sélectionner une institution',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
            ]);
        }

        if (class_exists(Partner::class)) {
            $builder->add('partnerPrincipal', EntityType::class, [
                'class' => Partner::class,
                'label' => 'Partenaire principal',
                'required' => false,
                'placeholder' => 'Sélectionner un partenaire',
                'choice_label' => 'name',
                'attr' => [
                    'class' => 'form-select',
                ],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
            'attr' => [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}
