<?php

namespace WebBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Corte
 */
class Corte
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


    /**
     * @var string
     */
    private $foto;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var bool
     */
    private $top;

    
    private $categoria;

    private $herramientas;

    
    public function __construct() {
        $this->herramientas  = new ArrayCollection();
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
     * @return Corte
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
     * @return Corte
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
     * Set foto
     *
     * @param string $foto
     *
     * @return Corte
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Corte
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set top
     *
     * @param boolean $top
     *
     * @return Corte
     */
    public function setTop($top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get top
     *
     * @return bool
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set categoria
     *
     * @param \WebBundle\Entity\Categoria $categoria
     *
     * @return Corte
     */
    public function setCategoria(\WebBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \WebBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
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


    /**
     * Add herramienta
     *
     * @param \WebBundle\Entity\Herramienta $herramienta
     *
     * @return Corte
     */
    public function addHerramienta(\WebBundle\Entity\Herramienta $herramienta)
    {
        $this->herramientas[] = $herramienta;

        return $this;
    }

    /**
     * Remove herramienta
     *
     * @param \WebBundle\Entity\Herramienta $herramienta
     */
    public function removeHerramienta(\WebBundle\Entity\Herramienta $herramienta)
    {
        $this->herramientas->removeElement($herramienta);
    }

    /**
     * Get herramientas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHerramientas()
    {
        return $this->herramientas;
    }
}
