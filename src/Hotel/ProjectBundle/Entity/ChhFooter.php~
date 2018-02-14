<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhFooter
 */
class ChhFooter
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreFooter;

    /**
     * @var string
     */
    private $contactoFooter;

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
     * Set nombreFooter
     *
     * @param string $nombreFooter
     *
     * @return ChhFooter
     */
    public function setNombreFooter($nombreFooter)
    {
        $this->nombreFooter = $nombreFooter;

        return $this;
    }

    /**
     * Get nombreFooter
     *
     * @return string
     */
    public function getNombreFooter()
    {
        return $this->nombreFooter;
    }

    /**
     * Set contactoFooter
     *
     * @param string $contactoFooter
     *
     * @return ChhFooter
     */
    public function setContactoFooter($contactoFooter)
    {
        $this->contactoFooter = $contactoFooter;

        return $this;
    }

    /**
     * Get contactoFooter
     *
     * @return string
     */
    public function getContactoFooter()
    {
        return $this->contactoFooter;
    }

    /**
     * Set homeRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhHome $homeRelacion
     *
     * @return ChhFooter
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
     * @return ChhFooter
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
