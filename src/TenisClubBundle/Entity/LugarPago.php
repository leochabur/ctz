<?php

namespace TenisClubBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LugarPago
 *
 * @ORM\Table(name="lugar_pago")
 * @ORM\Entity(repositoryClass="TenisClubBundle\Repository\LugarPagoRepository")
 */
class LugarPago
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
     * @ORM\Column(name="lugar", type="string", length=255, unique=true)
     */
    private $lugar;


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
     * Set lugar
     *
     * @param string $lugar
     *
     * @return LugarPago
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

    /**
     * Get lugar
     *
     * @return string
     */
    public function getLugar()
    {
        return $this->lugar;
    }
}

