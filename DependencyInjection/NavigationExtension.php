<?php

namespace ICS\NavigationBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Contracts\Service\ServiceSubscriberInterface;

class NavigationExtension extends Extension
{

    /**
     * {@inheritdoc}
    */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config/'));
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $configs=$this->processConfiguration($configuration,$configs);

        $container->setParameter('navigation',$configs);


    }

}