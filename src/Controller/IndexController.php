<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route(
     *     "/",
     *     name="indice")
     */
    public function index() {
        return $this->json(["text"=>"Hola esta es mi ruta index con json", "otro" => 350],200);
        //return new Response("Hola esta es mi ruta index",300);
    }
}