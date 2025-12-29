<?php

namespace App\Form;

use App\Entity\Role;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du rôle',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Gestionnaire de projets',
                    'maxlength' => 100,
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du rôle est obligatoire']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères',
                    ]),
                ],
            ])
            
            ->add('code', TextType::class, [
                'label' => 'Code du rôle',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: ROLE_PROJECT_MANAGER',
                    'maxlength' => 50,
                ],
                'help' => 'Le code doit commencer par ROLE_ et contenir uniquement des majuscules et underscores',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le code du rôle est obligatoire']),
                    new Assert\Regex([
                        'pattern' => '/^ROLE_[A-Z_]+$/',
                        'message' => 'Le code doit commencer par ROLE_ et contenir uniquement des majuscules et underscores',
                    ]),
                ],
            ])
            
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Description du rôle et de ses responsabilités...',
                ],
            ])
            
            ->add('priority', IntegerType::class, [
                'label' => 'Priorité',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'min' => 0,
                    'max' => 100,
                ],
                'help' => 'Plus la valeur est élevée, plus le rôle est prioritaire (0-100)',
                'constraints' => [
                    new Assert\Range([
                        'min' => 0,
                        'max' => 100,
                        'notInRangeMessage' => 'La priorité doit être entre {{ min }} et {{ max }}',
                    ]),
                ],
            ])
            
            ->add('isActive', CheckboxType::class, [
                'label' => 'Rôle actif',
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input',
                ],
                'help' => 'Les rôles inactifs ne peuvent pas être assignés aux utilisateurs',
            ])
        ;

        // Les permissions sont gérées manuellement dans le template avec checkboxes
        // car elles sont dynamiques et basées sur Role::ENTITIES et Role::ACTIONS
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Role::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'role_item',
        ]);
    }
}
