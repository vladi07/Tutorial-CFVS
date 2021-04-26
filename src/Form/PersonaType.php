<?php

namespace App\Form;

use App\Entity\Persona;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres')
            ->add('primerApellido')
            ->add('segundoApellido')
            ->add('documentoIdentidad')
            ->add('expedido')
            ->add('fechaNacimiento')
            ->add('genero')
            ->add('correo')
            ->add('telefono')
            ->add('gradoAcademico')
            ->add('domicilio')
            ->add('departamento')
            ->add('centro')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Persona::class,
        ]);
    }
}
