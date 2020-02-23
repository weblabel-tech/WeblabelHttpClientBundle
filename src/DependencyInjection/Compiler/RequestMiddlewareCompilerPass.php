<?php

declare(strict_types=1);

namespace Weblabel\HttpClientBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

final class RequestMiddlewareCompilerPass implements CompilerPassInterface
{
    /**
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('weblabel_http_client.client');
        $references = [];
        foreach ($container->findTaggedServiceIds('weblabel_http_client.middleware.request') as $id => $tagConfiguration) {
            $references[] = new Reference($id);
        }

        $definition->setArgument(1, $references);
    }
}
