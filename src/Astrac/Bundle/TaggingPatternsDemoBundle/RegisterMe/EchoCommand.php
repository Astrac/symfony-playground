<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

class EchoCommand implements CommandInterface
{
    private $string;
    
    public function __construct($string) 
    {
        $this->string = $string;
    }
    
    public function getProcessorId() 
    {
        return 'echo';
    }    
    
    public function getString()
    {
        return $this->string;
    }
}
