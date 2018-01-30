<?php

namespace RVanGinneken\DropzoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RVanGinnekenDropzoneBundle:Default:index.html.twig');
    }
}
