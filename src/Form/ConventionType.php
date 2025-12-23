<?php

namespace App\Form;

use App\Entity\Convention;
use App\Entity\Financement;
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

class ConventionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('financement', EntityType::class, [
                'class' => Financement::class,
                'choice_label' => function (Financement $financement) {
                    return $financement->getNumeroConvention() . ' - ' . $financement->getBailleur();
                },
                'placeholder' => 'Sélectionner un financement...',
                'label' => 'Financement associé',
                'required' => true,
                'attr' => [
                    'class' => 'form-select',
                ],
                'help' => 'Le financement auquel cette convention est rattachée',
            ])
            ->add('code', TextType::class, [
                'label' => 'Code / Référence',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: TCH-2025-BM-01',
                    'maxlength' => 100,
                ],
                'help' => 'Code unique d\'identification de la convention',
            ])
            ->add('intitule', TextType::class, [
                'label' => 'Intitulé de la convention',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Projet d\'Appui au Développement Rural...',
                    'maxlength' => 255,
                ],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de convention',
                'choices' => [
                    'Don' => 'don',
                    'Prêt concessionnel' => 'pret',
                    'Financement mixte' => 'mixte',
                    'Contrat de Désendettement (C2D)' => 'c2d',
                    'Autre' => 'autre',
                ],
                'data' => 'don',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('partenaire', TextType::class, [
                'label' => 'Partenaire Technique & Financier',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Banque Mondiale',
                    'maxlength' => 255,
                    'list' => 'partenaires-list',
                ],
                'help' => 'Nom du bailleur de fonds ou partenaire',
            ])
            ->add('agenceExecution', TextType::class, [
                'label' => 'Agence d\'exécution (État)',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => 'Ex: Ministère des Finances',
                    'maxlength' => 255,
                ],
                'data' => 'Ministère des Finances',
            ])
            ->add('montantGlobal', MoneyType::class, [
                'label' => 'Montant Global',
                'required' => true,
                'currency' => false,
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
                'data' => 'XAF',
                'attr' => [
                    'class' => 'form-select',
                ],
            ])
            ->add('contrepartieEtat', MoneyType::class, [
                'label' => 'Contrepartie État',
                'required' => false,
                'currency' => false,
                'attr' => [
                    'class' => 'form-input',
                    'placeholder' => '0',
                    'min' => 0,
                ],
                'help' => 'Montant de la contrepartie apportée par l\'État tchadien',
            ])
            ->add('dateSignature', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de signature',
                'required' => true,
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('dateMiseEnVigueur', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de mise en vigueur',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                ],
            ])
            ->add('dateLimiteDecaissement', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date limite de décaissement',
                'required' => false,
                'attr' => [
                    'class' => 'form-input',
                ],
                'help' => 'Date de clôture du financement',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description sommaire / Objectifs',
                'required' => false,
                'attr' => [
                    'class' => 'form-textarea',
                    'rows' => 4,
                    'placeholder' => 'Objectifs principaux du financement...',
                ],
            ])
            ->add('documentConvention', FileType::class, [
                'label' => 'Copie de la convention signée',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-input',
                    'accept' => '.pdf',
                ],
                'constraints' => [
                    new File([
                        'maxSize' => '20M',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier PDF valide',
                    ])
                ],
                'help' => 'PDF uniquement (Max 20MB)',
            ])
        ;

        // Si on modifie une convention existante, ajouter les champs supplémentaires
        if ($options['show_status_fields']) {
            $builder
                ->add('statut', ChoiceType::class, [
                    'label' => 'Statut',
                    'choices' => [
                        'En cours' => 'en_cours',
                        'Clôturée' => 'cloture',
                        'Suspendue' => 'suspendue',
                        'Annulée' => 'annulee',
                    ],
                    'attr' => [
                        'class' => 'form-select',
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
            ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Convention::class,
            'show_status_fields' => false,
        ]);
    }
}
