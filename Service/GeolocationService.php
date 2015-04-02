<?php

namespace Hadonra\Bundle\AddressBundle\Service;

use Hadonra\Bundle\AddressBundle\Model\GeolocationServiceInterface;
use Knp\DoctrineBehaviors\ORM\Geocodable\Type\Point;

/**
 * Class GeolocationService
 * @package Hadonra\Bundle\AddressBundle\Service
 *
 * @link http://www.developpez.net/forums/d1008039/applications/sig-systeme-d-information-geographique/ign-api-geoportail/d-degre-latitude/
 * @link http://blogs.msdn.com/b/ogdifrance/archive/2011/07/13/de-la-g-233-o-et-des-maths.aspx
 */
class GeolocationService implements GeolocationServiceInterface
{
    const RATIO_DEGREE = 111.13384;

    /**
     * 1° latitude = 111 111,11 meter
     * circumference of earth = 40 000 Km
     * 360° latidude
     * So 40000/360 = 111,11 km = 111 111,11 meter
     */
    const RATIO_DISTANCE_PER_DEGREE = 111111.11;

    /**
     * {@inheritDoc}
     */
    public function getDistance(Point $departure, Point $arrived)
    {
        $degrees = rad2deg(acos((sin(deg2rad($departure->getLatitude()))*sin(deg2rad($arrived->getLatitude()))) + (cos(deg2rad($departure->getLatitude()))*cos(deg2rad($arrived->getLatitude()))*cos(deg2rad($departure->getLongitude()-$arrived->getLongitude())))));

        return round($degrees * self::RATIO_DEGREE, 2);
    }

    /**
     * {@inheritDoc}
     */
    public function getLimit(Point $point, $around)
    {
        $latitude = $this->getLatitudeNorth($point, $around);
        $longitude = $this->getLongitudeEst($point, $around);
        $point1 = new Point($latitude, $longitude);

        $latitude = $this->getLatitudeSouth($point, $around);
        $longitude = $this->getLongitudeWest($point, $around);
        $point2 = new Point($latitude, $longitude);

        return ['max' => $point1, 'min' => $point2];
    }

    /**
     * @param Point $point
     * @param int $distance in meter unit
     * @return bool|int
     */
    public function getLongitudeWest(Point $point, $distance)
    {
        if (!is_int($distance)) {
            return false;
        }

        return $point->getLongitude() - ($distance * 1 / (111.320 * cos($point->getLatitude()) * 1000));
    }

    /**
     * @param Point $point
     * @param int $distance in meter unit
     * @return bool|int
     */
    public function getLongitudeEst(Point $point, $distance)
    {
        if (!is_int($distance)) {
            return false;
        }

        return $point->getLongitude() + ($distance * 1 / (111.320 * cos($point->getLatitude()) * 1000));
    }

    /**
     * @param Point $point
     * @param $distance
     * @return float
     */
    public function getLatitudeNorth(Point $point, $distance)
    {
        return $point->getLatitude() + $distance / self::RATIO_DISTANCE_PER_DEGREE;
    }

    /**
     * @param Point $point
     * @param $distance
     * @return float
     */
    public function getLatitudeSouth(Point $point, $distance)
    {
        return $point->getLatitude() - $distance / self::RATIO_DISTANCE_PER_DEGREE;
    }
}
