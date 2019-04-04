<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function initTest() {

        return $this->render('test/show.html.twig', [
           'title'  =>  "this is a Test",
           'text'   =>  "lorem ipsum dolor sita amet kalsjdkla sdals dajdl ad asd"
        ]);
    }
}