<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhHome
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhHome
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgLogo;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgLogo", size="imageSize")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     */
    private $nombreTituloTestimonio;

    /**
     * @var string
     */
    private $nombre2TituloTestimonio;

    /**
     * @var string
     */
    private $nombreBuscaCongreso;

    /**
     * @var string
     */
    private $nombre2BuscaCongreso;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $activo = true;
    
    /**
     * @var \datetime
     */
    private $fechaImg;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhCongreso")
    * @ORM\JoinColumn(name="congresoRelacion_id", referencedColumnName="id")
    */
    private $congresoRelacion;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhIdiomas")
    * @ORM\JoinColumn(name="idiomaRelacion_id", referencedColumnName="id")
    */
    private $idiomaRelacion;

    public function __toString(){
        return $this->nombreBuscaCongreso.' '.$this->nombre2BuscaCongreso.' ';
    }

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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgLogo
     *
     * @return Product
     */
    public function setImageFile(File $imgLogo = null)
    {
        $this->imageFile = $imgLogo;
        
          if ($imgLogo) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

    }
    
    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set imgLogo
     *
     * @param string $imgLogo
     *
     * @return ChhHome
     */
    public function setImgLogo($imgLogo)
    {
        $this->imgLogo = $imgLogo;

        return $this;
    }

    /**
     * Get imgLogo
     *
     * @return string
     */
    public function getImgLogo()
    {
        return $this->imgLogo;
    }

    /**
     * Set nombreTituloTestimonio
     *
     * @param string $nombreTituloTestimonio
     *
     * @return ChhHome
     */
    public function setNombreTituloTestimonio($nombreTituloTestimonio)
    {
        $this->nombreTituloTestimonio = $nombreTituloTestimonio;

        return $this;
    }

    /**
     * Get nombreTituloTestimonio
     *
     * @return string
     */
    public function getNombreTituloTestimonio()
    {
        return $this->nombreTituloTestimonio;
    }

    /**
     * Set nombre2TituloTestimonio
     *
     * @param string $nombre2TituloTestimonio
     *
     * @return ChhHome
     */
    public function setNombre2TituloTestimonio($nombre2TituloTestimonio)
    {
        $this->nombre2TituloTestimonio = $nombre2TituloTestimonio;

        return $this;
    }

    /**
     * Get nombre2TituloTestimonio
     *
     * @return string
     */
    public function getNombre2TituloTestimonio()
    {
        return $this->nombre2TituloTestimonio;
    }

    /**
     * Set nombreBuscaCongreso
     *
     * @param string $nombreBuscaCongreso
     *
     * @return ChhHome
     */
    public function setNombreBuscaCongreso($nombreBuscaCongreso)
    {
        $this->nombreBuscaCongreso = $nombreBuscaCongreso;

        return $this;
    }

    /**
     * Get nombreBuscaCongreso
     *
     * @return string
     */
    public function getNombreBuscaCongreso()
    {
        return $this->nombreBuscaCongreso;
    }

    /**
     * Set nombre2BuscaCongreso
     *
     * @param string $nombre2BuscaCongreso
     *
     * @return ChhHome
     */
    public function setNombre2BuscaCongreso($nombre2BuscaCongreso)
    {
        $this->nombre2BuscaCongreso = $nombre2BuscaCongreso;

        return $this;
    }

    /**
     * Get nombre2BuscaCongreso
     *
     * @return string
     */
    public function getNombre2BuscaCongreso()
    {
        return $this->nombre2BuscaCongreso;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return ChhHome
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
     * Set congresoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhCongreso $congresoRelacion
     *
     * @return ChhHome
     */
    public function setCongresoRelacion(\Hotel\ProjectBundle\Entity\chhCongreso $congresoRelacion = null)
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
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhHome
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
