<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhReserva
 * @ORM\Entity()
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks()
 */
class ChhReserva
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descReserva;

    /**
     * @var string
     */
    private $nombreReserva;

    /**
     * @var string
     */
    private $correoReserva;

    /**
     * @var string
     */
    private $empresaReserva;

    /**
     * @var int
     */
    private $numeroCuartosReserva;

    /**
     * @var string
     */
    private $mensajeReserva;

    /**
     * @var \DateTime
     */
    private $fechaCreacionReserva;

    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhCongreso")
    * @ORM\JoinColumn(name="congresoRelacion_id", referencedColumnName="id")
    */
    private $congresoRelacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhHotel")
    * @ORM\JoinColumn(name="hotelRelacion_id", referencedColumnName="id")
    */
    private $hotelRelacion;


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
     * Set descReserva
     *
     * @ORM\PrePersist
     */
    public function setDescReserva()
    {
        $this->descReserva = "asd";

        #return $this;
    }

    /**
     * Get descReserva
     *
     * @return string
     */
    public function getDescReserva()
    {
        return $this->descReserva;
    }

    /**
     * Set nombreReserva
     *
     * @param string $nombreReserva
     *
     * @return ChhReserva
     */
    public function setNombreReserva($nombreReserva)
    {
        $this->nombreReserva = $nombreReserva;

        return $this;
    }

    /**
     * Get nombreReserva
     *
     * @return string
     */
    public function getNombreReserva()
    {
        return $this->nombreReserva;
    }

    /**
     * Set correoReserva
     *
     * @param string $correoReserva
     *
     * @return ChhReserva
     */
    public function setCorreoReserva($correoReserva)
    {
        $this->correoReserva = $correoReserva;

        return $this;
    }

    /**
     * Get correoReserva
     *
     * @return string
     */
    public function getCorreoReserva()
    {
        return $this->correoReserva;
    }

    /**
     * Set empresaReserva
     *
     * @param string $empresaReserva
     *
     * @return ChhReserva
     */
    public function setEmpresaReserva($empresaReserva)
    {
        $this->empresaReserva = $empresaReserva;

        return $this;
    }

    /**
     * Get empresaReserva
     *
     * @return string
     */
    public function getEmpresaReserva()
    {
        return $this->empresaReserva;
    }

    /**
     * Set numeroCuartosReserva
     *
     * @param integer $numeroCuartosReserva
     *
     * @return ChhReserva
     */
    public function setNumeroCuartosReserva($numeroCuartosReserva)
    {
        $this->numeroCuartosReserva = $numeroCuartosReserva;

        return $this;
    }

    /**
     * Get numeroCuartosReserva
     *
     * @return int
     */
    public function getNumeroCuartosReserva()
    {
        return $this->numeroCuartosReserva;
    }

    /**
     * Set mensajeReserva
     *
     * @param string $mensajeReserva
     *
     * @return ChhReserva
     */
    public function setMensajeReserva($mensajeReserva)
    {
        $this->mensajeReserva = $mensajeReserva;

        return $this;
    }

    /**
     * Get mensajeReserva
     *
     * @return string
     */
    public function getMensajeReserva()
    {
        return $this->mensajeReserva;
    }

    /**
     * Set fechaCreacionReserva
     *
     * @param \DateTime $fechaCreacionReserva
     *
     * @return ChhReserva
     */
    public function setFechaCreacionReserva($fechaCreacionReserva)
    {
        $this->fechaCreacionReserva = $fechaCreacionReserva;

        return $this;
    }

    /**
     * Get fechaCreacionReserva
     *
     * @return \DateTime
     */
    public function getFechaCreacionReserva()
    {
        return $this->fechaCreacionReserva;
    }

    /**
     * Set congresoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhCongreso $congresoRelacion
     *
     * @return ChhReserva
     */
    public function setCongresoRelacion(\Hotel\ProjectBundle\Entity\ChhCongreso $congresoRelacion = null)
    {
        $this->congresoRelacion = $congresoRelacion;

        return $this;
    }

    /**
     * Get congresoRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhCongreso
     */
    public function getCongresoRelacion()
    {
        return $this->congresoRelacion;
    }

    /**
     * Set hotelRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhHotel $hotelRelacion
     *
     * @return ChhReserva
     */
    public function setHotelRelacion(\Hotel\ProjectBundle\Entity\ChhHotel $hotelRelacion = null)
    {
        $this->hotelRelacion = $hotelRelacion;

        return $this;
    }

    /**
     * Get hotelRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhHotel
     */
    public function getHotelRelacion()
    {
        return $this->hotelRelacion;
    }
    
}
