<?php

namespace Hadonra\Bundle\AddressBundle\Model;

use Hadonra\Bundle\AddressBundle\Model\CityInterface;

interface AddressInterface
{
    /**
     * @return integer
     */
    public function getId();

    /**
     * @param CityInterface $city
     * @return AddressInterface
     */
    public function setCity(CityInterface $city);

    /**
     * @return CityInterface
     */
    public function getCity();

    /**
     * @param string $street
     * @return AddressInterface
     */
    public function setStreet($street);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street2
     * @return AddressInterface
     */
    public function setStreet2($street2);

    /**
     * @return string
     */
    public function getStreet2();

    /**
     * @param string $street3
     * @return AddressInterface
     */
    public function setStreet3($street3);

    /**
     * @return string
     */
    public function getStreet3();

    /**
     * @return string
     */
    public function getFullAddress();
}
