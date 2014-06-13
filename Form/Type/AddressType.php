<?php

namespace Hadonra\Bundle\AddressBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Hadonra\Bundle\AddressBundle\Repository\CityRepository;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street')
            ->add('street2')
            ->add('street3')
            ->add('city', 'entity', [
                'class' => 'HadonraAddressBundle:City',
                'property' => 'id',
                'query_builder' => function(CityRepository $cr) {
                    return $cr->createQueryBuilder('c');
                },
            ])
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Hadonra\Bundle\AddressBundle\Entity\Address',
            'cascade_validation' => true,
            'csrf_protection' => false,
        ]);
    }

    public function getName()
    {
        return 'address';
    }
}