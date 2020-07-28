<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierAbonnement
 *
 * @ORM\Table(name="PANIER_ABONNEMENT", indexes={@ORM\Index(name="FK_idPANIERABONNEMENT_idx", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idABONNEMENTPANIER_idx", columns={"FK_idABONNEMENT"})})
 * @ORM\Entity
 */
class PanierAbonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPANIER_ABONNEMENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpanierAbonnement;

    /**
     * @var \Abonnement
     *
     * @ORM\ManyToOne(targetEntity="Abonnement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idABONNEMENT", referencedColumnName="idABONNEMENT")
     * })
     */
    private $fkIdabonnement;

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
