<?php

namespace Astrac\Bundle\TaggingPatternsBundle\Example;

interface CommandProcessorInterface {
    function processCommand(CommandInterface $command);
}
