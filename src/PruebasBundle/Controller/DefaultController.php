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

    public function nombreAction($id ="sin nota")
    {
        return $this->render('PruebasBundle:Default:nombre.html.twig',array('id'=> $id));
    }
}
