<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

class NewLineCommand implements CommandInterface
{
    public function getProcessorId() 
    {
        return 'newline';
    }    
}
