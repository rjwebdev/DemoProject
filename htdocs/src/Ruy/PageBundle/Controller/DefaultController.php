<?php

namespace Ruy\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RuyPageBundle:Default:index.html.twig');
    }
}
