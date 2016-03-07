<?php

namespace Hadonra\Bundle\AddressBundle\Service;

use Hadonra\Bundle\AddressBundle\Entity\Address;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;
use Hadonra\Bundle\AddressBundle\Repository\AddressRepository;
use Hadonra\Bundle\AddressBundle\Model\CityInterface;
use Hadonra\Bundle\AddressBundle\Model\AddressServiceInterface;

class AddressService implements AddressServiceInterface
{
    /**
     * @var GeolocalisationService
     */
    protected $geolocalisationService;

    /**
     * @param GeolocalisationService $geolocalisationService
     */
    public function __construct(GeolocalisationService $geolocalisationService)
    {
        $this->geolocalisationService = $geolocalisationService;
    }

    /**
     * {@inheritDoc}
     */
    public function create(CityInterface $city, $street)
    {
        $address = new Address();
        $address
            ->setCity($city)
            ->setStreet($street)
        ;

        return $address;
    }

    /**
     * {@inheritDoc}
     */
    public function definedPoint(AddressInterface $address)
    {
        $fullAddress = str_replace('bis', '', $address->getFullAddress());
        $point = $this->geolocalisationService->getPoint($fullAddress);
        $address->setLocation($point);

        return $address;
    }
}
