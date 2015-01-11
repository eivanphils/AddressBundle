<?php

namespace Hadonra\Bundle\AddressBundle\Service;

use Hadonra\Bundle\AddressBundle\Entity\Address;
use Hadonra\Bundle\AddressBundle\Model\CityInterface;
use Hadonra\Bundle\AddressBundle\Model\AddressServiceInterface;

class AddressService implements AddressServiceInterface
{
    /**
     * @var AddressRepository
     */
    protected $addressRepository;

    /**
     * @param AddressRepository $addressRepository
     */
    public function __construct(AddressRepository $addressRepository)
    {
        $this->addressRepository = $addressRepository;
    }

    /**
     * {@inheritDoc}
     */
    public function create(CityInterface $city, $street, $definePoint = true)
    {
        $address = new Address();
        $address
            ->setCity($city)
            ->setStreet($street)
        ;

        if ($definePoint) {
            $address = $this->definedPoint($address->getFullAddress());
        }

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
