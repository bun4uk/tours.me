<?php

// src/AppBundle/Form/Type/TourType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class TourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,
                [
                    'constraints' => [
                        new NotBlank(),
                        new Length(array('max' => 20))
                    ],
                    'label' => 'Your name'
                ]
            )
            ->add('email', EmailType::class,
                [
                    'constraints' => [
                        new NotBlank(),
                        new Length(array('max' => 50))
                    ],
                    'label' => 'Your email'
                ]
            )
            ->add('type', ChoiceType::class, [
                    'choices' => [
                        'Spain' => 'poland',
                        'Italy' => 'italy',
                        'France' => 'france',
                        'USA' => 'usa',
                        'Poland' => 'poland',
                    ],
                    'label' => 'Country'
                ]
            )
            ->add('count', IntegerType::class,
                [
                    'constraints' => [
                        new NotBlank(),
                        new Length(array('max' => 10)),
                    ],
                    'label' => 'Count of tickets'
                ]
            )
            ->add('save', SubmitType::class, ['label' => 'Order Now']);
    }
}