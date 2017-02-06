<?php

namespace ApiGameBundle\Form\Type;

use ApiGameBundle\Entity\Developer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class DeveloperType
 */
class DeveloperType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname', TextType::class)
            ->add('tagLine', TextType::class)
            ->add(
                'skills',
                EntityType::class,
                [
                    'class'        => 'ApiGameBundle:DeveloperSkills',
                    'choice_label' => 'name',
                    'expanded'     => true,
                    'multiple'     => true,
                ]
            );
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
                'data_class'      => Developer::class,
                'csrf_protection' => false
            ]
        );
    }
}