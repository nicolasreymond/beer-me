<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Abonnement;

class AbonnementType extends AbstractType
{
 public static function buildForm(FormBuilderInterface$builder,array$options){
   $builder
     ->add('nom')
     ->add('description')
     ->add('duree')
     ->add('nbrBoisson')
     ->add('prix')
     ->add('nom')
     ->add('save', SubmitType::class);
 }

 public static function configureOptions(OptionsResolver $resolver){
   $resolver->setDefault(array(
     'data_class' => Abonnement::class,
     'csrf_protection' => false
   ));
 }

}
