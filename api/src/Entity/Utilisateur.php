<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="UTILISATEUR")
 * @ORM\Entity
 */
class Utilisateur
{
  /**
   * @var int
   *
   * @ORM\Column(name="idUTILISATEUR", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idutilisateur;

  /**
   * @var string
   *
   * @ORM\Column(name="nomUTILISATEUR", type="string", length=250, nullable=false)
   */
  private $nomutilisateur;

  /**
   * @var string
   *
   * @ORM\Column(name="prenomUTILISATEUR", type="string", length=250, nullable=false)
   */
  private $prenomutilisateur;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="dateNaissanceUTILISATEUR", type="datetime", nullable=false)
   */
  private $datenaissanceutilisateur;

  /**
   * @var string
   *
   * @ORM\Column(name="emailUTILISATEUR", type="string", length=250, nullable=false)
   */
  private $emailutilisateur;

  /**
   * @var string
   *
   * @ORM\Column(name="pwdUTILISATEUR", type="string", length=250, nullable=false)
   */
  private $pwdutilisateur;

  /**
   * @return int
   */
  public function getIdutilisateur(): int
  {
    return $this->idutilisateur;
  }

  /**
   * @param int $idutilisateur
   */
  public function setIdutilisateur(int $idutilisateur): void
  {
    $this->idutilisateur = $idutilisateur;
  }

  /**
   * @return string
   */
  public function getNomutilisateur(): string
  {
    return $this->nomutilisateur;
  }

  /**
   * @param string $nomutilisateur
   */
  public function setNomutilisateur(string $nomutilisateur): void
  {
    $this->nomutilisateur = $nomutilisateur;
  }

  /**
   * @return string
   */
  public function getPrenomutilisateur(): string
  {
    return $this->prenomutilisateur;
  }

  /**
   * @param string $prenomutilisateur
   */
  public function setPrenomutilisateur(string $prenomutilisateur): void
  {
    $this->prenomutilisateur = $prenomutilisateur;
  }

  /**
   * @return \DateTime
   */
  public function getDatenaissanceutilisateur(): \DateTime
  {
    return $this->datenaissanceutilisateur;
  }

  /**
   * @param \DateTime $datenaissanceutilisateur
   */
  public function setDatenaissanceutilisateur(\DateTime $datenaissanceutilisateur): void
  {
    $this->datenaissanceutilisateur = $datenaissanceutilisateur;
  }

  /**
   * @return string
   */
  public function getEmailutilisateur(): string
  {
    return $this->emailutilisateur;
  }

  /**
   * @param string $emailutilisateur
   */
  public function setEmailutilisateur(string $emailutilisateur): void
  {
    $this->emailutilisateur = $emailutilisateur;
  }

  /**
   * @return string
   */
  public function getPwdutilisateur(): string
  {
    return $this->pwdutilisateur;
  }

  /**
   * @param string $pwdutilisateur
   */
  public function setPwdutilisateur(string $pwdutilisateur): void
  {
    $this->pwdutilisateur = $pwdutilisateur;
  }


}
