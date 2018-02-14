<?php

namespace Hotel\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * ChhCongresovshotel
 * @ORM\Entity
 * @Vich\Uploadable

 */
class ChhCongresovshotel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Hotel\ProjectBundle\Entity\ChhCongreso
     */
    private $congresoRelacion;

    /**
     * @var \Hotel\ProjectBundle\Entity\ChhHotel
     */
    private $hotelRelacion;


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
     * Set congresoRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhCongreso $congresoRelacion
     *
     * @return ChhCongresovshotel
     */
    public function setCongresoRelacion(\Hotel\ProjectBundle\Entity\ChhCongreso $congresoRelacion = null)
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
     * Set hotelRelacion
     *
     * @param \Hotel\ProjectBundle\Entity\ChhHotel $hotelRelacion
     *
     * @return ChhCongresovshotel
     */
    public function setHotelRelacion(\Hotel\ProjectBundle\Entity\ChhHotel $hotelRelacion = null)
    {
        $this->hotelRelacion = $hotelRelacion;

        return $this;
    }

    /**
     * Get hotelRelacion
     *
     * @return \Hotel\ProjectBundle\Entity\ChhHotel
     */
    public function getHotelRelacion()
    {
        return $this->hotelRelacion;
    }
}
