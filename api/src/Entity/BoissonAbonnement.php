<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoissonAbonnement
 *
 * @ORM\Table(name="BOISSON_ABONNEMENT", indexes={@ORM\Index(name="FK_idBOISSONABONNEMENT_idx", columns={"FK_idBOISSON"}), @ORM\Index(name="FK_idABONNEMENTBOISSON_idx", columns={"FK_idABONNEMENT"})})
 * @ORM\Entity
 */
class BoissonAbonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBOISSON_ABONNEMENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboissonAbonnement;

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
     * @var \Boisson
     *
     * @ORM\ManyToOne(targetEntity="Boisson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idBOISSON", referencedColumnName="idBOISSON")
     * })
     */
    private $fkIdboisson;


}
