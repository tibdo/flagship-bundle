<?php

namespace Tidbo\FlagshipBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('tidb_flagship');

        $treeBuilder->getRootNode()
                ->children()
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