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

   /**
    * @Route("/getAnzeigen", name="getAnzeigen")
    */
    public function getAnzeigen(Request $request)
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        $data = array();
        foreach ($users as $user){
           $data[] = array(
               "id" => $user->getId(),
               "geschlecht" => $user->getGeschlecht(),
               "spitzname" => $user->getSpitzname(),
               "geburtsdatum" => $user->getGeburtsdatum(),
               "anzeigeText" => $user->getAnzeige()->getAnzeigeText(),
               "anzeigeDatum" => $user->getAnzeige()->getEintrageDatum(),
           );
       }

        // replace this example code with whatever you need
        return new Response(json_encode($data));
    }
}
