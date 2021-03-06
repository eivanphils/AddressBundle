<?php

namespace Hadonra\Bundle\AddressBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class LoadFixtureCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('hadonra:address:load-fixture')
            ->setDescription('Load countries, regions, departements & cities')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $scripts = ['countries.sql', 'regions.sql', 'departments.sql', 'cities.sql'];
        $kernel = $this->getApplication()->getKernel();
        foreach ($scripts as $script) {
            $pathFile = $kernel->locateResource('@HadonraAddressBundle/DataFixtures/sql/' . $script);
            exec(sprintf(
                'mysql -u %s -p%s %s < %s',
                $this->getContainer()->getParameter('database_user'),
                $this->getContainer()->getParameter('database_password'),
                $this->getContainer()->getParameter('database_name'),
                $pathFile
            ));
        }
    }
}
