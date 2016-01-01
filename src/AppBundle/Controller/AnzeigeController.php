<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AnzeigeController extends Controller{
  /**
   * @Route("/anzeige", name="anzeige")
   */
   public function indexAction(Request $request)
   {
       // replace this example code with whatever you need
       return new Response("hallo");
   }
}
