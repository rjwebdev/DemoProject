<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    /**
     * @Route("/page", name="page")
     */
    public function indexAction(Request $request)
    {
        return $this->render('page/index.html.twig', [
        ]);
    }
}
