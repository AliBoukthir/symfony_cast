<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function homepage()
    {
        return new Response('Hello world');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug): Response
    {
        return new Response('show quest');
    }

}