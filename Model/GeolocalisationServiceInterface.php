<?php

namespace Hadonra\Bundle\AddressBundle\Model;

use Knp\DoctrineBehaviors\ORM\Geocodable\Type\Point;

interface GeolocalisationServiceInterface
{
    /**
     * Distance as the crow flies
     *
     * @param Point $departure
     * @param Point $arrived
     * @return int meter
     */
    public function getDistance(Point $departure, Point $arrived);

    /**
     * @param Point $center
     * @param int $around
     * @return array
     */
    public function getLimit(Point $center, $around);
}
