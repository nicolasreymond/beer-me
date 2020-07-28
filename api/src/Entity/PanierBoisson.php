<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PanierBoisson
 *
 * @ORM\Table(name="PANIER_BOISSON", indexes={@ORM\Index(name="FK_idPANIERBOISSON_idx", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idBOISSONPANIER_idx", columns={"FK_idBOISSON"})})
 * @ORM\Entity
 */
class PanierBoisson
{
  /**
   * @var int
   *
   * @ORM\Column(name="idPANIER_BOISSON", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idpanierBoisson;

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
  public function getIdpanierBoisson(): int
  {
    return $this->idpanierBoisson;
  }

  /**
   * @param int $idpanierBoisson
   */
  public function setIdpanierBoisson(int $idpanierBoisson): void
  {
    $this->idpanierBoisson = $idpanierBoisson;
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
