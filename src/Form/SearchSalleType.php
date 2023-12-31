<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\SalleSport;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchSalleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomSalle',ChoiceType::class,['choices'=> array(SalleSport::class)])
            ->add('adressSalle')
            ->add('descriptionSalle')
            ->add('price')
            ->add('imageName')
            ->add('category')
            ->add('Category', EntityType::class,['class'=> Category::class])
            ->add('recherche',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SalleSport::class,
        ]);
    }
}
