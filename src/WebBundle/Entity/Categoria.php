<?php

namespace WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * Categoria
 */
class Categoria
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    private $cortes;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Categoria
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    /**
     * Add corte
     *
     * @param \WebBundle\Entity\Corte $corte
     *
     * @return Categoria
     */
    public function addCorte(\WebBundle\Entity\Corte $corte)
    {
        $this->cortes[] = $corte;

        return $this;
    }

    /**
     * Remove corte
     *
     * @param \WebBundle\Entity\Corte $corte
     */
    public function removeCorte(\WebBundle\Entity\Corte $corte)
    {
        $this->cortes->removeElement($corte);
    }

    /**
     * Get cortes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCortes()
    {
        return $this->cortes;
    }

}
