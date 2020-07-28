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

  /**
   * @return int
   */
  public function getIdpanierAbonnement(): int
  {
    return $this->idpanierAbonnement;
  }

  /**
   * @param int $idpanierAbonnement
   */
  public function setIdpanierAbonnement(int $idpanierAbonnement): void
  {
    $this->idpanierAbonnement = $idpanierAbonnement;
  }

  /**
   * @return \Abonnement
   */
  public function getFkIdabonnement(): \Abonnement
  {
    return $this->fkIdabonnement;
  }

  /**
   * @param \Abonnement $fkIdabonnement
   */
  public function setFkIdabonnement(\Abonnement $fkIdabonnement): void
  {
    $this->fkIdabonnement = $fkIdabonnement;
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
