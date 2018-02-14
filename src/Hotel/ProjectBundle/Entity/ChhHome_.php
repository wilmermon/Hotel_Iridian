<?php

namespace Hotel\ProjectBundle\Entity;

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
     * @var int
     */
    private $idCongreso;
    
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
    * @ORM\ManyToOne(targetEntity="Chh_Congreso")
    * @ORM\JoinColumn(name="chhcongreso_id", referencedColumnName="id")
    */
    private $chhCongreso;

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
     * Set idCongreso
     *
     * @param integer $idCongreso
     *
     * @return ChhHome
     */
    public function setIdCongreso($idCongreso)
    {
        $this->idCongreso = $idCongreso;

        return $this;
    }

    /**
     * Get idCongreso
     *
     * @return int
     */
    public function getIdCongreso()
    {
        return $this->idCongreso;
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

}
