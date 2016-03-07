<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Hadonra\Bundle\AddressBundle\Model\CityInterface;
use Hadonra\Bundle\AddressBundle\Model\DepartmentInterface;
use Hadonra\Bundle\AddressBundle\Model\RegionInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="Department")
 */
class Department implements DepartmentInterface
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
     * @ORM\ManyToOne(targetEntity="Region", inversedBy="departments")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected $region;

    /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="department")
     */
    protected $cities;

    public function __construct()
    {
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
    public function addCity(CityInterface $city)
    {
        $this->cities[] = $city;
    }

    /**
     * {@inheritDoc}
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function setRegion(RegionInterface $region)
    {
        $this->region = $region;
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {
        return $this->region;
    }
}
