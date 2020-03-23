<?php

namespace Tidbo\FlagshipBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('tidbo_flagship');

        $treeBuilder->getRootNode()
                ->children()
                    ->arrayNode('options')
                        ->children()
                            ->scalarNode('timeout')
                            ->end()
                        ->end()
                    ->end()
                    ->scalarNode('baseUrl')
                        ->isRequired()
                    ->end()
                    ->scalarNode('environmentId')
                        ->isRequired()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}