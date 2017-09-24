<?php

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form


class ArticleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
        ->add('Title', TextType::class, [
            'label' => 'Titre'
        ])
        ->add('Description', TextareaType::class, [
            'label' => 'Description'
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Article'
        ])
    }
}