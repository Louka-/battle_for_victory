<?php

namespace App\Form;

use App\Entity\Ressource;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                "label"=>"Nom de la carte ressource",
                "empty_data" => ""
            ])
            ->add('cost', ChoiceType::class,[
                'label'=>'Coût en ressource',
                'choices' => [
                    '' => '',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3',


            ]])
            ->add('ressource', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    'Bois' => 'Bois.png',
                    'Pierre' => 'Pierre.png',
                    'Fer' => 'Fer.png',
                    'Charbon' => 'Charbon.png',
                    'Cristal' => 'Cristal.png',
                    'Papier' => 'Papier.png',


            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ressource::class,
            'attr'=> [
                'novalidate'=>'novalidate',
            ]
        ]);
    }
}
