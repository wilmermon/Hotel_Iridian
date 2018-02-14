<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhNosotrosRotador
 * @ORM\Entity
 * @Vich\Uploadable
 
 */
class ChhNosotrosRotador
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tituloNosotros;

    /**
     * @var string
     */
    private $descNosotros;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $btnUnoNosotros;

    /**
     * @var string
     */
    private $linkUnoNosotros;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $btnDosNosotros;

    /**
     * @var string
     */
    private $linkDosNosotros;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $btnTresNosotros;

    /**
     * @var string
     */
    private $linkTresNosotros;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imgFondoNosotros;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $activo = true;

    /**
     * @var int
     */
    private $orden;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="btnUnoNosotros", size="imageSize")
     * 
     * @var File
     */
    private $imageFile1;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="btnDosNosotros", size="imageSize")
     * 
     * @var File
     */
    private $imageFile2;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="btnTresNosotros", size="imageSize")
     * 
     * @var File
     */
    private $imageFile3;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="imgFondoNosotros", size="imageSize")
     * 
     * @var File
     */
    private $imageFile4;
    
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $btnUnoNosotros
     *
     * @return Product
     */
    public function setImageFile1(File $btnUnoNosotros = null)
    {
        $this->imageFile1 = $btnUnoNosotros;
        
          if ($btnUnoNosotros) {
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
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $btnDosNosotros
     *
     * @return Product
     */
    public function setImageFile2(File $btnDosNosotros = null)
    {
        $this->imageFile2 = $btnDosNosotros;
        
          if ($btnDosNosotros) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

    }
    
    /**
     * @return File|null
     */
    public function getImageFile2()
    {
        return $this->imageFile2;
    }
    
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $btnTresNosotros
     *
     * @return Product
     */
    public function setImageFile3(File $btnTresNosotros = null)
    {
        $this->imageFile3 = $btnTresNosotros;
        
          if ($btnTresNosotros) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

    }
    
    /**
     * @return File|null
     */
    public function getImageFile3()
    {
        return $this->imageFile3;
    }
    
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imgFondoNosotros
     *
     * @return Product
     */
    public function setImageFile4(File $imgFondoNosotros = null)
    {
        $this->imageFile4 = $imgFondoNosotros;
        
          if ($imgFondoNosotros) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }

    }
    
    /**
     * @return File|null
     */
    public function getImageFile4()
    {
        return $this->imageFile4;
    }

    /**
     * Set tituloNosotros
     *
     * @param string $tituloNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setTituloNosotros($tituloNosotros)
    {
        $this->tituloNosotros = $tituloNosotros;

        return $this;
    }

    /**
     * Get tituloNosotros
     *
     * @return string
     */
    public function getTituloNosotros()
    {
        return $this->tituloNosotros;
    }

    /**
     * Set descNosotros
     *
     * @param string $descNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setDescNosotros($descNosotros)
    {
        $this->descNosotros = $descNosotros;

        return $this;
    }

    /**
     * Get descNosotros
     *
     * @return string
     */
    public function getDescNosotros()
    {
        return $this->descNosotros;
    }

    /**
     * Set btnUnoNosotros
     *
     * @param string $btnUnoNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setBtnUnoNosotros($btnUnoNosotros)
    {
        $this->btnUnoNosotros = $btnUnoNosotros;

        return $this;
    }

    /**
     * Get btnUnoNosotros
     *
     * @return string
     */
    public function getBtnUnoNosotros()
    {
        return $this->btnUnoNosotros;
    }

    /**
     * Set linkUnoNosotros
     *
     * @param string $linkUnoNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setLinkUnoNosotros($linkUnoNosotros)
    {
        $this->linkUnoNosotros = $linkUnoNosotros;

        return $this;
    }

    /**
     * Get linkUnoNosotros
     *
     * @return string
     */
    public function getLinkUnoNosotros()
    {
        return $this->linkUnoNosotros;
    }

    /**
     * Set btnDosNosotros
     *
     * @param string $btnDosNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setBtnDosNosotros($btnDosNosotros)
    {
        $this->btnDosNosotros = $btnDosNosotros;

        return $this;
    }

    /**
     * Get btnDosNosotros
     *
     * @return string
     */
    public function getBtnDosNosotros()
    {
        return $this->btnDosNosotros;
    }

    /**
     * Set linkDosNosotros
     *
     * @param string $linkDosNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setLinkDosNosotros($linkDosNosotros)
    {
        $this->linkDosNosotros = $linkDosNosotros;

        return $this;
    }

    /**
     * Get linkDosNosotros
     *
     * @return string
     */
    public function getLinkDosNosotros()
    {
        return $this->linkDosNosotros;
    }

    /**
     * Set btnTresNosotros
     *
     * @param string $btnTresNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setBtnTresNosotros($btnTresNosotros)
    {
        $this->btnTresNosotros = $btnTresNosotros;

        return $this;
    }

    /**
     * Get btnTresNosotros
     *
     * @return string
     */
    public function getBtnTresNosotros()
    {
        return $this->btnTresNosotros;
    }

    /**
     * Set linkTresNosotros
     *
     * @param string $linkTresNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setLinkTresNosotros($linkTresNosotros)
    {
        $this->linkTresNosotros = $linkTresNosotros;

        return $this;
    }

    /**
     * Get linkTresNosotros
     *
     * @return string
     */
    public function getLinkTresNosotros()
    {
        return $this->linkTresNosotros;
    }

    /**
     * Set imgFondoNosotros
     *
     * @param string $imgFondoNosotros
     *
     * @return ChhNosotrosRotador
     */
    public function setImgFondoNosotros($imgFondoNosotros)
    {
        $this->imgFondoNosotros = $imgFondoNosotros;

        return $this;
    }

    /**
     * Get imgFondoNosotros
     *
     * @return string
     */
    public function getImgFondoNosotros()
    {
        return $this->imgFondoNosotros;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     *
     * @return ChhNosotrosRotador
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return int
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     *
     * @return ChhNosotrosRotador
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return int
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set idiomaRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhIdiomas $idiomaRelacion
     *
     * @return ChhNosotrosRotador
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
