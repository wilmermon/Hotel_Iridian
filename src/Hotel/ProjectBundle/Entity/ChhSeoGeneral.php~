<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhSeoGeneral
 * @ORM\Entity
 * @Vich\Uploadable
 */
class ChhSeoGeneral
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imagen;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imagen", size="imageSize")
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
    * @ORM\ManyToOne(targetEntity="Hotel\ProjectBundle\Entity\ChhMenu")
    * @ORM\JoinColumn(name="menuRelacion_id", referencedColumnName="id")
    */
    private $menuRelacion;

    
    
    public function __toString(){
        return $this->titulo.' ';
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return ChhSeoGeneral
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return ChhSeoGeneral
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    

    /**
     * Set menuRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhMenu $menuRelacion
     *
     * @return ChhSeoGeneral
     */
    public function setMenuRelacion(\Hotel\ProjectBundle\Entity\ChhMenu $menuRelacion = null)
    {
        $this->menuRelacion = $menuRelacion;

        return $this;
    }

    /**
     * Get menuRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhMenu
     */
    public function getMenuRelacion()
    {
        return $this->menuRelacion;
    }
}
