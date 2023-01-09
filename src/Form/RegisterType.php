<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', TextType::class, [
                'label' => 'Nom de famille',
                'constraints' => new NotBlank(),
            ])
            ->add('name', TextType::class, [
                'label' => 'Prénom',
                'constraints' => new NotBlank(),
            ])
            ->add('email', EmailType::class, [
                'label' => 'Mail',
                'constraints' => new NotBlank(),
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'constraints' => new NotBlank(),
            ])
            ->add('birthDate',BirthdayType::class, [
            'label' => 'Date de naissance',
            'placeholder' => [
                'year' => 'Year', 'month' => 'Month', 'day' => 'Day',
            ],
                'constraints' => new NotBlank(),
            ])
            ->add('phone', TextType::class, [
                'label' => 'Numéro de téléphone',
                'constraints' => new NotBlank(),
            ])
            ->add('submit', SubmitType::class,[
                'label' => "S'inscrire"
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
