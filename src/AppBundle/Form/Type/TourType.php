<?php

// src/AppBundle/Form/Type/OrderType.php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Doctrine\ORM\EntityRepository;

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
            ->add('type', EntityType::class, [
                    'class' => 'AppBundle:Type',
                    'multiple' => false,
                    'required' => true,
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