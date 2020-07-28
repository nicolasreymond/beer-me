<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediaboisson
 *
 * @ORM\Table(name="MEDIABOISSON", indexes={@ORM\Index(name="FK_idBOISSONMEDIA_idx", columns={"FK_idBOISSON"})})
 * @ORM\Entity
 */
class Mediaboisson
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMEDIABOISSON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmediaboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="pathMediaBoisson", type="string", length=200, nullable=false)
     */
    private $pathmediaboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMediaBoisson", type="string", length=200, nullable=false)
     */
    private $typemediaboisson;

    /**
     * @var \Boisson
     *
     * @ORM\ManyToOne(targetEntity="Boisson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idBOISSON", referencedColumnName="idBOISSON")
     * })
     */
    private $fkIdboisson;


}
