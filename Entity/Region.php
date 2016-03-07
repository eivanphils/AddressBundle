<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Hadonra\Bundle\AddressBundle\Model\CountryInterface;
use Hadonra\Bundle\AddressBundle\Model\RegionInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="Region")
 */
class Region implements RegionInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=125)
     */
    protected $timeZone;

    /**
     * @ORM\Column(type="string", length=31)
     */
    protected $utc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="regions")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     **/
    protected $country;

    /**
     * @ORM\OneToMany(targetEntity="Department", mappedBy="region")
     */
    protected $departements;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * {@inheritDoc}
     */
    public function setUtc($utc)
    {
        $this->utc = $utc;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getUtc()
    {
        return $this->utc;
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(CountryInterface $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {
        return $this->country;
    }
}
