<?php
/**
 * Created by PhpStorm.
 * User: christianschade
 * Date: 05.09.14
 * Time: 21:50
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity
 * @ORM\Table(name="anzeige")
 */
class AnzeigeEntity {
  public function __construct()
   {
   }

   /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $id;
  /**
    * @ORM\Column(type="string", length=255,  nullable=false)
  */
  protected $anzeigetext;
  /**
  * @ORM\Column(type="datetime")
  */
  protected $eintrageDatum;

}
