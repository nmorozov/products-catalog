<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="text", length=150)
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="QuantityUnit", inversedBy="product")
     * @ORM\JoinColumn(name="quantity_unit_id", referencedColumnName="id")
     */
    private $quantityUnit;

    /**
     * @ORM\ManyToOne(targetEntity="Color", inversedBy="product")
     * @ORM\JoinColumn(name="color_id", referencedColumnName="id")
     */
    private $color;

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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Product
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityUnit
     *
     * @param \AppBundle\Entity\QuantityUnit $quantityUnit
     *
     * @return Product
     */
    public function setQuantityUnit(\AppBundle\Entity\QuantityUnit $quantityUnit = null)
    {
        $this->quantityUnit = $quantityUnit;

        return $this;
    }

    /**
     * Get quantityUnit
     *
     * @return \AppBundle\Entity\QuantityUnit
     */
    public function getQuantityUnit()
    {
        return $this->quantityUnit;
    }

    /**
     * Set color
     *
     * @param \AppBundle\Entity\Color $color
     *
     * @return Product
     */
    public function setColor(\AppBundle\Entity\Color $color = null)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return \AppBundle\Entity\Color
     */
    public function getColor()
    {
        return $this->color;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quantityUnit = new \Doctrine\Common\Collections\ArrayCollection();
        $this->color = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add quantityUnit
     *
     * @param \AppBundle\Entity\QuantityUnit $quantityUnit
     *
     * @return Product
     */
    public function addQuantityUnit(\AppBundle\Entity\QuantityUnit $quantityUnit)
    {
        $this->quantityUnit[] = $quantityUnit;

        return $this;
    }

    /**
     * Remove quantityUnit
     *
     * @param \AppBundle\Entity\QuantityUnit $quantityUnit
     */
    public function removeQuantityUnit(\AppBundle\Entity\QuantityUnit $quantityUnit)
    {
        $this->quantityUnit->removeElement($quantityUnit);
    }

    /**
     * Add color
     *
     * @param \AppBundle\Entity\Color $color
     *
     * @return Product
     */
    public function addColor(\AppBundle\Entity\Color $color)
    {
        $this->color[] = $color;

        return $this;
    }

    /**
     * Remove color
     *
     * @param \AppBundle\Entity\Color $color
     */
    public function removeColor(\AppBundle\Entity\Color $color)
    {
        $this->color->removeElement($color);
    }
}
