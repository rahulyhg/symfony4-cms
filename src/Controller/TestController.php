<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    /**
     * Simple test of twig render template
     *
     * @Route("/", name="test_page")
     * @return Response
     */
    public function initTest()
    {

        return $this->render('test/show.html.twig', [
           'title'  =>  "this is a Test",
           'text'   =>  "lorem ipsum dolor sita amet kalsjdkla sdals dajdl ad asd"
        ]);
    }

    /**
     *  Return an api json repsonse
     *
     * @Route("/api-test", name="api-test")
     */
    public function apiEndpointTest()
    {
        return new JsonResponse(['lorem' => 'ipsum']);
    }
}