<?php

namespace App\Form;

use App\Entity\Financement;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class FinancementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Informations du bailleur
            ->add('bailleur', ChoiceType::class, [
                'label' => 'Bailleur de fonds',
                'required' => true,
                'choices' => Financement::getBailleurs(),
                'placeholder' => 'Sélectionner un bailleur',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de financement',
                'required' => true,
                'choices' => Financement::getTypes(),
                'placeholder' => 'Sélectionner un type',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('numeroConvention', TextType::class, [
                'label' => 'Numéro de convention',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'CONV-XXX-2025-001',
                ],
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'required' => true,
                'choices' => Financement::getStatuts(),
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            
            // Dates
            ->add('dateSignature', DateType::class, [
                'label' => 'Date de signature',
                'required' => true,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('dateEntreeVigueur', DateType::class, [
                'label' => 'Date d\'entrée en vigueur',
                'required' => false,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('dateEcheance', DateType::class, [
                'label' => 'Date d\'échéance',
                'required' => true,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            
            // Montants
            ->add('montantEngage', NumberType::class, [
                'label' => 'Montant engagé (Milliards FCFA)',
                'required' => true,
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
            ->add('contrepartieNationale', NumberType::class, [
                'label' => 'Contrepartie nationale (Milliards FCFA)',
                'required' => false,
                'scale' => 2,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0.00',
                    'step' => '0.01',
                ],
            ])
            
            // Conditions de financement
            ->add('tauxInteret', TextType::class, [
                'label' => 'Taux d\'intérêt',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: 1.5% ou 0%',
                ],
            ])
            ->add('dureeFinancement', TextType::class, [
                'label' => 'Durée du financement',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: 5 ans',
                ],
            ])
            ->add('differeRemboursement', TextType::class, [
                'label' => 'Différé de remboursement',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: 3 ans',
                ],
            ])
            ->add('conditions', TextareaType::class, [
                'label' => 'Conditions particulières',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'placeholder' => 'Décrivez les conditions du financement...',
                    'rows' => 4,
                ],
            ])
            
            // Notes
            ->add('notes', TextareaType::class, [
                'label' => 'Notes',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'placeholder' => 'Notes additionnelles...',
                    'rows' => 3,
                ],
            ])
            
            // Projets associés
            ->add('projets', EntityType::class, [
                'class' => Project::class,
                'label' => 'Projets financés',
                'required' => false,
                'multiple' => true,
                'expanded' => true,
                'choice_label' => function(Project $project) {
                    return sprintf('%s (%s)', $project->getName(), $project->getCode());
                },
                'attr' => [
                    'class' => 'projects-checkboxes',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Financement::class,
            'attr' => [
                'novalidate' => 'novalidate',
            ],
        ]);
    }
}
