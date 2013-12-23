<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Hadonra\Bundle\AddressBundle\Model\AddressInterface;
use Knp\DoctrineBehaviors\Model\Geocodable as KnpGeocodable;

class Address implements AddressInterface
{
    use KnpGeocodable\Geocodable;

    protected $id;

    protected $street;

    protected $street2;

    protected $street3;

    protected $city;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param mixed $street3
     */
    public function setStreet3($street3)
    {
        $this->street3 = $street3;
    }

    /**
     * @return mixed
     */
    public function getStreet3()
    {
        return $this->street3;
    }
}
