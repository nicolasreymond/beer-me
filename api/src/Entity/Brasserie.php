<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brasserie
 *
 * @ORM\Table(name="BRASSERIE")
 * @ORM\Entity
 */
class Brasserie
{
  /**
   * @var int
   *
   * @ORM\Column(name="idBRASSERIE", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idbrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="nomBrasserie", type="string", length=250, nullable=false)
   */
  private $nombrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="descriptionBrasserie", type="string", length=250, nullable=false)
   */
  private $descriptionbrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="rueBrasserie", type="string", length=250, nullable=false)
   */
  private $ruebrasserie;

  /**
   * @var int
   *
   * @ORM\Column(name="numRueBrasserie", type="integer", nullable=false)
   */
  private $numruebrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="villeBrasserie", type="string", length=250, nullable=false)
   */
  private $villebrasserie;

  /**
   * @var int
   *
   * @ORM\Column(name="npaBrasserie", type="integer", nullable=false)
   */
  private $npabrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="paysBrasserie", type="string", length=250, nullable=false)
   */
  private $paysbrasserie;

  /**
   * @var string
   *
   * @ORM\Column(name="autorisationBrasserie", type="string", length=45, nullable=false)
   */
  private $autorisationbrasserie;

  /**
   * @return int
   */
  public function getIdbrasserie(): int
  {
    return $this->idbrasserie;
  }

  /**
   * @param int $idbrasserie
   */
  public function setIdbrasserie(int $idbrasserie): void
  {
    $this->idbrasserie = $idbrasserie;
  }

  /**
   * @return string
   */
  public function getNombrasserie(): string
  {
    return $this->nombrasserie;
  }

  /**
   * @param string $nombrasserie
   */
  public function setNombrasserie(string $nombrasserie): void
  {
    $this->nombrasserie = $nombrasserie;
  }

  /**
   * @return string
   */
  public function getDescriptionbrasserie(): string
  {
    return $this->descriptionbrasserie;
  }

  /**
   * @param string $descriptionbrasserie
   */
  public function setDescriptionbrasserie(string $descriptionbrasserie): void
  {
    $this->descriptionbrasserie = $descriptionbrasserie;
  }

  /**
   * @return string
   */
  public function getRuebrasserie(): string
  {
    return $this->ruebrasserie;
  }

  /**
   * @param string $ruebrasserie
   */
  public function setRuebrasserie(string $ruebrasserie): void
  {
    $this->ruebrasserie = $ruebrasserie;
  }

  /**
   * @return int
   */
  public function getNumruebrasserie(): int
  {
    return $this->numruebrasserie;
  }

  /**
   * @param int $numruebrasserie
   */
  public function setNumruebrasserie(int $numruebrasserie): void
  {
    $this->numruebrasserie = $numruebrasserie;
  }

  /**
   * @return string
   */
  public function getVillebrasserie(): string
  {
    return $this->villebrasserie;
  }

  /**
   * @param string $villebrasserie
   */
  public function setVillebrasserie(string $villebrasserie): void
  {
    $this->villebrasserie = $villebrasserie;
  }

  /**
   * @return int
   */
  public function getNpabrasserie(): int
  {
    return $this->npabrasserie;
  }

  /**
   * @param int $npabrasserie
   */
  public function setNpabrasserie(int $npabrasserie): void
  {
    $this->npabrasserie = $npabrasserie;
  }

  /**
   * @return string
   */
  public function getPaysbrasserie(): string
  {
    return $this->paysbrasserie;
  }

  /**
   * @param string $paysbrasserie
   */
  public function setPaysbrasserie(string $paysbrasserie): void
  {
    $this->paysbrasserie = $paysbrasserie;
  }

  /**
   * @return string
   */
  public function getAutorisationbrasserie(): string
  {
    return $this->autorisationbrasserie;
  }

  /**
   * @param string $autorisationbrasserie
   */
  public function setAutorisationbrasserie(string $autorisationbrasserie): void
  {
    $this->autorisationbrasserie = $autorisationbrasserie;
  }


}
