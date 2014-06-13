<?php

namespace Hadonra\Bundle\AddressBundle\Model;

use Hadonra\Bundle\AddressBundle\Model\RegionInterface;

/**
 * Interface CountryInterface
 * @package Hadonra\Bundle\AddressBundle\Model
 */
interface CountryInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param string $name
     * @return CountryInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $code
     * @return CountryInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getCode();

    /**
     * @param RegionInterface $region
     * @return RegionInterface
     */
    public function addRegion(RegionInterface $region);

    /**
     * @return ArrayCollection
     */
    public function getRegions();
}