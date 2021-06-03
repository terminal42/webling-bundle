<?php

declare(strict_types=1);

namespace Terminal42\WeblingBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('terminal42_webling');

        $treeBuilder
            ->getRootNode()
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
