<?php

namespace ICS\NavigationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treebuilder = new TreeBuilder('navigation');

        $treebuilder->getRootNode()
        ->children()
            ->arrayNode('usermenu')
                ->children()
                    ->booleanNode('activate')->defaultValue(false)->end()
                    ->booleanNode('autolib')->defaultValue(true)->end()
                    ->scalarNode('lib')->defaultValue('User Menu')->end()
                    ->scalarNode('connexionlib')->defaultValue('Sign In')->end()
                    ->scalarNode('connexionicon')->defaultValue('fa fa-sign-in-alt')->end()
                    ->scalarNode('connexionroute')->defaultValue('app-login')->end()
                    ->arrayNode('childs')
                        ->useAttributeAsKey('name')
                        ->arrayPrototype()
                            ->children()
                                ->scalarNode('lib')->defaultValue('')->end()
                                ->scalarNode('icon')->defaultValue('')->end()
                                ->scalarNode('route')->defaultValue('')->end()
                                ->arrayNode('roles')
                                    ->scalarPrototype()->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->arrayNode('navbars')
                ->useAttributeAsKey('name')
                ->arrayPrototype()
                    ->children()
                        ->scalarNode('brand')->defaultValue('')->end()
                        ->scalarNode('brandRoute')->defaultValue('homepage')->end()
                        ->scalarNode('brandIcon')->defaultValue('')->end()
                        ->scalarNode('brandImage')->defaultValue('')->end()
                        ->booleanNode('searchenabled')->defaultValue(false)->end()
                        ->scalarNode('searchroute')->defaultValue('search')->end()
                        ->enumNode('color')
                            ->values(['primary','secondary','success','danger','warning','info','light','dark','white','transparent'])
                            ->defaultValue('light')
                        ->end()
                        ->enumNode('fixed')
                            ->values(['none','top','bottom','sticky'])
                            ->defaultValue('none')
                        ->end()
                        ->arrayNode('items')
                            ->useAttributeAsKey('name')
                            ->arrayPrototype()
                                ->children()
                                    ->scalarNode('lib')->defaultValue('')->end()
                                    ->scalarNode('icon')->defaultValue('')->end()
                                    ->scalarNode('route')->defaultValue('')->end()
                                    ->arrayNode('roles')
                                        ->scalarPrototype()->end()
                                    ->end()
                                    ->arrayNode('childs')
                                        ->arrayPrototype()
                                        ->children()
                                            ->scalarNode('lib')->defaultValue('')->end()
                                            ->scalarNode('icon')->defaultValue('')->end()
                                            ->scalarNode('route')->defaultValue('')->end()
                                            ->arrayNode('roles')
                                                ->scalarPrototype()->end()
                                            ->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ->end()
        ;

        return $treebuilder;
    }


}