<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediabrasserie
 *
 * @ORM\Table(name="MEDIABRASSERIE", indexes={@ORM\Index(name="FK_idBRASSERIE_idx", columns={"FK_idBRASSERIE"})})
 * @ORM\Entity
 */
class Mediabrasserie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMEDIABRASSERIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmediabrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="pathMediaBrasserie", type="string", length=200, nullable=false)
     */
    private $pathmediabrasserie;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMediaBrasserie", type="string", length=200, nullable=false)
     */
    private $typemediabrasserie;

    /**
     * @var \Brasserie
     *
     * @ORM\ManyToOne(targetEntity="Brasserie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idBRASSERIE", referencedColumnName="idBRASSERIE")
     * })
     */
    private $fkIdbrasserie;


}
