<?php

namespace Astrac\Bundle\TaggingPatternsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Astrac\Bundle\TaggingPatternsBundle\DependencyInjection\Compiler\AddRegistersCallsPass;

class AstracTaggingPatternsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter(AddRegistersCallsPass::CONFIGURATION_PARAMETER, $config['register_me']);
    }

    public function getAlias()
    {
        return 'astrac_tagging_patterns';
    }
}
