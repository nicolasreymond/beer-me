<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boisson
 *
 * @ORM\Table(name="BOISSON", indexes={@ORM\Index(name="FK_idBRASSERIEBOISSON_idx", columns={"FK_idBRASSERIE"}), @ORM\Index(name="FK_idTYPEBOISSON_idx", columns={"FK_idTYPEBOISSON"})})
 * @ORM\Entity
 */
class Boisson
{
    /**
     * @var int
     *
     * @ORM\Column(name="idBOISSON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="nomBoisson", type="string", length=250, nullable=false)
     */
    private $nomboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionBoisson", type="string", length=250, nullable=false)
     */
    private $descriptionboisson;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentageAlcoolBoisson", type="float", precision=10, scale=0, nullable=false)
     */
    private $pourcentagealcoolboisson;

    /**
     * @var int
     *
     * @ORM\Column(name="stockBoisson", type="integer", nullable=false)
     */
    private $stockboisson;

    /**
     * @var float
     *
     * @ORM\Column(name="prixBoisson", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixboisson;

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
     * @var \Typeboisson
     *
     * @ORM\ManyToOne(targetEntity="Typeboisson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="FK_idTYPEBOISSON", referencedColumnName="idTYPEBOISSON")
     * })
     */
    private $fkIdtypeboisson;


}
