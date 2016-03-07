<?php

namespace Hadonra\Bundle\AddressBundle\Tests\Units\Service;

use Hadonra\Bundle\AddressBundle\Entity\City;
use Hadonra\Bundle\AddressBundle\Service\AddressService;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;

class AddressServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Hadonra\Bundle\AddressBundle\Service\AddressService
     */
    protected $addressService;

    public function setUp()
    {
        $geolocalisationService = $this->getMockBuilder('Hadonra\Bundle\AddressBundle\Service\GeolocalisationService')
            ->disableOriginalConstructor()
            ->getMock();

        $this->addressService = new AddressService($geolocalisationService);
    }

    public function testCreate()
    {
        $city = new City();
        $address = $this->addressService->create($city, '2 rue francisco ferrer');

        $this->assertTrue($address instanceof AddressInterface);
    }
}
