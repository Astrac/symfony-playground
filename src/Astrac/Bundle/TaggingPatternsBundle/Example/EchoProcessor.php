<?php

namespace Astrac\Bundle\TaggingPatternsBundle\Example;

class EchoProcessor implements CommandProcessorInterface
{
    public function processCommand(CommandInterface $command) 
    {
        echo $command->getString() . "\n";
    }    
}
