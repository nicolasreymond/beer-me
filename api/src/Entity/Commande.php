<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="COMMANDE", indexes={@ORM\Index(name="FK_idPANIERCOMMANDE_idx", columns={"FK_idPANIER"}), @ORM\Index(name="FK_idADRESSELIVRAISONCOMMANDE_idx", columns={"FK_idADRESSLIVRAISON"})})
 * @ORM\Entity
 */
class Commande
{
  /**
   * @var int
   *
   * @ORM\Column(name="idCOMMANDE", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idcommande;

  /**
   * @var string
   *
   * @ORM\Column(name="statusCommande", type="string", length=250, nullable=false)
   */
  private $statuscommande;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="dateCommande", type="datetime", nullable=false)
   */
  private $datecommande;

  /**
   * @var \Adresselivraison
   *
   * @ORM\ManyToOne(targetEntity="Adresselivraison")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idADRESSLIVRAISON", referencedColumnName="idADRESSELIVRAISON")
   * })
   */
  private $fkIdadresslivraison;

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
  public function getIdcommande(): int
  {
    return $this->idcommande;
  }

  /**
   * @param int $idcommande
   */
  public function setIdcommande(int $idcommande): void
  {
    $this->idcommande = $idcommande;
  }

  /**
   * @return string
   */
  public function getStatuscommande(): string
  {
    return $this->statuscommande;
  }

  /**
   * @param string $statuscommande
   */
  public function setStatuscommande(string $statuscommande): void
  {
    $this->statuscommande = $statuscommande;
  }

  /**
   * @return \DateTime
   */
  public function getDatecommande(): \DateTime
  {
    return $this->datecommande;
  }

  /**
   * @param \DateTime $datecommande
   */
  public function setDatecommande(\DateTime $datecommande): void
  {
    $this->datecommande = $datecommande;
  }

  /**
   * @return \Adresselivraison
   */
  public function getFkIdadresslivraison(): \Adresselivraison
  {
    return $this->fkIdadresslivraison;
  }

  /**
   * @param \Adresselivraison $fkIdadresslivraison
   */
  public function setFkIdadresslivraison(\Adresselivraison $fkIdadresslivraison): void
  {
    $this->fkIdadresslivraison = $fkIdadresslivraison;
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
