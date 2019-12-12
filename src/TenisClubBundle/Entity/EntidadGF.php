<?php

namespace TenisClubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntidadGF
 *
 * @ORM\Table(name="entidad_g_f")
 * @ORM\Entity(repositoryClass="TenisClubBundle\Repository\EntidadGFRepository")
 */
class EntidadGF
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gf", type="string", length=255)
     */
    private $gf;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gf
     *
     * @param string $gf
     *
     * @return EntidadGF
     */
    public function setGf($gf)
    {
        $this->gf = $gf;

        return $this;
    }

    /**
     * Get gf
     *
     * @return string
     */
    public function getGf()
    {
        return $this->gf;
    }
}

