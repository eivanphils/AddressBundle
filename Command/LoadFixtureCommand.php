<?php

namespace Hadonra\Bundle\AddressBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
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
        $path = __DIR__.'/../DataFixtures/sql/';

        foreach ($scripts as $script) {
            exec(sprintf(
                'mysql -u %s -p%s %s < %s',
                $this->getContainer()->getParameter('database_user'),
                $this->getContainer()->getParameter('database_password'),
                $this->getContainer()->getParameter('database_name'),
                $path.$script
            ));
        }
    }
}
