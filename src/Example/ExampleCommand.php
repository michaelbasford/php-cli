<?php

namespace Example;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimple\Container;

class ExampleCommand extends Command
{
    private $container;

    public function __construct(Container $container)
    {
        parent::__construct();
        $this->container = $container;
    }

    protected function configure()
    {
        $this
            ->setName('example:command')
            ->setDescription('An example command.')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello, World!');
    }
}