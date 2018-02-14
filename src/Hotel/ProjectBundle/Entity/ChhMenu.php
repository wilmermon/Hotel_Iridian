<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhMenu
 * * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhMenu
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreMenu;

    /**
     * @var string
     */
    private $linkMenu;

    /**
     * @var int
     */
    private $orden;

    /**
     * @var boolean
     */
    private $footer;

    /**
     * @var boolean
     */
    private $activo;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhHome")
    * @ORM\JoinColumn(name="homeRelacion_id", referencedColumnName="id")
    */
    private $homeRelacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhIdiomas")
    * @ORM\JoinColumn(name="idiomaRelacion_id", referencedColumnName="id")
    */
    private $idiomaRelacion;

    
    public function __toString(){
        return $this->nombreMenu.' ';
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
     * Set nombreMenu
     *
     * @param string $nombreMenu
     *
     * @return ChhMenu
     */
    public function setNombreMenu($nombreMenu)
    {
        $this->nombreMenu = $nombreMenu;

        return $this;
    }

    /**
     * Get nombreMenu
     *
     * @return string
     */
    public function getNombreMenu()
    {
        return $this->nombreMenu;
    }

    /**
     * Set linkMenu
     *
     * @param string $linkMenu
     *
     * @return ChhMenu
     */
    public function setLinkMenu($linkMenu)
    {
        $this->linkMenu = $linkMenu;

        return $this;
    }

    /**
     * Get linkMenu
     *
     * @return string
     */
    public function getLinkMenu()
    {
        return $this->linkMenu;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return ChhMenu
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set footer
     *
     * @param boolean $footer
     *
     * @return ChhMenu
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * Get footer
     *
     * @return boolean
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return ChhMenu
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
    
    /**
     * Set homeRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhHome $homeRelacion
     *
     * @return ChhMenu
     */
    public function setHomeRelacion(\Hotel\ProjectBundle\Entity\ChhHome $homeRelacion = null)
    {
        $this->homeRelacion = $homeRelacion;

        return $this;
    }

    /**
     * Get homeRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhHome
     */
    public function getHomeRelacion()
    {
        return $this->homeRelacion;
    }

    /**
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhMenu
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
