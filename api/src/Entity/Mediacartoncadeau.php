<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediacartoncadeau
 *
 * @ORM\Table(name="MEDIACARTONCADEAU", indexes={@ORM\Index(name="FK_idCARTONCADEAUMEDIA_idx", columns={"FK_idCARTONCADEAU"})})
 * @ORM\Entity
 */
class Mediacartoncadeau
{
  /**
   * @var int
   *
   * @ORM\Column(name="idMEDIACARTONCADEAU", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idmediacartoncadeau;

  /**
   * @var string
   *
   * @ORM\Column(name="pathMediaCartonCadeau", type="string", length=200, nullable=false)
   */
  private $pathmediacartoncadeau;

  /**
   * @var string
   *
   * @ORM\Column(name="typeMediaCartonCadeau", type="string", length=250, nullable=false)
   */
  private $typemediacartoncadeau;

  /**
   * @var \Cartoncadeau
   *
   * @ORM\ManyToOne(targetEntity="Cartoncadeau")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idCARTONCADEAU", referencedColumnName="idCARTONCADEAU")
   * })
   */
  private $fkIdcartoncadeau;

  /**
   * @return int
   */
  public function getIdmediacartoncadeau(): int
  {
    return $this->idmediacartoncadeau;
  }

  /**
   * @param int $idmediacartoncadeau
   */
  public function setIdmediacartoncadeau(int $idmediacartoncadeau): void
  {
    $this->idmediacartoncadeau = $idmediacartoncadeau;
  }

  /**
   * @return string
   */
  public function getPathmediacartoncadeau(): string
  {
    return $this->pathmediacartoncadeau;
  }

  /**
   * @param string $pathmediacartoncadeau
   */
  public function setPathmediacartoncadeau(string $pathmediacartoncadeau): void
  {
    $this->pathmediacartoncadeau = $pathmediacartoncadeau;
  }

  /**
   * @return string
   */
  public function getTypemediacartoncadeau(): string
  {
    return $this->typemediacartoncadeau;
  }

  /**
   * @param string $typemediacartoncadeau
   */
  public function setTypemediacartoncadeau(string $typemediacartoncadeau): void
  {
    $this->typemediacartoncadeau = $typemediacartoncadeau;
  }

  /**
   * @return \Cartoncadeau
   */
  public function getFkIdcartoncadeau(): \Cartoncadeau
  {
    return $this->fkIdcartoncadeau;
  }

  /**
   * @param \Cartoncadeau $fkIdcartoncadeau
   */
  public function setFkIdcartoncadeau(\Cartoncadeau $fkIdcartoncadeau): void
  {
    $this->fkIdcartoncadeau = $fkIdcartoncadeau;
  }


}
