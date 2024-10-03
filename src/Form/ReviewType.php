<?php

namespace App\Form;

use App\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
// test
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ReviewType extends AbstractType
{
    // test
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
    $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Your Name']
            ])
            ->add('username', TextType::class, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Your Username']
            ])
            ->add('image', FileType::class, [
                'attr' => ['class' => 'form-control-file']
            ])
            ->add('stars', IntegerType::class, [
                'attr' => ['class' => 'form-control', 'min' => 0, 'max' => 5]
            ])
            ->add('comment', TextareaType::class, [
                'attr' => ['class' => 'form-control', 'rows' => 5, 'placeholder' => 'Your comment']
            ])
            ->add('save', SubmitType::class, [
                'attr' => ['class' => 'button-home btn-review']
            ]);
    }
    // test
    // public function buildForm(FormBuilderInterface $builder, array $options): void
    // {
    //     $builder
    //         ->add('name')
    //         ->add('username')
    //         ->add('image')
    //         ->add('stars')
    //         ->add('comment')
    //     ;

    // }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}
