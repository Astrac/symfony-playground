<?php

namespace Astrac\Bundle\TaggingPatternsBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Astrac\Bundle\TaggingPatternsBundle\Example\EchoCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CompositeExampleCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('astrac:tagging-patterns-examples:composite')
            ->setDescription('Example of DI tagging composite pattern');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $cmd1 = new EchoCommand('So Long');
        $cmd2 = new EchoCommand('And Thanks For All The Fish!');
        
        $processor = $this->getContainer()->get('astrac.tagging_patterns_examples.command_processor');
        $processor->processCommand($cmd1);
        $processor->processCommand($cmd2);
    }
}
