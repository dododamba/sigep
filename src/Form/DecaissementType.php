<?php

namespace App\Form;

use App\Entity\Decaissement;
use App\Entity\Financement;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class DecaissementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('project', EntityType::class, [
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
            ->add('financement', EntityType::class, [
                'class' => Financement::class,
                'choice_label' => function (Financement $financement) {
                    return $financement->getNumeroConvention() . ' - ' . $financement->getBailleur();
                },
                'placeholder' => 'Sélectionner un financement...',
                'label' => 'Convention de financement',
                'required' => true,
                'attr' => [
                    'class' => 'form-select',
                ],
                'help' => 'Le financement doit être lié au projet sélectionné',
            ])
            ->add('dateDemande', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de la demande',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                ],
                'data' => new \DateTime(), // Valeur par défaut : aujourd'hui
            ])
            ->add('beneficiaire', TextType::class, [
                'label' => 'Bénéficiaire',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: SOGEA SATOM',
                    'maxlength' => 255,
                ],
                'help' => 'Nom de l\'entreprise ou de l\'organisme bénéficiaire',
            ])
            ->add('montant', MoneyType::class, [
                'label' => 'Montant du décaissement',
                'required' => true,
                'currency' => false, // On gère la devise séparément
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0',
                    'min' => 0,
                ],
            ])
            ->add('devise', ChoiceType::class, [
                'label' => 'Devise',
                'choices' => [
                    'FCFA (XAF)' => 'XAF',
                    'Euro (EUR)' => 'EUR',
                    'Dollar US (USD)' => 'USD',
                ],
                'data' => 'XAF', // Valeur par défaut
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('modePaiement', ChoiceType::class, [
                'label' => 'Mode de paiement',
                'choices' => [
                    'Virement Bancaire' => 'virement',
                    'Chèque Trésor' => 'cheque',
                    'Paiement Direct Bailleur' => 'paiement_direct',
                    'Autre' => 'autre',
                ],
                'data' => 'virement', // Valeur par défaut
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('ligneBudgetaire', TextType::class, [
                'label' => 'Ligne budgétaire',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: 2025-INV-INFRA-004',
                    'maxlength' => 100,
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description / Objet du paiement',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 4,
                    'placeholder' => 'Décrivez l\'objet du décaissement (ex: Paiement facture N°123 pour travaux lot 1)...',
                ],
            ])
            ->add('pieceJustificative', FileType::class, [
                'label' => 'Pièce justificative',
                'required' => false,
                'mapped' => false, // Ce champ n'est pas mappé directement sur l'entité
                'attr' => [
                    'class' => 'form-input',
                    'accept' => '.pdf,.jpg,.jpeg,.png',
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '10M',
                        'mimeTypes' => [
                            'application/pdf',
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier PDF ou une image valide (JPG, PNG)',
                    ])
                ],
                'help' => 'Formats acceptés : PDF, JPG, PNG (Max 10MB)',
            ])
        ;

        // Si on modifie un décaissement existant, ajouter les champs supplémentaires
        if ($options['show_status_fields']) {
            $builder
                ->add('statut', ChoiceType::class, [
                    'label' => 'Statut',
                    'choices' => [
                        'En attente' => 'en_attente',
                        'Validé' => 'valide',
                        'Exécuté' => 'execute',
                        'Rejeté' => 'rejete',
                        'Annulé' => 'annule',
                    ],
                    'attr' => [
                        'class' => 'form-select',
                    ],
                ])
                ->add('commentaire', TextareaType::class, [
                    'label' => 'Commentaire',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-textarea',
                        'rows' => 3,
                        'placeholder' => 'Ajoutez un commentaire ou une note...',
                    ],
                ])
                ->add('dateValidation', DateType::class, [
                    'widget' => 'single_text',
                    'label' => 'Date de validation',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-input',
                    ],
                ])
                ->add('dateExecution', DateType::class, [
                    'widget' => 'single_text',
                    'label' => 'Date d\'exécution',
                    'required' => false,
                    'attr' => [
                        'class' => 'form-input',
                    ],
                ])
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Decaissement::class,
            'show_status_fields' => false, // Par défaut, on ne montre pas les champs de statut
        ]);
    }
}
