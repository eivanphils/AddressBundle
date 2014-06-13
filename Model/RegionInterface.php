<?php

namespace Hadonra\Bundle\AddressBundle\Model;

/**
 * Interface RegionInterface
 * @package Hadonra\Bundle\AddressBundle\Model
 */
interface RegionInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param string $name
     * @return RegionInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $timeZone
     * @return RegionInterface
     */
    public function setTimeZone($timeZone);

    /**
     * @return string
     */
    public function getTimeZone();

    /**
     * @param string $utc
     * @return RegionInterface
     */
    public function setUtc($utc);

    /**
     * @return string
     */
    public function getUtc();

    /**
     * @param CountryInterface $country
     * @return CountryInterface
     */
    public function setCountry(CountryInterface $country);

    /**
     * @return CountryInterface
     */
    public function getCountry();
}