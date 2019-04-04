<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    /**
     * @Route("/")
     *
     * @return Response
     */
    public function initTest() {
        return new Response("Hello test page");
    }
}