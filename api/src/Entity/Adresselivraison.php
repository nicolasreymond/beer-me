<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresselivraison
 *
 * @ORM\Table(name="ADRESSELIVRAISON")
 * @ORM\Entity
 */
class Adresselivraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="idADRESSELIVRAISON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadresselivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="rueLivraison", type="string", length=250, nullable=false)
     */
    private $ruelivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="numRueLivraison", type="integer", nullable=false)
     */
    private $numruelivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="npaLivraison", type="integer", nullable=false)
     */
    private $npalivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="villeLivraison", type="string", length=250, nullable=false)
     */
    private $villelivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="paysLivraison", type="string", length=250, nullable=false)
     */
    private $payslivraison;


}
