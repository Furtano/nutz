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
       "alter" => $user->getAlter(),
       "anzeigeText" => $user->getAnzeige()->getAnzeigeText(),
       "anzeigeDatum" => $user->getAnzeige()->getEintrageDatum(),
       );
   }

        // replace this example code with whatever you need
   return new Response(json_encode($data));
 }

    /**
    * @Route("/nachrichtSenden", name="sendeNachricht")
    */
    public function sendeNachricht(Request $request)
    {
      $id = $request->query->get('id');
      $nachricht = $request->query->get('nachricht');
      $empfaenger = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);
      if($empfaenger){
        return new Response(
          //var_dump(mail($empfaenger->getEmail(), $empfaenger->getSpitzname(), $nachricht, $empfaenger->getEmail()))
        );
      }

      else {
        return new Response("Error");
      }


        // replace this example code with whatever you need
    }
  }
