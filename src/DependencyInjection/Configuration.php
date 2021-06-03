<?php

declare(strict_types=1);

namespace Terminal42\WeblingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('terminal42_webling');

        $rootNode
            ->children()
                ->scalarNode('subdomain')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('api_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('entity_factory')
                    ->cannotBeEmpty()
                    ->defaultValue('Terminal42\WeblingApi\EntityFactory')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
