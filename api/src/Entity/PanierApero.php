<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierApero
 *
 * @ORM\Table(name="PANIER_APERO", indexes={@ORM\Index(name="FK_idPANIERAPERO", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idAPEROPANIER_idx", columns={"FK_idAPERO"})})
 * @ORM\Entity
 */
class PanierApero
{
  /**
   * @var int
   *
   * @ORM\Column(name="idPANIER_APERO", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idpanierApero;

  /**
   * @var \Apero
   *
   * @ORM\ManyToOne(targetEntity="Apero")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idAPERO", referencedColumnName="idAPERO")
   * })
   */
  private $fkIdapero;

  /**
   * @var \Panier
   *
   * @ORM\ManyToOne(targetEntity="Panier")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idPANIER", referencedColumnName="idPANIER")
   * })
   */
  private $fkIdpanier;

  /**
   * @return int
   */
  public function getIdpanierApero(): int
  {
    return $this->idpanierApero;
  }

  /**
   * @param int $idpanierApero
   */
  public function setIdpanierApero(int $idpanierApero): void
  {
    $this->idpanierApero = $idpanierApero;
  }

  /**
   * @return \Apero
   */
  public function getFkIdapero(): \Apero
  {
    return $this->fkIdapero;
  }

  /**
   * @param \Apero $fkIdapero
   */
  public function setFkIdapero(\Apero $fkIdapero): void
  {
    $this->fkIdapero = $fkIdapero;
  }

  /**
   * @return \Panier
   */
  public function getFkIdpanier(): \Panier
  {
    return $this->fkIdpanier;
  }

  /**
   * @param \Panier $fkIdpanier
   */
  public function setFkIdpanier(\Panier $fkIdpanier): void
  {
    $this->fkIdpanier = $fkIdpanier;
  }


}
