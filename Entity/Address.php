<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Doctrine\ORM\Mapping as ORM;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;
use Hadonra\Bundle\AddressBundle\Model\CityInterface;

/**
 * @package HadonraAddressBundle
 * @author Raldo CHEA <raldo@chea.io>
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hadonra\Bundle\AddressBundle\Repository\AddressRepository")
 */
class Address implements AddressInterface
{
    use ORMBehaviors\Geocodable\Geocodable;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $street;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $street2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $street3;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="addresses")
     * @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city;

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
    public function setCity(CityInterface $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet3($street3)
    {
        $this->street3 = $street3;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet3()
    {
        return $this->street3;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getFullAddress()
    {
        return $this->street. ', '. $this->getCity()->getName();
    }
}
