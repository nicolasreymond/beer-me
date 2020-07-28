<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeapero
 *
 * @ORM\Table(name="TYPEAPERO")
 * @ORM\Entity
 */
class Typeapero
{
  /**
   * @var int
   *
   * @ORM\Column(name="idTYPEAPERO", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idtypeapero;

  /**
   * @var string
   *
   * @ORM\Column(name="nomTypeApero", type="string", length=45, nullable=false)
   */
  private $nomtypeapero;

  /**
   * @return int
   */
  public function getIdtypeapero(): int
  {
    return $this->idtypeapero;
  }

  /**
   * @param int $idtypeapero
   */
  public function setIdtypeapero(int $idtypeapero): void
  {
    $this->idtypeapero = $idtypeapero;
  }

  /**
   * @return string
   */
  public function getNomtypeapero(): string
  {
    return $this->nomtypeapero;
  }

  /**
   * @param string $nomtypeapero
   */
  public function setNomtypeapero(string $nomtypeapero): void
  {
    $this->nomtypeapero = $nomtypeapero;
  }


}
