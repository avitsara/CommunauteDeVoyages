<?php

namespace App\Form;

use App\Entity\Trip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\ImageType;
use Vich\UploaderBundle\Form\Type\VichImageType;

/**=== FORMULAIRE PERMETTANT LA CRÉATION DE NOUVEAUX VOYAGES =====*/
class TripCreationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('departure')
            ->add('tripDepartureRegion')
            ->add('destination')
            ->add('tripDestinationRegion')
            ->add('beginDate')
            ->add('endDate')
            ->add('transportation',ChoiceType::class, [
                'choices'  => [
                    'Bus' => true,
                    'Plane' => true,
                    'Car' => true,
                    'Ship' => true,

                ],
                
            ])
           
            ->add('travelCompanionNumber')
            ->add('description',TextareaType::class)
            ### ON RAJOUTE UNE IMAGE QUE L'ON VA UPLOADER
            ->add('imageFile',VichImageType::class,['required'=>false]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trip::class,
        ]);
    }
}
