<?php


namespace WebBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use FOS\CKEditorBundle\Form\Type\CKEditorType;

class CategoriaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('nombre',TextType::class)
        ->add('descripcion',CKEditorType::class)
        ->add('guardar',SubmitType::class, array(
            'label'=>'Nueva Categoria'));
    }
}