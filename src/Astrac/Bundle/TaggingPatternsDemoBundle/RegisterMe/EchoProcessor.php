<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

class EchoProcessor implements CommandProcessorInterface
{
    public function processCommand(CommandInterface $command) 
    {
        echo $command->getString() . "\n";
    }    
}
