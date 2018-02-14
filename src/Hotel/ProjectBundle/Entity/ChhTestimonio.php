<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhTestimonio
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhTestimonio
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgTestimonio;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgTestimonio", size="imageSize")
     * 
     * @var File
     */
    private $imageFile;

    /**
     * @var string
     */
    private $descTestimonio;

    /**
     * @var int
     */
    private $ratingTestimonio;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhHome")
    * @ORM\JoinColumn(name="homeRelacion_id", referencedColumnName="id")
    */
    private $homeRelacion;
    
    
    public function __toString(){
        return $this->nombreBuscaCongreso.' '.$this->nombre2BuscaCongreso.' ';
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgTestimonio
     *
     * @return Product
     */
    public function setImageFile(File $imgTestimonio = null)
    {
        $this->imageFile = $imgTestimonio;
        
          if ($imgTestimonio) {
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
     * Set imgTestimonio
     *
     * @param string $imgTestimonio
     *
     * @return ChhTestimonio
     */
    public function setImgTestimonio($imgTestimonio)
    {
        $this->imgTestimonio = $imgTestimonio;

        return $this;
    }

    /**
     * Get imgTestimonio
     *
     * @return string
     */
    public function getImgTestimonio()
    {
        return $this->imgTestimonio;
    }

    /**
     * Set descTestimonio
     *
     * @param string $descTestimonio
     *
     * @return ChhTestimonio
     */
    public function setDescTestimonio($descTestimonio)
    {
        $this->descTestimonio = $descTestimonio;

        return $this;
    }

    /**
     * Get descTestimonio
     *
     * @return string
     */
    public function getDescTestimonio()
    {
        return $this->descTestimonio;
    }

    /**
     * Set ratingTestimonio
     *
     * @param integer $ratingTestimonio
     *
     * @return ChhTestimonio
     */
    public function setRatingTestimonio($ratingTestimonio)
    {
        $this->ratingTestimonio = $ratingTestimonio;

        return $this;
    }

    /**
     * Get ratingTestimonio
     *
     * @return int
     */
    public function getRatingTestimonio()
    {
        return $this->ratingTestimonio;
    }

    /**
     * Set homeRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhHome $homeRelacion
     *
     * @return ChhTestimonio
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
}
