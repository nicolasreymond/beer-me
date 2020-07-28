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


}
