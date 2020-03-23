<?php
namespace Tidbo\FlagshipBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpClient\HttpClient;

class TidboFlagshipExtension extends Extension
{
    /**
     * @param array            $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter("tidbo_flagship.baseUrl", $config['baseUrl']);
        $container->setParameter("tidbo_flagship.environmentId", $config['environmentId']);

        $defaultOptions = [];
        if ($config['options']['timeout']) {
            $defaultOptions['timeout'] = $config['options']['timeout'];
        }

        $container->setParameter("tidbo_flagship.http_client_options", $defaultOptions);

        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');
    }
}