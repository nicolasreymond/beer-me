<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediacartoncadeau
 *
 * @ORM\Table(name="MEDIACARTONCADEAU", indexes={@ORM\Index(name="FK_idCARTONCADEAUMEDIA_idx", columns={"FK_idCARTONCADEAU"})})
 * @ORM\Entity
 */
class Mediacartoncadeau
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMEDIACARTONCADEAU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmediacartoncadeau;

    /**
     * @var string
     *
     * @ORM\Column(name="pathMediaCartonCadeau", type="string", length=200, nullable=false)
     */
    private $pathmediacartoncadeau;

    /**
     * @var string
     *
     * @ORM\Column(name="typeMediaCartonCadeau", type="string", length=250, nullable=false)
     */
    private $typemediacartoncadeau;

    /**
     * @var \Cartoncadeau
     *
     * @ORM\ManyToOne(targetEntity="Cartoncadeau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idCARTONCADEAU", referencedColumnName="idCARTONCADEAU")
     * })
     */
    private $fkIdcartoncadeau;


}
