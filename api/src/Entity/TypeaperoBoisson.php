<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeaperoBoisson
 *
 * @ORM\Table(name="TYPEAPERO_BOISSON", indexes={@ORM\Index(name="FK_idTYPEAPEROBOISSON_idx", columns={"FK_idTYPEAPERO"}), @ORM\Index(name="FK_idBOISSONTYPEAPERO_idx", columns={"FK_idBOISSON"})})
 * @ORM\Entity
 */
class TypeaperoBoisson
{
  /**
   * @var int
   *
   * @ORM\Column(name="idTYPEAPERO_BOISSON", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idtypeaperoBoisson;

  /**
   * @var int
   *
   * @ORM\Column(name="quantiteBoisson", type="integer", nullable=false)
   */
  private $quantiteboisson;

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
   * @var \Typeapero
   *
   * @ORM\ManyToOne(targetEntity="Typeapero")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idTYPEAPERO", referencedColumnName="idTYPEAPERO")
   * })
   */
  private $fkIdtypeapero;

  /**
   * @return int
   */
  public function getIdtypeaperoBoisson(): int
  {
    return $this->idtypeaperoBoisson;
  }

  /**
   * @param int $idtypeaperoBoisson
   */
  public function setIdtypeaperoBoisson(int $idtypeaperoBoisson): void
  {
    $this->idtypeaperoBoisson = $idtypeaperoBoisson;
  }

  /**
   * @return int
   */
  public function getQuantiteboisson(): int
  {
    return $this->quantiteboisson;
  }

  /**
   * @param int $quantiteboisson
   */
  public function setQuantiteboisson(int $quantiteboisson): void
  {
    $this->quantiteboisson = $quantiteboisson;
  }

  /**
   * @return \Boisson
   */
  public function getFkIdboisson(): \Boisson
  {
    return $this->fkIdboisson;
  }

  /**
   * @param \Boisson $fkIdboisson
   */
  public function setFkIdboisson(\Boisson $fkIdboisson): void
  {
    $this->fkIdboisson = $fkIdboisson;
  }

  /**
   * @return \Typeapero
   */
  public function getFkIdtypeapero(): \Typeapero
  {
    return $this->fkIdtypeapero;
  }

  /**
   * @param \Typeapero $fkIdtypeapero
   */
  public function setFkIdtypeapero(\Typeapero $fkIdtypeapero): void
  {
    $this->fkIdtypeapero = $fkIdtypeapero;
  }


}
