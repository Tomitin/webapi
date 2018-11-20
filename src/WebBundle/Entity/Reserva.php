<?php

namespace WebBundle\Entity;

/**
 * Reserva
 */
class Reserva
{
    
    /**
     * @var int
     */
    private $id;


    /**
     * @var \DateTime
     */
    private $horario;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var int
     */
    private $comensales;

    /**
     * @var string
     */
    private $observaciones;

    private $usuario;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Reserva
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set horario
     *
     * @param \DateTime $horario
     *
     * @return Reserva
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \DateTime
     */
    public function getHorario()
    {
        
        return $this->horario ;
    }

    /**
     * Set comensales
     *
     * @param integer $comensales
     *
     * @return Reserva
     */
    public function setComensales($comensales)
    {
        $this->comensales = $comensales;

        return $this;
    }

    /**
     * Get comensales
     *
     * @return int
     */
    public function getComensales()
    {
        return $this->comensales;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Reserva
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set usuario
     *
     * @param \WebBundle\Entity\Usuario $usuario
     *
     * @return Reserva
     */
    public function setUsuario(\WebBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \WebBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
