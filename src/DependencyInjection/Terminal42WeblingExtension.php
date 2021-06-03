<?php

declare(strict_types=1);

namespace Terminal42\WeblingBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class Terminal42WeblingExtension extends ConfigurableExtension
{
    /**
     * Configures the passed container according to the merged configuration.
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../config')
        );

        $loader->load('services.xml');

        $container->setParameter('terminal42_webling.subdomain', $mergedConfig['subdomain']);
        $container->setParameter('terminal42_webling.api_key', $mergedConfig['api_key']);
        $container->setParameter('terminal42_webling.entity_factory', $mergedConfig['entity_factory']);
    }
}
