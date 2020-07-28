<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeaperoBoisson
 *
 * @ORM\Table(name="TYPEAPERO_BOISSON", indexes={@ORM\Index(name="FK_idTYPEAPEROBOISSON_idx", columns={"FK_idTYPEAPERO"}), @ORM\Index(name="FK_idBOISSONTYPEAPERO_idx", columns={"FK_idBOISSON"})})
 * @ORM\Entity
 */
class TypeaperoBoisson
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTYPEAPERO_BOISSON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeaperoBoisson;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteBoisson", type="integer", nullable=false)
     */
    private $quantiteboisson;

    /**
     * @var \Boisson
     *
     * @ORM\ManyToOne(targetEntity="Boisson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idBOISSON", referencedColumnName="idBOISSON")
     * })
     */
    private $fkIdboisson;

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
