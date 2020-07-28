<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Apero
 *
 * @ORM\Table(name="APERO", indexes={@ORM\Index(name="FK_idTYPEAPEROAPERO_idx", columns={"FK_idTYPEAPERO"})})
 * @ORM\Entity
 */
class Apero
{
  /**
   * @var int
   *
   * @ORM\Column(name="idAPERO", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idapero;

  /**
   * @var int
   *
   * @ORM\Column(name="nbrParticipentApero", type="integer", nullable=false)
   */
  private $nbrparticipentapero;

  /**
   * @var int
   *
   * @ORM\Column(name="nbrBoissonParticipentApero", type="integer", nullable=false)
   */
  private $nbrboissonparticipentapero;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="dateApero", type="datetime", nullable=false)
   */
  private $dateapero;

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
  public function getIdapero(): int
  {
    return $this->idapero;
  }

  /**
   * @param int $idapero
   */
  public function setIdapero(int $idapero): void
  {
    $this->idapero = $idapero;
  }

  /**
   * @return int
   */
  public function getNbrparticipentapero(): int
  {
    return $this->nbrparticipentapero;
  }

  /**
   * @param int $nbrparticipentapero
   */
  public function setNbrparticipentapero(int $nbrparticipentapero): void
  {
    $this->nbrparticipentapero = $nbrparticipentapero;
  }

  /**
   * @return int
   */
  public function getNbrboissonparticipentapero(): int
  {
    return $this->nbrboissonparticipentapero;
  }

  /**
   * @param int $nbrboissonparticipentapero
   */
  public function setNbrboissonparticipentapero(int $nbrboissonparticipentapero): void
  {
    $this->nbrboissonparticipentapero = $nbrboissonparticipentapero;
  }

  /**
   * @return \DateTime
   */
  public function getDateapero(): \DateTime
  {
    return $this->dateapero;
  }

  /**
   * @param \DateTime $dateapero
   */
  public function setDateapero(\DateTime $dateapero): void
  {
    $this->dateapero = $dateapero;
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
