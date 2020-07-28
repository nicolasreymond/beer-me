<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoissonCartoncadeau
 *
 * @ORM\Table(name="BOISSON_CARTONCADEAU", indexes={@ORM\Index(name="FK_BOISSONCARTONCADEAU_idx", columns={"FK_idBOISSON"}), @ORM\Index(name="FK_CARTONCADEAUBOISSON_idx", columns={"FK_idCARTONCADEAU"})})
 * @ORM\Entity
 */
class BoissonCartoncadeau
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBOISSON_CARTONCADEAU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboissonCartoncadeau;

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
     * @var \Cartoncadeau
     *
     * @ORM\ManyToOne(targetEntity="Cartoncadeau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idCARTONCADEAU", referencedColumnName="idCARTONCADEAU")
     * })
     */
    private $fkIdcartoncadeau;


}
