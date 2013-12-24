<?php

namespace Hadonra\Bundle\AddressBundle\Entity;

use Hadonra\Bundle\AddressBundle\Model\CityInterface;

/**
 * @package HadonraAddressBundle
 * @author Raldo CHEA <me@rchea.com>
 *
 * @ORM\Entity
 * @ORM\Table()
 */
class City implements CityInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=15)
     */
    protected $zipCode;

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return $this->name;
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
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
}
