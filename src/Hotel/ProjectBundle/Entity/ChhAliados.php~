<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhAliados
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ChhAliados
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreAliados;

    /**
     * @var string
     */
    private $linkAliados;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgAliados;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgAliados", size="imageSize")
     * 
     * @var File
     */
    private $imageFile1;
    
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgAliados
     *
     * @return Product
     */
    public function setImageFile1(File $imgAliados = null)
    {
        $this->imageFile1 = $imgAliados;
        
        if ($imgAliados) {
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
     * Set nombreAliados
     *
     * @param string $nombreAliados
     *
     * @return ChhAliados
     */
    public function setNombreAliados($nombreAliados)
    {
        $this->nombreAliados = $nombreAliados;

        return $this;
    }

    /**
     * Get nombreAliados
     *
     * @return string
     */
    public function getNombreAliados()
    {
        return $this->nombreAliados;
    }

    /**
     * Set linkAliados
     *
     * @param string $linkAliados
     *
     * @return ChhAliados
     */
    public function setLinkAliados($linkAliados)
    {
        $this->linkAliados = $linkAliados;

        return $this;
    }

    /**
     * Get linkAliados
     *
     * @return string
     */
    public function getLinkAliados()
    {
        return $this->linkAliados;
    }

    /**
     * Set imgAliados
     *
     * @param string $imgAliados
     *
     * @return ChhAliados
     */
    public function setImgAliados($imgAliados)
    {
        $this->imgAliados = $imgAliados;

        return $this;
    }

    /**
     * Get imgAliados
     *
     * @return string
     */
    public function getImgAliados()
    {
        return $this->imgAliados;
    }
}
