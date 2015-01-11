<?php

namespace Hadonra\Bundle\AddressBundle\Model;

interface AddressServiceInterface
{
    /**
     * @param CityInterface $city
     * @param string $street
     * @return AddressInterface
     */
    public function create(CityInterface $city, $street);

    /**
     * @param string $fullAddress
     * @return array
     */
    public function definedPoint($fullAddress);
}
