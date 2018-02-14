<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhHotel
 * @ORM\Entity
 * @Vich\Uploadable

 */
class ChhHotel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreHotel;

    /**
     * @var string
     */
    private $descHotel;

    /**
     * @var int
     */
    private $numeroCamasLibres;

    /**
     * @var int
     */
    private $numeroCamasTotales;
    
    /**
     * @var String
     */
    private $mapa;

    /**
     * @var int
     */
    private $calificacion;
    
    /**
     * @ORM\Column(type="date")
     * @var \Date
     */
    private $desde;
    
    /**
     * @ORM\Column(type="date")
     * @var \Date
     */
    private $hasta;
    
    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $activo = true;
    
    
    public function __toString(){
        return $this->nombreHotel.' ';
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
     * Set nombreHotel
     *
     * @param string $nombreHotel
     *
     * @return ChhHotel
     */
    public function setNombreHotel($nombreHotel)
    {
        $this->nombreHotel = $nombreHotel;

        return $this;
    }

    /**
     * Get nombreHotel
     *
     * @return string
     */
    public function getNombreHotel()
    {
        return $this->nombreHotel;
    }

    /**
     * Set descHotel
     *
     * @param string $descHotel
     *
     * @return ChhHotel
     */
    public function setDescHotel($descHotel)
    {
        $this->descHotel = $descHotel;

        return $this;
    }

    /**
     * Get descHotel
     *
     * @return string
     */
    public function getDescHotel()
    {
        return $this->descHotel;
    }

    /**
     * Set numeroCamasLibres
     *
     * @param integer $numeroCamasLibres
     *
     * @return ChhHotel
     */
    public function setNumeroCamasLibres($numeroCamasLibres)
    {
        $this->numeroCamasLibres = $numeroCamasLibres;

        return $this;
    }

    /**
     * Get numeroCamasLibres
     *
     * @return integer
     */
    public function getNumeroCamasLibres()
    {
        return $this->numeroCamasLibres;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     *
     * @return ChhHome
     */
    public function setactivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get idCongreso
     *
     * @return int
     */
    public function getactivo()
    {
        return $this->activo;
    }
    
    /**
     * Set numeroCamasTotales
     *
     * @param integer $numeroCamasTotales
     *
     * @return ChhHotel
     */
    public function setNumeroCamasTotales($numeroCamasTotales)
    {
        $this->numeroCamasTotales = $numeroCamasTotales;

        return $this;
    }

    /**
     * Get numeroCamasTotales
     *
     * @return integer
     */
    public function getNumeroCamasTotales()
    {
        return $this->numeroCamasTotales;
    }
    
    /**
     * Set mapa
     *
     * @param string $mapa
     *
     * @return ChhHotel
     */
    public function setMapa($mapa)
    {
        $this->mapa = $mapa;

        return $this;
    }

    /**
     * Get mapa
     *
     * @return string
     */
    public function getMapa()
    {
        return $this->mapa;
    }
    
    /**
     * Set calificacion
     *
     * @param integer $calificacion
     *
     * @return ChhHotel
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return integer
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }
    
    /**
     * Set desde
     *
     * @param \DateTime $desde
     *
     * @return ChhHotel
     */
    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    /**
     * Get desde
     *
     * @return \DateTime
     */
    public function getDesde()
    {
        return $this->desde;
    }
    
    /**
     * Set hasta
     *
     * @param \DateTime $hasta
     *
     * @return ChhHotel
     */
    public function sethasta($hasta)
    {
        $this->hasta = $hasta;

        return $this;
    }

    /**
     * Get hasta
     *
     * @return \DateTime
     */
    public function gethasta()
    {
        return $this->hasta;
    }

}
