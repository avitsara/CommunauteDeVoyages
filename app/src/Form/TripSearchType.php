<?php

namespace App\Form;

use App\Entity\TripSearch;
use App\Entity\Trip;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//// Formulaire permettant de rechercher des voyages 
class TripSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('departure',TextType::class)
            ->add('destination',TextType::class)
            ->add('travelCompanionNumber',IntegerType::class)
           
        ;
    }

   /* public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TripSearch::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }*/

}
