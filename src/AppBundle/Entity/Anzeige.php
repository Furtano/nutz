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
 * @ORM\Table(name="Anzeige")
 */
class Anzeige {
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




    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Anzeigetext
     *
     * @return mixed
     */
    public function getAnzeigetext()
    {
        return $this->anzeigetext;
    }

    /**
     * Set the value of Anzeigetext
     *
     * @param mixed anzeigetext
     *
     * @return self
     */
    public function setAnzeigetext($anzeigetext)
    {
        $this->anzeigetext = $anzeigetext;

        return $this;
    }

    /**
     * Get the value of Eintrage Datum
     *
     * @return mixed
     */
    public function getEintrageDatum()
    {
        return $this->eintrageDatum;
    }

    /**
     * Set the value of Eintrage Datum
     *
     * @param mixed eintrageDatum
     *
     * @return self
     */
    public function setEintrageDatum($eintrageDatum)
    {
        $this->eintrageDatum = $eintrageDatum;

        return $this;
    }

}
