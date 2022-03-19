<?php

namespace App\Form;

use App\Entity\Trip;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class TripType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure')
            ->add('destination')
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
            ->add('description')
            ->add('title')
            ->add('userTripOwner')
            ->add('imageFile',VichImageType::class,['required'=>false]);

              ### ON RAJOUTE UNE IMAGE QUE L'ON VA UPLOADER
           # ->add('imageFile',FileType::class,['required'=>false]);
             ### ON RAJOUTE UNE IMAGE QUE L'ON VA UPLOADER
             ### ON RAJOUTE UNE IMAGE QUE L'ON VA UPLOADER
             ### ON RAJOUTE UNE IMAGE QUE L'ON VA UPLOADER
            /*->add('imageFileName',FileType::class, [
                'label' => 'Image',
                'mapped' => false,
            ]
            );*/
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trip::class,
        ]);
    }
}
