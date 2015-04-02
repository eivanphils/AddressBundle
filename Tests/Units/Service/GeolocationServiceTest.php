<?php

namespace Hadonra\Bundle\AddressBundle\Tests\Units\Service;

use Hadonra\Bundle\AddressBundle\Service\GeolocationService;
use Knp\DoctrineBehaviors\ORM\Geocodable\Type\Point;

class GeolocationServiceTest extends \PHPUnit_Framework_TestCase
{
    protected $geolocationService;

    public function setUp()
    {
        $this->geolocationService = new GeolocationService();
    }

    public function testGetDistance()
    {
        $point1 = new Point(48.945389, 2.497216);
        $point2 = new Point(45.320160, 6.995359);
        $distance = $this->geolocationService->getDistance($point1, $point2);
        $this->assertEquals(527.04, $distance);

        $point1 = new Point(48.8666667, 2.3333333);
        $point2 = new Point(19.4341667, -99.1386111);
        $distance = $this->geolocationService->getDistance($point1, $point2);
        $this->assertEquals(9189.75, $distance);
    }

    public function testGetLimit()
    {
        $point = new Point(48.945389, 2.497216);
        $points = $this->geolocationService->getLimit($point, 1000);
        $this->assertTrue($points['max']->getLatitude() > $points['min']->getLatitude());
        $this->assertTrue($points['max']->getLongitude() > $points['min']->getLongitude());
    }

    public function testGetLongitudeWest()
    {
        $point = new Point(48.945389, 2.497216);
        $result = $this->geolocationService->getLongitudeWest($point, 50);
        $this->assertEquals(2.495405508685, $result);

        $result = $this->geolocationService->getLongitudeWest($point, 'test');
        $this->assertFalse($result);
    }

    public function testGestLongitudeEst()
    {
        $point = new Point(48.945389, 2.497216);
        $result = $this->geolocationService->getLongitudeEst($point, 50);
        $this->assertEquals(2.499026491315, $result);

        $result = $this->geolocationService->getLongitudeEst($point, 'test');
        $this->assertFalse($result);
    }

    public function testGetLatitudeNorth()
    {
        $point = new Point(48.945389, 2.497216);
        $result = $this->geolocationService->getLatitudeNorth($point, 1000);

        $this->assertEquals(48.95438900009, $result);
    }

    public function testGetLatitudeSouth()
    {
        $point = new Point(48.945389, 2.497216);
        $result = $this->geolocationService->getLatitudeSouth($point, 1000);

        $this->assertEquals(48.93638899991, $result);
    }
}
