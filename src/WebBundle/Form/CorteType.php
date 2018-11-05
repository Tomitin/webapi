<?php


namespace WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


use FOS\CKEditorBundle\Form\Type\CKEditorType;

class CorteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('nombre',TextType::class)
        ->add('descripcion',CKEditorType::class)
        ->add('herramientas',EntityType::class,array(
            //looks for choices from this entity
            'class' => 'WebBundle:Herramienta',
            'choice_label' => 'nombre',
            'multiple' => true,
        ))
        ->add('categoria',EntityType::class,array(
            //looks for choices from this entity
            'class' => 'WebBundle:Categoria',
            'choice_label' => 'nombre',
        ))
        ->add('foto',FileType::class,array(
            'attr' =>array(
                'onchange'=>'onChange(event)')))
        ->add('top')
        ->add('guardar',SubmitType::class, array(
            'label'=>'Nuevo Corte'));
    }
}