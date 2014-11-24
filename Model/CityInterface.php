<?php

namespace Hadonra\Bundle\AddressBundle\Model;

/**
 * @package HadonraAddressBundle
 * @author Raldo CHEA <raldo@chea.io>
 */
interface CityInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @return integer
     */
    public function getId();

    /**
     * @param string $name
     * @return CityInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $zipCode
     * @return CityInterface
     */
    public function setZipCode($zipCode);

    /**
     * @return string
     */
    public function getZipCode();
}
