<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhIdiomas
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ChhIdiomas
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreIdiomas;

    /**
     * @var string
     */
    private $prefijoIdiomas;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgIdiomas;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgIdiomas", size="imageSize")
     * 
     * @var File
     */
    private $imageFile1;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    
    
    public function __toString(){
        return $this->nombreIdiomas.' ';
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgIdiomas
     *
     * @return Product
     */
    public function setImageFile1(File $imgIdiomas = null)
    {
        $this->imageFile1 = $imgIdiomas;
        
        if ($imgIdiomas) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

    }
    
    /**
     * @return File|null
     */
    public function getImageFile1()
    {
        return $this->imageFile1;
    }

    /**
     * Set nombreIdiomas
     *
     * @param string $nombreIdiomas
     *
     * @return ChhIdiomas
     */
    public function setNombreIdiomas($nombreIdiomas)
    {
        $this->nombreIdiomas = $nombreIdiomas;

        return $this;
    }

    /**
     * Get nombreIdiomas
     *
     * @return string
     */
    public function getNombreIdiomas()
    {
        return $this->nombreIdiomas;
    }

    /**
     * Set prefijoIdiomas
     *
     * @param string $prefijoIdiomas
     *
     * @return ChhIdiomas
     */
    public function setPrefijoIdiomas($prefijoIdiomas)
    {
        $this->prefijoIdiomas = $prefijoIdiomas;

        return $this;
    }

    /**
     * Get prefijoIdiomas
     *
     * @return string
     */
    public function getPrefijoIdiomas()
    {
        return $this->prefijoIdiomas;
    }

    /**
     * Set imgIdiomas
     *
     * @param string $imgIdiomas
     *
     * @return ChhIdiomas
     */
    public function setImgIdiomas($imgIdiomas)
    {
        $this->imgIdiomas = $imgIdiomas;

        return $this;
    }

    /**
     * Get imgIdiomas
     *
     * @return string
     */
    public function getImgIdiomas()
    {
        return $this->imgIdiomas;
    }
}
