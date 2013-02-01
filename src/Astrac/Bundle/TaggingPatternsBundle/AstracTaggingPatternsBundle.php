<?php

namespace Astrac\Bundle\TaggingPatternsBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Astrac\Bundle\TaggingPatternsBundle\DependencyInjection\Compiler\AddRegistersCallsPass;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AstracTaggingPatternsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new AddRegistersCallsPass());
    }
}
