<?php

namespace App\Form;

use App\Entity\PlateauDeJoueur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;


class PlateauDeJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('race', TextType::class,[
            "label"=>"Nom de la race"
        ])
        ->add('description', TextType::class,[
            "label"=>"Capacité spéciale"
        ])
        ->add('forBase', NumberType::class,[
            "label"=>"Force de base",
            'empty_data' => '0'
        ])
        ->add('defBase', NumberType::class,[
            "label"=>"Défense de base",
            'empty_data' => '0'
        ])
        ->add('goldBase', NumberType::class,[
            "label"=>"Or de base",
            'empty_data' => '0'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PlateauDeJoueur::class,
            'attr'=> [
                'novalidate'=>'novalidate',
            ]
        ]);
    }
}
