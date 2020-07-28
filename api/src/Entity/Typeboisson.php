<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typeboisson
 *
 * @ORM\Table(name="TYPEBOISSON")
 * @ORM\Entity
 */
class Typeboisson
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTYPEBOISSON", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtypeboisson;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTypeBoisson", type="string", length=250, nullable=false)
     */
    private $nomtypeboisson;


}
