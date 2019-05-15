<?php
namespace Ibnab\Bundle\ExtensionFieldBundle\DependencyInjection;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        //$rootNode = $treeBuilder->root('ibnab_extension_field');
        return $treeBuilder;
    }   
}
