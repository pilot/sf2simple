<?php

namespace Knp\MyBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function helloAction()
    {
        // Note: there is no required :: before hello.html.twig
        // just do not forget clear cache from the "app/cache" folder
        return $this->render('hello.html.twig');
    }
}
