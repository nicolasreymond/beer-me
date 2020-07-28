<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brasserie
 *
 * @ORM\Table(name="BRASSERIE")
 * @ORM\Entity
 */
class Brasserie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBRASSERIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBrasserie", type="string", length=250, nullable=false)
     */
    private $nombrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBrasserie", type="string", length=250, nullable=false)
     */
    private $descriptionbrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="rueBrasserie", type="string", length=250, nullable=false)
     */
    private $ruebrasserie;

    /**
     * @var int
     *
     * @ORM\Column(name="numRueBrasserie", type="integer", nullable=false)
     */
    private $numruebrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="villeBrasserie", type="string", length=250, nullable=false)
     */
    private $villebrasserie;

    /**
     * @var int
     *
     * @ORM\Column(name="npaBrasserie", type="integer", nullable=false)
     */
    private $npabrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="paysBrasserie", type="string", length=250, nullable=false)
     */
    private $paysbrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="autorisationBrasserie", type="string", length=45, nullable=false)
     */
    private $autorisationbrasserie;


}
