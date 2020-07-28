<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresselivraison
 *
 * @ORM\Table(name="ADRESSELIVRAISON")
 * @ORM\Entity
 */
class Adresselivraison
{
  /**
   * @var int
   *
   * @ORM\Column(name="idADRESSELIVRAISON", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idadresselivraison;

  /**
   * @var string
   *
   * @ORM\Column(name="rueLivraison", type="string", length=250, nullable=false)
   */
  private $ruelivraison;

  /**
   * @var int
   *
   * @ORM\Column(name="numRueLivraison", type="integer", nullable=false)
   */
  private $numruelivraison;

  /**
   * @var int
   *
   * @ORM\Column(name="npaLivraison", type="integer", nullable=false)
   */
  private $npalivraison;

  /**
   * @var string
   *
   * @ORM\Column(name="villeLivraison", type="string", length=250, nullable=false)
   */
  private $villelivraison;

  /**
   * @var string
   *
   * @ORM\Column(name="paysLivraison", type="string", length=250, nullable=false)
   */
  private $payslivraison;

  /**
   * @return int
   */
  public function getIdadresselivraison(): int
  {
    return $this->idadresselivraison;
  }

  /**
   * @param int $idadresselivraison
   */
  public function setIdadresselivraison(int $idadresselivraison): void
  {
    $this->idadresselivraison = $idadresselivraison;
  }

  /**
   * @return string
   */
  public function getRuelivraison(): string
  {
    return $this->ruelivraison;
  }

  /**
   * @param string $ruelivraison
   */
  public function setRuelivraison(string $ruelivraison): void
  {
    $this->ruelivraison = $ruelivraison;
  }

  /**
   * @return int
   */
  public function getNumruelivraison(): int
  {
    return $this->numruelivraison;
  }

  /**
   * @param int $numruelivraison
   */
  public function setNumruelivraison(int $numruelivraison): void
  {
    $this->numruelivraison = $numruelivraison;
  }

  /**
   * @return int
   */
  public function getNpalivraison(): int
  {
    return $this->npalivraison;
  }

  /**
   * @param int $npalivraison
   */
  public function setNpalivraison(int $npalivraison): void
  {
    $this->npalivraison = $npalivraison;
  }

  /**
   * @return string
   */
  public function getVillelivraison(): string
  {
    return $this->villelivraison;
  }

  /**
   * @param string $villelivraison
   */
  public function setVillelivraison(string $villelivraison): void
  {
    $this->villelivraison = $villelivraison;
  }

  /**
   * @return string
   */
  public function getPayslivraison(): string
  {
    return $this->payslivraison;
  }

  /**
   * @param string $payslivraison
   */
  public function setPayslivraison(string $payslivraison): void
  {
    $this->payslivraison = $payslivraison;
  }


}
