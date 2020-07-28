<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cartoncadeau
 *
 * @ORM\Table(name="CARTONCADEAU")
 * @ORM\Entity
 */
class Cartoncadeau
{
  /**
   * @var int
   *
   * @ORM\Column(name="idCARTONCADEAU", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idcartoncadeau;

  /**
   * @var string
   *
   * @ORM\Column(name="textCartonCadeau", type="string", length=255, nullable=false)
   */
  private $textcartoncadeau;

  /**
   * @return int
   */
  public function getIdcartoncadeau(): int
  {
    return $this->idcartoncadeau;
  }

  /**
   * @param int $idcartoncadeau
   */
  public function setIdcartoncadeau(int $idcartoncadeau): void
  {
    $this->idcartoncadeau = $idcartoncadeau;
  }

  /**
   * @return string
   */
  public function getTextcartoncadeau(): string
  {
    return $this->textcartoncadeau;
  }

  /**
   * @param string $textcartoncadeau
   */
  public function setTextcartoncadeau(string $textcartoncadeau): void
  {
    $this->textcartoncadeau = $textcartoncadeau;
  }


}
