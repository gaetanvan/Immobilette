<?php

namespace App\Form;

use App\Entity\Property;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ImageType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;


class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('category', ChoiceType::class, [

            'choices' => [
                'Vente' =>'Vente',
                'Location' =>'Location',
                   
            ],

            'by_reference' => false
        ])
        
        ->add('sells',ChoiceType::class,[
            
            'label' => 'type de biens',
            'choices' => [
                'Appartement' =>'appartement',
                'Maison / Villa' =>'maison',
                'Local commercial' =>'local',
                'Garage / Parking' =>'parking',
            ], 
        ])
  
        ->add('area',NumberType::class,[
            
            'label' =>'surface en m²',
        ])

        
        ->add('city', TextType::class,[
            
            'label' => 'ville',
            
        ])
        
        ->add('price', NumberType::class,[
            
            'label' => 'prix',
        ])
        ->add('room_number', ChoiceType::class,[
            'multiple' => false,
            'expanded' => true,
            'choices' => [
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                '5+' => 5,
            ],   
            'label' => 'nombre de pièces',
            
            
        ])

        ->add('details', TextareaType::class,[
            
            'label' =>'description',
        ])
        
        ->add('image',FileType::class,[
            'mapped' => false,
            'multiple' => true,
            'label' => 'choisissez vos photos',
            // 'attr' => [
            // 'placeholder' => 'télécharger'
            // ]
        ])
        
        
        ->add('submit', SubmitType::class, [
            'label' => "valider",
            
        ]);

        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {


        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Property::class,
        ]);
    }
}
