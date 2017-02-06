<?php

namespace ApiGameBundle\Form\Type;

use ApiGameBundle\Entity\Fight;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


/**
 * Class FightType
 */
class FightType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'developer',
                EntityType::class,
                [
                    'class'        => 'ApiGameBundle:Developer',
                    'choice_label' => 'nickname',
                    'expanded'     => true,
                    'multiple'     => false,
                ]
            )
            ->add(
                'project',
                EntityType::class,
                [
                    'class'        => 'ApiGameBundle:Project',
                    'choice_label' => 'name',
                    'expanded'     => true,
                    'multiple'     => false,
                ]
            )
            ->add('proposedPrice', IntegerType::class)
            ->add('proposedDays', IntegerType::class);
    }

    /**
     * @param OptionsResolver $resolver
     *
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class'      => Fight::class,
                'csrf_protection' => false,
            ]
        );
    }
}