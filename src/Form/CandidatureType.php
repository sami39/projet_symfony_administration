<?php

namespace App\Form;

use App\Entity\Entreprise;
use App\Entity\Candidature;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entreprises',EntityType::class,[
             
                'class' => Entreprise::class,
                'choice_label' => 'Nom'
            ])
            ->add('datedemande',DateType::class,[
                'label' => 'Date de demande',
                  'widget' => 'choice',
                    

            ])
            ->add('daterelance',DateType::class,[
                'label' => 'Date de relance',
                  'widget' => 'choice',
                    

            ])
            ->add('dateentretient',DateType::class,[
                'label' => "Date d'entretient",
                  'widget' => 'choice',
                   
                    

            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En attente',
                    'Relancée' => 'Relancée',
                    'Positif' => 'Positif',
                    'Négatif' =>  'Négatif',
                    
                     
                ],
             
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
