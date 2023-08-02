<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BicycleTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Electric Bicycle' => 'electric',
                    'Road Bicycle' => 'road',
                ],
                'label' => 'Bicycle type',
            ])
            ->add('next', SubmitType::class, ['label' => 'Next']);
    }
}

