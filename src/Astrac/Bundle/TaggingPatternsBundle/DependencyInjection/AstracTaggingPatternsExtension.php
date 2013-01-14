<?php

namespace Astrac\Bundle\TaggingPatternsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;
use Astrac\Bundle\TaggingPatternsBundle\DependencyInjection\Compiler\RegisterCompositesPass;

class AstracTaggingPatternsExtension extends Extension
{
    const COMPOSITE_CLASS = '';
    
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        
        $container->setParameter(RegisterCompositesPass::CONFIGURATION_PARAMETER, $config['composite']);
    }

    public function getAlias()
    {
        return 'astrac_tagging_patterns';
    }
}
