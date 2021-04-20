<?php


namespace App\Controller\Seguridad;


use App\Entity\Persona;
use App\Form\Seguridad\PersonaForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends AbstractController
{
    /**
     * @Route(
     *     "/persona/inicio",
     *     name="persona_inicio"
     * )
     */
    public function index(){
        return $this->render("Seguridad/persona/index.html.twig");
    }

    /** Funcion que muestra el formulario */
    /**
     * @Route(
     *     "/persona/crear",
     *     name="persona_crear"
     * )
     */
     public function crearPersona(Request $request){
         $personaForm = $this->createForm(PersonaForm::class);
         $personaForm->handleRequest($request);
         ##/** Verificamos que los datos se hayan enviado a la Datqbase */##
         if($personaForm->isSubmitted() && $personaForm->isValid()){
             $persona = $personaForm->getData();
             $em = $this->getDoctrine()->getManager();
             $em -> persist($persona);
             $em -> flush();

             $this -> addFlash('Success', 'Persona Creada Exitosamente');
         }

         return $this->render("Seguridad/persona/crear_persona.html.twig", [
             'personaForm' => $personaForm->createView()
         ]);
     }
}