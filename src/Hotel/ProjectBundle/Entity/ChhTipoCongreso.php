<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhTipoCongreso
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ChhTipoCongreso
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreTipoCongreso;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhIdiomas")
    * @ORM\JoinColumn(name="idiomaRelacion_id", referencedColumnName="id")
    */
    private $idiomaRelacion;
    
    public function __toString(){
        return $this->nombreTipoCongreso.' ';
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
     * Set nombreTipoCongreso
     *
     * @param string $nombreTipoCongreso
     *
     * @return ChhTipoCongreso
     */
    public function setNombreTipoCongreso($nombreTipoCongreso)
    {
        $this->nombreTipoCongreso = $nombreTipoCongreso;

        return $this;
    }

    /**
     * Get nombreTipoCongreso
     *
     * @return string
     */
    public function getNombreTipoCongreso()
    {
        return $this->nombreTipoCongreso;
    }

    /**
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhTipoCongreso
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
}
