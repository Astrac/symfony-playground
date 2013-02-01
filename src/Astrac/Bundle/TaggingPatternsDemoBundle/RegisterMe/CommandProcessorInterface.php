<?php

namespace Astrac\Bundle\TaggingPatternsDemoBundle\RegisterMe;

interface CommandProcessorInterface {
    function processCommand(CommandInterface $command);
}
