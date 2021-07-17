<?php declare(strict_types=1);

namespace Symfona\PaginationBundle\DependencyInjection;

use Symfona\Pagination\Adapter\Factory;
use Symfona\Pagination\Adapter\FactoryInterface;
use Symfona\Pagination\Paginator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\Extension;

final class PaginationExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $factory = new Definition(Factory::class);

        $container->setDefinition(FactoryInterface::class, $factory);

        $paginator = new Definition(Paginator::class);
        $paginator->setAutowired(true);

        $container->setDefinition(Paginator::class, $paginator);
    }
}
