<?php

namespace Hadonra\Bundle\AddressBundle\Tests\Units\Service;

use Bazinga\Bundle\GeocoderBundle\Geocoder\LoggableGeocoder;
use Geocoder\Provider\GoogleMapsProvider;
use Hadonra\Bundle\AddressBundle\Entity\City;
use Hadonra\Bundle\AddressBundle\Service\AddressService;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;
use Hadonra\Bundle\AddressBundle\Service\GeolocalisationService;

class AddressServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $addressService;

    public function setUp()
    {
        $addressRepository = $this->getMockBuilder('Hadonra\Bundle\AddressBundle\Repository\AddressRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $bazingaGeocoder = new LoggableGeocoder();
        $geolocalisationService = new GeolocalisationService($bazingaGeocoder, 'google_maps');
        $this->addressService = new AddressService($addressRepository, $geolocalisationService);
    }

    public function testCreate()
    {
        $city = new City();
        $address = $this->addressService->create($city, '2 rue francisco ferrer');

        $this->assertTrue($address instanceof AddressInterface);
    }
}
