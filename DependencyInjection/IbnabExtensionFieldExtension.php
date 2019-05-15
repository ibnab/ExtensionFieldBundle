<?php

namespace Ibnab\Bundle\ExtensionFieldBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class IbnabExtensionFieldExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('form.yml');
        $container->prependExtensionConfig($this->getAlias(), array_intersect_key($config, array_flip(['settings'])));
    }
    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return 'ibnab_extension_field';
    }

}
