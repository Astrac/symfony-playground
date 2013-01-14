<?php

namespace Astrac\Bundle\TaggingPatternsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder() 
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('astrac_tagging_patterns');

        $rootNode
            ->children()
                ->arrayNode('composite')
                    ->prototype('array')
                        ->children()
                            ->scalarNode('service')->end()
                            ->scalarNode('method')->end()
                            ->scalarNode('tag')->end()
                            ->arrayNode('parameters')
                                ->prototype('scalar')
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();
        
        return $treeBuilder;
    }    
}
