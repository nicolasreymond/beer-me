<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="COMMANDE", indexes={@ORM\Index(name="FK_idPANIERCOMMANDE_idx", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idADRESSELIVRAISONCOMMANDE_idx", columns={"FK_idADRESSLIVRAISON"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCOMMANDE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="statusCommande", type="string", length=250, nullable=false)
     */
    private $statuscommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="datetime", nullable=false)
     */
    private $datecommande;

    /**
     * @var \Adresselivraison
     *
     * @ORM\ManyToOne(targetEntity="Adresselivraison")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idADRESSLIVRAISON", referencedColumnName="idADRESSELIVRAISON")
     * })
     */
    private $fkIdadresslivraison;

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
