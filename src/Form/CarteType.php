<?php

namespace App\Form;

use App\Entity\Carte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class CarteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class,[
            "label"=>"Nom de la carte",
            "empty_data" => ""
        ])
        ->add('image',  ChoiceType::class,[           
            'choices' => [
                '' => '',
                'archer' => 'archer.png',
                'artilleur' => 'artilleur.png',
                'barricades' => 'barricade.png',
                'canon' => 'canon.png',
                'cavalerie' => 'cavalerie.png',
                'champion' => 'champion.png',
                'chateau' => 'chateau.png',
                'espion' => 'espion.png',
                'fantassin' => 'fantassin.png',
                'fort' => 'fort.png',
                'lancier' => 'lancier.png',
                'mage' => 'mage.png',
                'mur' => 'mur.png',
                'piques' => 'pique.png',
                'porte' => 'porte.png',
                'salle des coffres' => 'salle des coffres.png',
                'torche' => 'torche.png',
                'tour' => 'tour.png',
        ]])
            ->add('gold',NumberType::class,[
                "label"=>"Coût en or",
                "empty_data" => ""
            ])
            ->add('bonus', NumberType::class,[
                "label"=>"Bonus",
                "empty_data" => ""
            ])
            ->add('style', ChoiceType::class,[
                'choices' => [
                    'Force Militaire' => 'bonus attaque.png',
                    'Structure Défensive' => 'bonus defense.png'
            ]])
            ->add('cost', ChoiceType::class,[
                'label'=>'Coût en ressource',
                'choices' => [
                    '' => '',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3'
            ]])
            ->add('cost2', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3'
            ]])
            ->add('cost3', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    '1' => '1',
                    '2' => '2',
                    '3' => '3'
            ]])
            ->add('ressource', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    'Bois' => 'Bois.png',
                    'Pierre' => 'Pierre.png',
                    'Fer' => 'Fer.png',
                    'Charbon' => 'Charbon.png',
                    'Cristal' => 'Cristal.png',
                    'Papier' => 'Papier.png'
            ]])
            ->add('ressource2', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    'Bois' => 'Bois.png',
                    'Pierre' => 'Pierre.png',
                    'Fer' => 'Fer.png',
                    'Charbon' => 'Charbon.png',
                    'Cristal' => 'Cristal.png',
                    'Papier' => 'Papier.png'
            ]])
            ->add('ressource3', ChoiceType::class,[
                'choices' => [
                    '' => '',
                    'Bois' => 'Bois.png',
                    'Pierre' => 'Pierre.png',
                    'Fer' => 'Fer.png',
                    'Charbon' => 'Charbon.png',
                    'Cristal' => 'Cristal.png',
                    'Papier' => 'Papier.png'
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Carte::class,
            'attr'=> [
                'novalidate'=>'novalidate',
            ]
        ]);
    }
}
