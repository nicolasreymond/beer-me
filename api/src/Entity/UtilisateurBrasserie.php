<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurBrasserie
 *
 * @ORM\Table(name="UTILISATEUR_BRASSERIE", indexes={@ORM\Index(name="FK_idUTILISATEURBRASSERIE_idx", columns={"FK_idUTILISATEUR"}), @ORM\Index(name="FK_idBRASSERIEUILISATEUR_idx", columns={"FK_idBRASSERIE"})})
 * @ORM\Entity
 */
class UtilisateurBrasserie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idUTILISATEUR_BRASSERIE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateurBrasserie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
    private $datecreation;

    /**
     * @var \Brasserie
     *
     * @ORM\ManyToOne(targetEntity="Brasserie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idBRASSERIE", referencedColumnName="idBRASSERIE")
     * })
     */
    private $fkIdbrasserie;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idUTILISATEUR", referencedColumnName="idUTILISATEUR")
     * })
     */
    private $fkIdutilisateur;


}
