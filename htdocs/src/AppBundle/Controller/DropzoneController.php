<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DropzoneController extends Controller
{
    /**
     * @Route("/dropzone", name="dropzone")
     */
    public function indexAction(Request $request)
    {
        return $this->render('dropzone/index.html.twig', [
        ]);
    }
}
