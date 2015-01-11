<?php

namespace Hadonra\Bundle\AddressBundle\Tests\Units\Service;

use Hadonra\Bundle\AddressBundle\Entity\City;
use Hadonra\Bundle\AddressBundle\Repository\AddressRepository;
use Hadonra\Bundle\AddressBundle\Service\AddressService;

class AddressServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $addressService;

    public function setUp()
    {
        $addressRepository = $this->getMockBuilder('Hadonra\Bundle\AddressBundle\Repository\AddressRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $this->addressService = new AddressService($addressRepository);
    }

    public function testCreate()
    {
        $city = new City();

        $this->addressService->create($city, '2 rue francisco ferrer');
    }
}
