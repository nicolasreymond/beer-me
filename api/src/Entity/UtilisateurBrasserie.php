<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilisateurBrasserie
 *
 * @ORM\Table(name="UTILISATEUR_BRASSERIE", indexes={@ORM\Index(name="FK_idUTILISATEURBRASSERIE_idx", columns={"FK_idUTILISATEUR"}), @ORM\Index(name="FK_idBRASSERIEUILISATEUR_idx", columns={"FK_idBRASSERIE"})})
 * @ORM\Entity
 */
class UtilisateurBrasserie
{
  /**
   * @var int
   *
   * @ORM\Column(name="idUTILISATEUR_BRASSERIE", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idutilisateurBrasserie;

  /**
   * @var \DateTime
   *
   * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
   */
  private $datecreation;

  /**
   * @var \Brasserie
   *
   * @ORM\ManyToOne(targetEntity="Brasserie")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idBRASSERIE", referencedColumnName="idBRASSERIE")
   * })
   */
  private $fkIdbrasserie;

  /**
   * @var \Utilisateur
   *
   * @ORM\ManyToOne(targetEntity="Utilisateur")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="FK_idUTILISATEUR", referencedColumnName="idUTILISATEUR")
   * })
   */
  private $fkIdutilisateur;

  /**
   * @return int
   */
  public function getIdutilisateurBrasserie(): int
  {
    return $this->idutilisateurBrasserie;
  }

  /**
   * @param int $idutilisateurBrasserie
   */
  public function setIdutilisateurBrasserie(int $idutilisateurBrasserie): void
  {
    $this->idutilisateurBrasserie = $idutilisateurBrasserie;
  }

  /**
   * @return \DateTime
   */
  public function getDatecreation(): \DateTime
  {
    return $this->datecreation;
  }

  /**
   * @param \DateTime $datecreation
   */
  public function setDatecreation(\DateTime $datecreation): void
  {
    $this->datecreation = $datecreation;
  }

  /**
   * @return \Brasserie
   */
  public function getFkIdbrasserie(): \Brasserie
  {
    return $this->fkIdbrasserie;
  }

  /**
   * @param \Brasserie $fkIdbrasserie
   */
  public function setFkIdbrasserie(\Brasserie $fkIdbrasserie): void
  {
    $this->fkIdbrasserie = $fkIdbrasserie;
  }

  /**
   * @return \Utilisateur
   */
  public function getFkIdutilisateur(): \Utilisateur
  {
    return $this->fkIdutilisateur;
  }

  /**
   * @param \Utilisateur $fkIdutilisateur
   */
  public function setFkIdutilisateur(\Utilisateur $fkIdutilisateur): void
  {
    $this->fkIdutilisateur = $fkIdutilisateur;
  }


}
