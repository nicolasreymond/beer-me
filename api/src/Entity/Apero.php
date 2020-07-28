<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apero
 *
 * @ORM\Table(name="APERO", indexes={@ORM\Index(name="FK_idTYPEAPEROAPERO_idx", columns={"FK_idTYPEAPERO"})})
 * @ORM\Entity
 */
class Apero
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAPERO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idapero;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrParticipentApero", type="integer", nullable=false)
     */
    private $nbrparticipentapero;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrBoissonParticipentApero", type="integer", nullable=false)
     */
    private $nbrboissonparticipentapero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateApero", type="datetime", nullable=false)
     */
    private $dateapero;

    /**
     * @var \Typeapero
     *
     * @ORM\ManyToOne(targetEntity="Typeapero")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idTYPEAPERO", referencedColumnName="idTYPEAPERO")
     * })
     */
    private $fkIdtypeapero;


}
