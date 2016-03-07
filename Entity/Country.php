<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Hadonra\Bundle\AddressBundle\Model\CountryInterface;
use Hadonra\Bundle\AddressBundle\Model\RegionInterface;

/**
 * Class Country
 * @package Hadonra\Bundle\AddressBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="Country")
 */
class Country implements CountryInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=31)
     */
    protected $code;

    /**
     * @ORM\OneToMany(targetEntity="Region", mappedBy="country")
     */
    protected $regions;

    /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="country")
     */
    protected $cities;

    public function __construct()
    {
        $this->regions = new ArrayCollection();
        $this->cities = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritDoc}
     */
    public function addRegion(RegionInterface $region)
    {
        $this->regions[] = $region;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * {@inheritDoc}
     */
    public function getCities()
    {
        return $this->cities;
    }
}
