<?php

namespace CarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="CarBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Model
     *
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Model", inversedBy="cars")
     */
    private $model;

    /**
     * @var Make
     *
     * @ORM\ManyToOne(targetEntity="CarBundle\Entity\Make", inversedBy="cars")
     */
    private $make;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="decimal", scale=2 )
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var boolean
     *
     * @ORM\Column(name="navigation", type="boolean")
     */
    private $navigation;


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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

      /**
     * Set description
     *
     * @param string $description
     *
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


    /**
     * Set price
     *
     * @param string $price
     *
     * @return Car
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set navigation
     *
     * @param boolean $navigation
     *
     * @return Car
     */
    public function setNavigation($navigation)
    {
        $this->navigation = $navigation;

        return $this;
    }

    /**
     * Get navigation
     *
     * @return boolean
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * Set model
     *
     * @param \CarBundle\Entity\Make $model
     *
     * @return Car
     */
    public function setModel(\CarBundle\Entity\Make $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \CarBundle\Entity\Make
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set make
     *
     * @param \CarBundle\Entity\Make $make
     *
     * @return Car
     */
    public function setMake(\CarBundle\Entity\Make $make = null)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get make
     *
     * @return \CarBundle\Entity\Make
     */
    public function getMake()
    {
        return $this->make;
    }
}
