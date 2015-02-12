<?php

namespace Hadonra\Bundle\AddressBundle\Service;

use Bazinga\Bundle\GeocoderBundle\Geocoder\LoggableGeocoder;
use Hadonra\Bundle\AddressBundle\Entity\Address;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;
use Hadonra\Bundle\AddressBundle\Repository\AddressRepository;
use Hadonra\Bundle\AddressBundle\Model\CityInterface;
use Hadonra\Bundle\AddressBundle\Model\AddressServiceInterface;

class AddressService implements AddressServiceInterface
{
    /**
     * @var AddressRepository
     */
    protected $addressRepository;

    /**
     * @var LoggableGeocoder
     */
    protected $geocoderProvider;

    /**
     * @param AddressRepository $addressRepository
     * @param LoggableGeocoder $bazingaGeocoderService
     * @param string $providerName
     */
    public function __construct(AddressRepository $addressRepository, LoggableGeocoder $bazingaGeocoderService, $providerName)
    {
        $this->addressRepository = $addressRepository;
        $this->geocoderProvider = $bazingaGeocoderService->using($providerName);
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

        $this->addressRepository->attach($address);

        return $address;
    }

    /**
     * {@inheritDoc}
     */
    public function definedPoint($fullAddress)
    {

    }
}
