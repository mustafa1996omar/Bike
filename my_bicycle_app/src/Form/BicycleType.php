<?php

namespace App\Form;

use App\Entity\Bicycle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BicycleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('color')
            ->add('model')
            ->add('speed')
            ->add('topSpeed')
            ->add('numberOfGears')
            ->add('weight');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Bicycle::class,
        ]);
    }
}
