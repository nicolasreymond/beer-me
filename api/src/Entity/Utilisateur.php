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


}
