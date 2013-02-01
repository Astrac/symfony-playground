<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

class NewLineProcessor implements CommandProcessorInterface
{
    public function processCommand(CommandInterface $command) 
    {
        echo PHP_EOL;
    }    
}
