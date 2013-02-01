<?php

namespace Astrac\Bundle\TaggingPatternsBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class AddRegistersCallsPass implements CompilerPassInterface
{
    const CONFIGURATION_PARAMETER = 'astrac.tagging_patterns.registers';
    
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter(self::CONFIGURATION_PARAMETER)) {
            $composites = $container->getParameter(self::CONFIGURATION_PARAMETER);
            foreach ($composites as $configuration) {
                $taggedComposites = $container->findTaggedServiceIds($configuration['tag']);
                $compositeService = $container->findDefinition($configuration['register']);
                foreach ($taggedComposites as $instanceId => $instanceAttributes) {
                    foreach ($instanceAttributes as $instanceAttribute) {
                        $parameters = array();
                        foreach ($configuration['parameters'] as $parameter) {
                            if ($parameter === '__service') {
                                $parameters[] = new Reference($instanceId);
                            } else {
                                $parameters[] = $instanceAttribute[$parameter];
                            }
                        }
                        $compositeService->addMethodCall($configuration['method'], $parameters);
                    }
                }
            }
        }
    }
}
