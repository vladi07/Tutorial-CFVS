<?php


namespace App\Controller\Seguridad;


use App\Entity\Persona;
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

    /**
     * @Route(
     *     "/persona/crear",
     *     name="persona_crear"
     * )
     */
     public function crearPersona(Request $request){
         print_r($request -> getMethod() );
         if($request->getMethod() == "POST"){
             /** Los 'key' son los campos name en 'crear_persona.html.twig' */
             $nombres = $request->request->get('nombres');
             $primerApellido = $request->request->get('primerApellido');
             $segundoApellido = $request->request->get('segundoApellido');
             $documentoIdentidad = $request->request->get('documentoIdentidad');
             $expedido = $request->request->get('expedido');
             $fechaNacimiento = $request->request->get('fechaNacimiento');
             $genero = $request->request->get('genero');
             $correo = $request->request->get('correo');
             $telefono = $request->request->get('telefono');
             $gradoAcademico = $request->request->get('gradoAcademico');
             $domicilio = $request->request->get('domicilio');
             $departamento = $request->request->get('departamento');
             $centro = $request->request->get('centro');
            /** Consultamos que los datos no estern en blanco al momento de enviar los datos a la BD */
             if (isset($nombres) && $nombres !=''){
                 /** Creamos un objeto PERSONA */
                 $persona = new Persona();
                 $persona -> setNombres($nombres);
                 $persona -> setPrimerApellido($primerApellido);
                 $persona -> setSegundoApellido($segundoApellido);
                 $persona -> setDocumentoIdentidad($documentoIdentidad);
                 $persona -> setExpedido($expedido);
                 $persona -> setFechaNacimiento($fechaNacimiento);
                 $persona -> setGenero($genero);
                 $persona -> setCorreo($correo);
                 $persona -> setTelefono($telefono);
                 $persona -> setGradoAcademico($gradoAcademico);
                 $persona -> setDomicilio($domicilio);
                 $persona -> setDepartamento($departamento);
                 $persona -> setCentro($centro);

                 /** Usamos las funcion Entity Manager para almacenar en la DataBase */
                 $em = $this -> getDoctrine()->getManager();
                 /** LE mandamos los parametros del objeto */
                 $em -> persist($persona);
                 /** Revisa los objetos persistidos y crea el SQL en la Database */
                 $em -> flush();
                 /** Mostramos mensajes de registro exitoso o fallido */
                 $this->addFlash('success', 'Felicidades, los datos han sido registrsdos en la BD');
             }
             else {
                 $this->addFlash('error','Necesita completar los datos');
             }

             /**$informacionEnviada = $request->request->all();
             print_r($informacionEnviada);*/
         }

         return $this->render("Seguridad/persona/crear_persona.html.twig");
     }
}