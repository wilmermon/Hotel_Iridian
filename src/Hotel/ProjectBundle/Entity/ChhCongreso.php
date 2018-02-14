<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhCongreso
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhCongreso
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreCongreso;

    /**
     * @var string
     */
    private $ubicacionCongreso;

    /**
     * @var string
     */
    private $descripcionCongreso;

    /**
     * @var \DateTime
     */
    private $fechaCongreso;

    /**
     * @var string
     */
    private $lugarEncuentroCongreso;

    /**
     * @var int
     */
    private $idTipoCongreso;

    /**
     * @var int
     */
    private $idPaisCongreso;
    
    /**
     * @var boolean
     */
    private $destacado;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhPaisCongreso")
    * @ORM\JoinColumn(name="paiscongresoRelacion_id", referencedColumnName="id")
    */
    private $paiscongresoRelacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhTipoCongreso")
    * @ORM\JoinColumn(name="tipocongresoRelacion_id", referencedColumnName="id")
    */
    private $tipocongresoRelacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhIdiomas")
    * @ORM\JoinColumn(name="idiomaRelacion_id", referencedColumnName="id")
    */
    private $idiomaRelacion;
    
    /**
     * @var string
     */
    private $mapaCongreso;
    
    /**
     * @var string
     */
    private $mapAeropuerto;
    
    
    public function __toString(){
        return $this->nombreCongreso.' ';
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
     * Set nombreCongreso
     *
     * @param string $nombreCongreso
     *
     * @return ChhCongreso
     */
    public function setNombreCongreso($nombreCongreso)
    {
        $this->nombreCongreso = $nombreCongreso;

        return $this;
    }

    /**
     * Get nombreCongreso
     *
     * @return string
     */
    public function getNombreCongreso()
    {
        return $this->nombreCongreso;
    }

    /**
     * Set ubicacionCongreso
     *
     * @param string $ubicacionCongreso
     *
     * @return ChhCongreso
     */
    public function setUbicacionCongreso($ubicacionCongreso)
    {
        $this->ubicacionCongreso = $ubicacionCongreso;

        return $this;
    }

    /**
     * Get ubicacionCongreso
     *
     * @return string
     */
    public function getUbicacionCongreso()
    {
        return $this->ubicacionCongreso;
    }

    /**
     * Set descripcionCongreso
     *
     * @param string $descripcionCongreso
     *
     * @return ChhCongreso
     */
    public function setDescripcionCongreso($descripcionCongreso)
    {
        $this->descripcionCongreso = $descripcionCongreso;

        return $this;
    }

    /**
     * Get descripcionCongreso
     *
     * @return string
     */
    public function getDescripcionCongreso()
    {
        return $this->descripcionCongreso;
    }

    /**
     * Set fechaCongreso
     *
     * @param \DateTime $fechaCongreso
     *
     * @return ChhCongreso
     */
    public function setFechaCongreso($fechaCongreso)
    {
        $this->fechaCongreso = $fechaCongreso;

        return $this;
    }

    /**
     * Get fechaCongreso
     *
     * @return \DateTime
     */
    public function getFechaCongreso()
    {
        return $this->fechaCongreso;
    }

    /**
     * Set lugarEncuentroCongreso
     *
     * @param string $lugarEncuentroCongreso
     *
     * @return ChhCongreso
     */
    public function setLugarEncuentroCongreso($lugarEncuentroCongreso)
    {
        $this->lugarEncuentroCongreso = $lugarEncuentroCongreso;

        return $this;
    }

    /**
     * Get lugarEncuentroCongreso
     *
     * @return string
     */
    public function getLugarEncuentroCongreso()
    {
        return $this->lugarEncuentroCongreso;
    }

    /**
     * Set Destacado
     *
     * @param boolean $Destacado
     *
     * @return ChhCongreso
     */
    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;

        return $this;
    }

    /**
     * Get destacado
     *
     * @return boolean
     */
    public function getDestacado()
    {
        return $this->destacado;
    }
    

    /**
     * Set paiscongresoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhPaisCongreso $paiscongresoRelacion
     *
     * @return ChhCongreso
     */
    public function setPaiscongresoRelacion(\Hotel\ProjectBundle\Entity\ChhPaisCongreso $paiscongresoRelacion = null)
    {
        $this->paiscongresoRelacion = $paiscongresoRelacion;

        return $this;
    }

    /**
     * Get paiscongresoRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhPaisCongreso
     */
    public function getPaiscongresoRelacion()
    {
        return $this->paiscongresoRelacion;
    }

    /**
     * Set tipocongresoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhTipoCongreso $tipocongresoRelacion
     *
     * @return ChhCongreso
     */
    public function setTipocongresoRelacion(\Hotel\ProjectBundle\Entity\ChhTipoCongreso $tipocongresoRelacion = null)
    {
        $this->tipocongresoRelacion = $tipocongresoRelacion;

        return $this;
    }

    /**
     * Get tipocongresoRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhTipoCongreso
     */
    public function getTipocongresoRelacion()
    {
        return $this->tipocongresoRelacion;
    }

    /**
     * Set mapaCongreso
     *
     * @param string $mapaCongreso
     *
     * @return ChhCongreso
     */
    public function setMapaCongreso($mapaCongreso)
    {
        $this->mapaCongreso = $mapaCongreso;

        return $this;
    }

    /**
     * Get mapaCongreso
     *
     * @return string
     */
    public function getMapaCongreso()
    {
        return $this->mapaCongreso;
    }

    /**
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhCongreso
     */
    public function setIdiomaRelacion(\Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion = null)
    {
        $this->idiomaRelacion = $idiomaRelacion;

        return $this;
    }

    /**
     * Get idiomaRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhIdiomas
     */
    public function getIdiomaRelacion()
    {
        return $this->idiomaRelacion;
    }

    /**
     * Set mapAeropuerto
     *
     * @param string $mapAeropuerto
     *
     * @return ChhCongreso
     */
    public function setMapAeropuerto($mapAeropuerto)
    {
        $this->mapAeropuerto = $mapAeropuerto;

        return $this;
    }

    /**
     * Get mapAeropuerto
     *
     * @return string
     */
    public function getMapAeropuerto()
    {
        return $this->mapAeropuerto;
    }
}
