<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomcours", type="string", length=32, nullable=true)
     */
    private $nomcours;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbcreditcours", type="integer", nullable=true)
     */
    private $nbcreditcours;

    /**
     * @var string
     *
     * @ORM\Column(name="specialitecours", type="string", length=32, nullable=true)
     */
    private $specialitecours;

    /**
     * @var integer
     *
     * @ORM\Column(name="idcours", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cours_idcours_seq", allocationSize=1, initialValue=1)
     */
    private $idcours;

    function getNomcours() {
        return $this->nomcours;
    }

    function getNbcreditcours() {
        return $this->nbcreditcours;
    }

    function getSpecialitecours() {
        return $this->specialitecours;
    }

    function getIdcours() {
        return $this->idcours;
    }


}
