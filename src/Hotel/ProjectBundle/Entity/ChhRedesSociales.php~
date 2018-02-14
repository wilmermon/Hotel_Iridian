<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhRedesSociales
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhRedesSociales
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgRedSocial;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgRedSocial", size="imageSize")
     * 
     * @var File
     */
    private $imageFile;


    /**
     * @var string
     */
    private $nombreRedSocial;

    /**
     * @var string
     */
    private $linkRedSocial;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;


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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgRedSocial
     *
     * @return Product
     */
    public function setImageFile(File $imgRedSocial = null)
    {
        $this->imageFile = $imgRedSocial;
        
          if ($imgRedSocial) {
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
     * Set imgRedSocial
     *
     * @param string $imgRedSocial
     *
     * @return ChhRedesSociales
     */
    public function setImgRedSocial($imgRedSocial)
    {
        $this->imgRedSocial = $imgRedSocial;

        return $this;
    }

    /**
     * Get imgRedSocial
     *
     * @return string
     */
    public function getImgRedSocial()
    {
        return $this->imgRedSocial;
    }

    /**
     * Set nombreRedSocial
     *
     * @param string $nombreRedSocial
     *
     * @return ChhRedesSociales
     */
    public function setNombreRedSocial($nombreRedSocial)
    {
        $this->nombreRedSocial = $nombreRedSocial;

        return $this;
    }

    /**
     * Get nombreRedSocial
     *
     * @return string
     */
    public function getNombreRedSocial()
    {
        return $this->nombreRedSocial;
    }

    /**
     * Set linkRedSocial
     *
     * @param string $linkRedSocial
     *
     * @return ChhRedesSociales
     */
    public function setLinkRedSocial($linkRedSocial)
    {
        $this->linkRedSocial = $linkRedSocial;

        return $this;
    }

    /**
     * Get linkRedSocial
     *
     * @return string
     */
    public function getLinkRedSocial()
    {
        return $this->linkRedSocial;
    }
}
