<?php
namespace Ibnab\Bundle\ExtensionFieldBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
class IbnabExtensionFieldBundle extends Bundle
{
    public function getParent()
    {
        return 'OroCustomerBundle';
    }
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
