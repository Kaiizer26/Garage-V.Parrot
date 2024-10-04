<?php

namespace App\Form;

use App\Entity\Models;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ModelsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    $builder
            ->add('Nom', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Nom de la voiture']
            ])
            ->add('prix', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Prix']
            ])
            ->add('mensualite', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'placeholer' => 'Mensualité']
            ])
            ->add('carburant', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Carburant']
            ])
            ->add('km', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'km']
            ])
            ->add('boite', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Boite de vitesse']
            ])
            ->add('annee', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Année']
            ])
            // ->add('image', TextType::class, [
            //     'attr' => ['class' => 'form-control', 'placeholder' => 'i   mage']
            // ])
            // ->add('Image', FileType::class, [
            //     'attr' => ['class' => 'form-control-file']
            // ]);
            ->add('Ajouter', SubmitType::class, [
                'attr' => ['class' => 'button-home btn-review']
            ]);
    }
    // public function buildForm(FormBuilderInterface $builder, array $options): void
    // {
    //     $builder
    //         ->add('Nom')
    //         ->add('prix')
    //         ->add('mensualite')
    //         ->add('km')
    //         ->add('carburant')
    //         ->add('boite')
    //         ->add('annee')
    //     ;
    // }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Models::class,
        ]);
    }
}
