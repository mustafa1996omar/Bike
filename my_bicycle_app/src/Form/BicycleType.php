<?php

namespace App\Form;

use App\Entity\Bicycle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class BicycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('color', TextType::class)
        ->add('model', TextType::class)
        ->add('speed', IntegerType::class)
        ->add('topSpeed', IntegerType::class)
        ->add('numberOfGears', IntegerType::class)
        ->add('weight', NumberType::class)
        ->add('save', SubmitType::class, ['label' => 'Create Bicycle']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bicycle::class,
        ]);
    }
}
