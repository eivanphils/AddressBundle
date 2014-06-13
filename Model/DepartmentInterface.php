<?php

namespace Hadonra\Bundle\AddressBundle\Model;

use Hadonra\Bundle\AddressBundle\Model\CityInterface;
use Hadonra\Bundle\AddressBundle\Model\RegionInterface;

/**
 * Interface DepartmentInterface
 * @package Hadonra\Bundle\AddressBundle\Model
 */
interface DepartmentInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param CityInterface $city
     * @return DepartmentInterface
     */
    public function addCity(CityInterface $city);

    /**
     * @return ArrayCollection
     */
    public function getCities();

    /**
     * @param string $name
     * @return DepartmentInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param RegionInterface $region
     * @return DepartmentInterface
     */
    public function setRegion(RegionInterface $region);

    /**
     * @return RegionInterface
     */
    public function getRegion();
}
