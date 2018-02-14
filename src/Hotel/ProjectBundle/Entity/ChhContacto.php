<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ChhContacto
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 */
class ChhContacto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $textoContacto;

    /**
     * @var string
     */
    private $nombreContacto;

    /**
     * @var string
     */
    private $apellidoContacto;

    /**
     * @var string
     */
    private $correoContacto;

    /**
     * @var string
     */
    private $asuntoContacto;

    /**
     * @var string
     */
    private $mensajeContacto;

    /**
     * @var \DateTime
     */
    private $fechaContacto;


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
     * Set textoContacto
     *
     * @param string $textoContacto
     *
     * @return ChhContacto
     */
    public function setTextoContacto($textoContacto)
    {
        $this->textoContacto = $textoContacto;

        return $this;
    }

    /**
     * Get textoContacto
     *
     * @return string
     */
    public function getTextoContacto()
    {
        return $this->textoContacto;
    }

    /**
     * Set nombreContacto
     *
     * @param string $nombreContacto
     *
     * @return ChhContacto
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set apellidoContacto
     *
     * @param string $apellidoContacto
     *
     * @return ChhContacto
     */
    public function setApellidoContacto($apellidoContacto)
    {
        $this->apellidoContacto = $apellidoContacto;

        return $this;
    }

    /**
     * Get apellidoContacto
     *
     * @return string
     */
    public function getApellidoContacto()
    {
        return $this->apellidoContacto;
    }

    /**
     * Set correoContacto
     *
     * @param string $correoContacto
     *
     * @return ChhContacto
     */
    public function setCorreoContacto($correoContacto)
    {
        $this->correoContacto = $correoContacto;

        return $this;
    }

    /**
     * Get correoContacto
     *
     * @return string
     */
    public function getCorreoContacto()
    {
        return $this->correoContacto;
    }

    /**
     * Set asuntoContacto
     *
     * @param string $asuntoContacto
     *
     * @return ChhContacto
     */
    public function setAsuntoContacto($asuntoContacto)
    {
        $this->asuntoContacto = $asuntoContacto;

        return $this;
    }

    /**
     * Get asuntoContacto
     *
     * @return string
     */
    public function getAsuntoContacto()
    {
        return $this->asuntoContacto;
    }

    /**
     * Set mensajeContacto
     *
     * @param string $mensajeContacto
     *
     * @return ChhContacto
     */
    public function setMensajeContacto($mensajeContacto)
    {
        $this->mensajeContacto = $mensajeContacto;

        return $this;
    }

    /**
     * Get mensajeContacto
     *
     * @return string
     */
    public function getMensajeContacto()
    {
        return $this->mensajeContacto;
    }

    /**
     * Set fechaContacto
     *
     * //@param \DateTime $fechaContacto
     *
     * //@return ChhContacto
     */
    //public function setFechaContacto($fechaContacto)
    //{
    //    $this->fechaContacto = $fechaContacto;

    //    return $this;
    //}

    /**
     * Get fechaContacto
     *
     * @return \DateTime
     */
    public function getFechaContacto()
    {
        return $this->fechaContacto;
    }
    
    /**
     * Set active
     *
     * @ORM\PrePersist
     * @param \DateTime $fechaContacto
     * @return ChhContacto
     */
    public function setFechaContacto()
    {
        $this->fechaContacto = \DateTime() ;
    
        return $this;
    }
}
