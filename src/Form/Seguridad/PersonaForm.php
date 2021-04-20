<?php


namespace App\Form\Seguridad;


use App\Entity\Persona;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaForm extends AbstractType
{
    /** Creamos los campos que tendra el formulario */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres', TextType::class)
            ->add('primerApellido', TextType::class)
            ->add('segundoApellido')
            ->add('documentoIdentidad')
            ->add('expedido', TextType::class)
            ->add('fechaNacimiento')
            ->add('genero', TextType::class)
            ->add('correo', TextType::class)
            ->add('telefono')
            ->add('gradoAcademico', TextType::class)
            ->add('domicilio', TextType::class)
            ->add('departamento', TextType::class)
            ->add('centro', TextType::class)
    }
    /** Creamos un constructor de la clase que se hara el formulario  */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Persona::class
        ]);
    }
}