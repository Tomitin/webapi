<?php

namespace WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use FOS\CKEditorBundle\Form\Type\CKEditorType;

class ReservaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder

        ->add('fecha', DateType::class, array(
            'widget' => 'single_text',
        ))  
        ->add('horario', TimeType::class, array(
            
            'widget' => 'choice',
            'hours' => array(
                13,
                14,
                15,
                16,
                17,
                18,
                19,
                20
            ),
            'minutes' => array(
                0,
                15,
                30,
                45

             )
        ))  
        ->add('comensales',IntegerType::class,array(
            'label'=>"Número de comensales"
        ))
        ->add('observaciones',CKEditorType::class,array(
            'label' =>"Observaciones"
        ))
        ->add('guardar',SubmitType::class, array(
            'label'=>'Nueva Reserva'));
    }
}