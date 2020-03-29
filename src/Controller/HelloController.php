<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello", name="hello")
     */
    public function index()
    {
        return $this->render("hello/hello.html.twig", [
            "name" => "BO GOSS"
        ]);
    }

    /**
     * @Route("/hello/{name}", name="hello_name")
     */
    public function helloName($name)
    {
        return new Response('Hello ' . $name);
    }
}