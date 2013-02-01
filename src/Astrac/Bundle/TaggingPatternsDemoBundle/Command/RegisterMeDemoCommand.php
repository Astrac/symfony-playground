<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe\EchoCommand;
use Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe\NewLineCommand;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class RegisterMeDemoCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('astrac:tagging-patterns-demo:register-me')
            ->setDescription('Example of DI Register Me pattern');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $long = new EchoCommand('So Long');
        $nl = new NewLineCommand();
        $thanks = new EchoCommand('And Thanks For All The Fish!');
        
        $processor = $this->getContainer()->get('astrac.tagging_patterns_examples.command_processor');
        $processor->processCommand($long);
        $processor->processCommand($nl);
        $processor->processCommand($thanks);
        $processor->processCommand($nl);
    }
}
