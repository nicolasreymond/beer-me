<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnement
 *
 * @ORM\Table(name="ABONNEMENT")
 * @ORM\Entity
 */
class Abonnement
{
    /**
     * @var int
     *
     * @ORM\Column(name="idABONNEMENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idabonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAbonnement", type="string", length=250, nullable=false)
     */
    private $nomabonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionAbonnement", type="string", length=250, nullable=false)
     */
    private $descriptionabonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="dureeAbonnement", type="integer", nullable=false)
     */
    private $dureeabonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrBoissonAbonnement", type="integer", nullable=false)
     */
    private $nbrboissonabonnement;

    /**
     * @var int
     *
     * @ORM\Column(name="prixMensuelAbonnement", type="integer", nullable=false)
     */
    private $prixmensuelabonnement;


}
