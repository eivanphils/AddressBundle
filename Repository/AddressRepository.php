<?php

namespace Hadonra\Bundle\AddressBundle\Repository;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Hadonra\Bundle\AddressBundle\Model\AddressInterface;

/**
 * @author Raldo CHEA <raldo@chea.io>
 */
class AddressRepository extends EntityRepository
{
    public function attach(AddressInterface $address)
    {
        $this->_em->persist($address);
        $this->_em->flush();

        return $address;
    }
}
