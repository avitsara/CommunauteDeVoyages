<?php

namespace App\Form;

use App\Entity\Trip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**=== FORMULAIRE PERMETTANT LA CRÉATION DE NOUVEAUX VOYAGES =====*/
class TripCreationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure')
            ->add('destination')
            ->add('beginDate')
            ->add('endDate')
            ->add('transportation')
            ->add('travelCompanionNumber')
            ->add('description',TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trip::class,
        ]);
    }
}
