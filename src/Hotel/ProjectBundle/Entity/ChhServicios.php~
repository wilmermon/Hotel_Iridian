<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhServicios
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhServicios
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreServicios;

    /**
     * @var string
     */
    private $nombre2Servicios;

    /**
     * @var string
     */
    private $linkServicios;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgServicios;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgServicios", size="imageSize")
     * 
     * @var File
     */
    private $imageFile;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgServicios
     *
     * @return Product
     */
    public function setImageFile(File $imgServicios = null)
    {
        $this->imageFile = $imgServicios;
        
          if ($imgServicios) {
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
     * Set nombreServicios
     *
     * @param string $nombreServicios
     *
     * @return ChhServicios
     */
    public function setNombreServicios($nombreServicios)
    {
        $this->nombreServicios = $nombreServicios;

        return $this;
    }

    /**
     * Get nombreServicios
     *
     * @return string
     */
    public function getNombreServicios()
    {
        return $this->nombreServicios;
    }

    /**
     * Set nombre2Servicios
     *
     * @param string $nombre2Servicios
     *
     * @return ChhServicios
     */
    public function setNombre2Servicios($nombre2Servicios)
    {
        $this->nombre2Servicios = $nombre2Servicios;

        return $this;
    }

    /**
     * Get nombre2Servicios
     *
     * @return string
     */
    public function getNombre2Servicios()
    {
        return $this->nombre2Servicios;
    }

    /**
     * Set linkServicios
     *
     * @param string $linkServicios
     *
     * @return ChhServicios
     */
    public function setLinkServicios($linkServicios)
    {
        $this->linkServicios = $linkServicios;

        return $this;
    }

    /**
     * Get linkServicios
     *
     * @return string
     */
    public function getLinkServicios()
    {
        return $this->linkServicios;
    }

    /**
     * Set imgServicios
     *
     * @param string $imgServicios
     *
     * @return ChhServicios
     */
    public function setImgServicios($imgServicios)
    {
        $this->imgServicios = $imgServicios;

        return $this;
    }

    /**
     * Get imgServicios
     *
     * @return string
     */
    public function getImgServicios()
    {
        return $this->imgServicios;
    }

    /**
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhServicios
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
