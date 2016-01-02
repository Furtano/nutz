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
 * @ORM\Table(name="User")
 */
class User {
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
  protected $spitzname;
  /**
    * @ORM\Column(type="boolean", nullable=false)
  */
  protected $geschlecht;
  /**
    * @ORM\Column(type="string", length=255,  nullable=false)
  */
  protected $profilbildId;
  /**
  * @ORM\Column(type="datetime")
  */
  protected $geburtsdatum;
  /**
      * @ORM\OneToOne(targetEntity="Anzeige")
      * @ORM\JoinColumn(name="anzeige_id", referencedColumnName="id")
      */
  protected $anzeige;
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
     * Get the value of Spitzname
     *
     * @return mixed
     */
    public function getSpitzname()
    {
        return $this->spitzname;
    }

    /**
     * Set the value of Spitzname
     *
     * @param mixed spitzname
     *
     * @return self
     */
    public function setSpitzname($spitzname)
    {
        $this->spitzname = $spitzname;

        return $this;
    }

    /**
     * Get the value of Geschlecht
     *
     * @return mixed
     */
    public function getGeschlecht()
    {
        return $this->geschlecht;
    }

    /**
     * Set the value of Geschlecht
     *
     * @param mixed geschlecht
     *
     * @return self
     */
    public function setGeschlecht($geschlecht)
    {
        $this->geschlecht = $geschlecht;

        return $this;
    }

    /**
     * Get the value of Profilbild Id
     *
     * @return mixed
     */
    public function getProfilbildId()
    {
        return $this->profilbildId;
    }

    /**
     * Set the value of Profilbild Id
     *
     * @param mixed profilbildId
     *
     * @return self
     */
    public function setProfilbildId($profilbildId)
    {
        $this->profilbildId = $profilbildId;

        return $this;
    }

    /**
     * Get the value of Geburtsdatum
     *
     * @return mixed
     */
    public function getGeburtsdatum()
    {
        return $this->geburtsdatum;
    }

    /**
     * Set the value of Geburtsdatum
     *
     * @param mixed geburtsdatum
     *
     * @return self
     */
    public function setGeburtsdatum($geburtsdatum)
    {
        $this->geburtsdatum = $geburtsdatum;

        return $this;
    }




    /**
     * Get the value of Anzeige
     *
     * @return mixed
     */
    public function getAnzeige()
    {
        return $this->anzeige;
    }

    /**
     * Set the value of Anzeige
     *
     * @param mixed anzeige
     *
     * @return self
     */
    public function setAnzeige($anzeige)
    {
        $this->anzeige = $anzeige;

        return $this;
    }

}
