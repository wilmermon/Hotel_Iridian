<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhSeoEspecifico
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ChhSeoEspecifico
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $valor1;
    
    /**
     * @var string
     */
    private $valor2;

    /**
     * @var string
     */
    private $tipoMeta;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhSeoGeneral")
    * @ORM\JoinColumn(name="seoRelacion_id", referencedColumnName="id")
    */
    private $seoRelacion_id;

    
    public function __toString(){
        return $this->nombreIdiomas.' ';
    }    
        
    
    /**
     * @var \Hotel\ProjectBundle\Entity\ChhSeoGeneral
     */
    private $seoRelacion;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valor1
     *
     * @param string $valor1
     *
     * @return ChhSeoEspecifico
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return string
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set valor2
     *
     * @param string $valor2
     *
     * @return ChhSeoEspecifico
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return string
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set tipoMeta
     *
     * @param string $tipoMeta
     *
     * @return ChhSeoEspecifico
     */
    public function setTipoMeta($tipoMeta)
    {
        $this->tipoMeta = $tipoMeta;

        return $this;
    }

    /**
     * Get tipoMeta
     *
     * @return string
     */
    public function getTipoMeta()
    {
        return $this->tipoMeta;
    }

    /**
     * Set seoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhSeoGeneral $seoRelacion
     *
     * @return ChhSeoEspecifico
     */
    public function setSeoRelacion(\Hotel\ProjectBundle\Entity\ChhSeoGeneral $seoRelacion = null)
    {
        $this->seoRelacion = $seoRelacion;

        return $this;
    }

    /**
     * Get seoRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhSeoGeneral
     */
    public function getSeoRelacion()
    {
        return $this->seoRelacion;
    }
}
