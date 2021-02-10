<?php

namespace App\Form;

use App\Entity\Stagaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StagaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom')
            ->add('Nom')
            ->add('Adresse')
            ->add('code_Postal')
            ->add('ville')
            ->add('Telephone')
            ->add('email')
            ->add('lien_portfolio')
            ->add('lien_github')
            ->add('lien_cv')
            ->add('Promtion')
            ->add('Avatar')
            ->add('competance')
            ->add('mobile')
            ->add('zone_de_mobilite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stagaire::class,
        ]);
    }
}
