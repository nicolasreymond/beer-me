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

  /**
   * @return int
   */
  public function getIdabonnement(): int
  {
    return $this->idabonnement;
  }

  /**
   * @param int $idabonnement
   */
  public function setIdabonnement(int $idabonnement): void
  {
    $this->idabonnement = $idabonnement;
  }

  /**
   * @return string
   */
  public function getNomabonnement(): string
  {
    return $this->nomabonnement;
  }

  /**
   * @param string $nomabonnement
   */
  public function setNomabonnement(string $nomabonnement): void
  {
    $this->nomabonnement = $nomabonnement;
  }

  /**
   * @return string
   */
  public function getDescriptionabonnement(): string
  {
    return $this->descriptionabonnement;
  }

  /**
   * @param string $descriptionabonnement
   */
  public function setDescriptionabonnement(string $descriptionabonnement): void
  {
    $this->descriptionabonnement = $descriptionabonnement;
  }

  /**
   * @return int
   */
  public function getDureeabonnement(): int
  {
    return $this->dureeabonnement;
  }

  /**
   * @param int $dureeabonnement
   */
  public function setDureeabonnement(int $dureeabonnement): void
  {
    $this->dureeabonnement = $dureeabonnement;
  }

  /**
   * @return int
   */
  public function getNbrboissonabonnement(): int
  {
    return $this->nbrboissonabonnement;
  }

  /**
   * @param int $nbrboissonabonnement
   */
  public function setNbrboissonabonnement(int $nbrboissonabonnement): void
  {
    $this->nbrboissonabonnement = $nbrboissonabonnement;
  }

  /**
   * @return int
   */
  public function getPrixmensuelabonnement(): int
  {
    return $this->prixmensuelabonnement;
  }

  /**
   * @param int $prixmensuelabonnement
   */
  public function setPrixmensuelabonnement(int $prixmensuelabonnement): void
  {
    $this->prixmensuelabonnement = $prixmensuelabonnement;
  }


}
