<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

class CompositeCommandProcessor implements CommandProcessorInterface
{
    private $processors;
    
    public function __construct(array $processors = array()) 
    {
        $this->processors = $processors;
    }
    
    public function registerProcessor($key, CommandProcessorInterface $processor) 
    {
        $this->processors[$key] = $processor;
    }
    
    public function processCommand(CommandInterface $command) 
    {
        return $this->processors[$command->getProcessorId()]->processCommand($command);
    }
}
