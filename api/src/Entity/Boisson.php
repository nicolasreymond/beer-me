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

  /**
   * @return int
   */
  public function getIdboisson(): int
  {
    return $this->idboisson;
  }

  /**
   * @param int $idboisson
   */
  public function setIdboisson(int $idboisson): void
  {
    $this->idboisson = $idboisson;
  }

  /**
   * @return string
   */
  public function getNomboisson(): string
  {
    return $this->nomboisson;
  }

  /**
   * @param string $nomboisson
   */
  public function setNomboisson(string $nomboisson): void
  {
    $this->nomboisson = $nomboisson;
  }

  /**
   * @return string
   */
  public function getDescriptionboisson(): string
  {
    return $this->descriptionboisson;
  }

  /**
   * @param string $descriptionboisson
   */
  public function setDescriptionboisson(string $descriptionboisson): void
  {
    $this->descriptionboisson = $descriptionboisson;
  }

  /**
   * @return float
   */
  public function getPourcentagealcoolboisson(): float
  {
    return $this->pourcentagealcoolboisson;
  }

  /**
   * @param float $pourcentagealcoolboisson
   */
  public function setPourcentagealcoolboisson(float $pourcentagealcoolboisson): void
  {
    $this->pourcentagealcoolboisson = $pourcentagealcoolboisson;
  }

  /**
   * @return int
   */
  public function getStockboisson(): int
  {
    return $this->stockboisson;
  }

  /**
   * @param int $stockboisson
   */
  public function setStockboisson(int $stockboisson): void
  {
    $this->stockboisson = $stockboisson;
  }

  /**
   * @return float
   */
  public function getPrixboisson(): float
  {
    return $this->prixboisson;
  }

  /**
   * @param float $prixboisson
   */
  public function setPrixboisson(float $prixboisson): void
  {
    $this->prixboisson = $prixboisson;
  }

  /**
   * @return \Brasserie
   */
  public function getFkIdbrasserie(): \Brasserie
  {
    return $this->fkIdbrasserie;
  }

  /**
   * @param \Brasserie $fkIdbrasserie
   */
  public function setFkIdbrasserie(\Brasserie $fkIdbrasserie): void
  {
    $this->fkIdbrasserie = $fkIdbrasserie;
  }

  /**
   * @return \Typeboisson
   */
  public function getFkIdtypeboisson(): \Typeboisson
  {
    return $this->fkIdtypeboisson;
  }

  /**
   * @param \Typeboisson $fkIdtypeboisson
   */
  public function setFkIdtypeboisson(\Typeboisson $fkIdtypeboisson): void
  {
    $this->fkIdtypeboisson = $fkIdtypeboisson;
  }


}
