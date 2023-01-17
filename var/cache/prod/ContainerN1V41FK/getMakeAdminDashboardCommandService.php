<?php

namespace ContainerN1V41FK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeAdminDashboardCommandService extends App_KernelProdContainer
{
    /*
     * Gets the public 'EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['EasyCorp\\Bundle\\EasyAdminBundle\\Command\\MakeAdminDashboardCommand'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminDashboardCommand(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] ?? ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Maker\\ClassMaker'] = new \EasyCorp\Bundle\EasyAdminBundle\Maker\ClassMaker(($container->services['kernel'] ?? $container->get('kernel', 1)), \dirname(__DIR__, 4)))), \dirname(__DIR__, 4));

        $instance->setName('make:admin:dashboard');
        $instance->setDescription('Creates a new EasyAdmin Dashboard class');

        return $instance;
    }
}
