<?php

namespace Hadonra\Bundle\AddressBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;

/**
 * @author Raldo CHEA <raldo@chea.io>
 */
class AddressRepository
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function attach(AddressInterface $address)
    {
        $this->em->persist($address);
        $this->em->flush();

        return $address;
    }
}
