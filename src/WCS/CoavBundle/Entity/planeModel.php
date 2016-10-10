<?php

namespace WCS\CoavBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * planeModel
 */
class planeModel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var int
     */
    private $cruisSpeed;

    /**
     * @var int
     */
    private $nbseats;

    /**
     * @var string
     */
    private $status;


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
     * Set model
     *
     * @param string $model
     * @return planeModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return planeModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruisSpeed
     *
     * @param integer $cruisSpeed
     * @return planeModel
     */
    public function setCruisSpeed($cruisSpeed)
    {
        $this->cruisSpeed = $cruisSpeed;

        return $this;
    }

    /**
     * Get cruisSpeed
     *
     * @return integer 
     */
    public function getCruisSpeed()
    {
        return $this->cruisSpeed;
    }

    /**
     * Set nbseats
     *
     * @param integer $nbseats
     * @return planeModel
     */
    public function setNbseats($nbseats)
    {
        $this->nbseats = $nbseats;

        return $this;
    }

    /**
     * Get nbseats
     *
     * @return integer 
     */
    public function getNbseats()
    {
        return $this->nbseats;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return planeModel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}
