<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartoncadeauPanier
 *
 * @ORM\Table(name="CARTONCADEAU_PANIER", indexes={@ORM\Index(name="FK_idPANIER_idx", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idCARTONCADEAU_idx", columns={"FK_idCARTONCADEAU"})})
 * @ORM\Entity
 */
class CartoncadeauPanier
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCARTONCADEAU_PANIER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcartoncadeauPanier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CARTONCADEAU_PANIERcol", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $cartoncadeauPaniercol = 'NULL';

    /**
     * @var \Cartoncadeau
     *
     * @ORM\ManyToOne(targetEntity="Cartoncadeau")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idCARTONCADEAU", referencedColumnName="idCARTONCADEAU")
     * })
     */
    private $fkIdcartoncadeau;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idPANIER", referencedColumnName="idPANIER")
     * })
     */
    private $fkIdpanier;


}
