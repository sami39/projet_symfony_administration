<?php

namespace App\Form;

use App\Entity\Stagaire;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
 
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use FM\ElfinderBundle\Form\Type\ElFinderType;
 
 
class StagaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Prenom')
            ->add('Nom')
            ->add('Adresse')
            ->add('codepostal')
            ->add('ville')
            ->add('Telephone',TextType::class)
            ->add('email',EmailType::class)
            ->add('lienportfolio')
            ->add('liengithub')
            ->add('liencv')
            ->add('Promtion')
            ->add('Avatar',ElFinderType::class, ['instance' => 'form', 'enable' => true])
                

            ->add('competance')
                
            
           
            ->add('zonedemobilite')
            ->add('mobile',CheckboxType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stagaire::class,
        ]);
    }
}
