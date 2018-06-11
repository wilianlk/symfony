<?php

namespace PruebasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PruebasBundle:Default:index.html.twig');
    }

    public function nombreAction()
    {
        return $this->render('@Pruebas/Default/nombre..html.twig');
    }
}
