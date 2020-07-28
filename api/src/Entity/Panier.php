<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="PANIER", indexes={@ORM\Index(name="FK_idUTILISATEUR_idx", columns={"FK_idUTILISATEUR"})})
 * @ORM\Entity
 */
class Panier
{
  /**
   * @var int
   *
   * @ORM\Column(name="idPANIER", type="integer", nullable=false)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $idpanier;

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
  public function getIdpanier(): int
  {
    return $this->idpanier;
  }

  /**
   * @param int $idpanier
   */
  public function setIdpanier(int $idpanier): void
  {
    $this->idpanier = $idpanier;
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
