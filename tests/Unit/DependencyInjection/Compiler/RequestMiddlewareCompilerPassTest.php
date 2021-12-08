<?php

declare(strict_types=1);

namespace Weblabel\HttpClientBundle\Bundle\Tests\Unit\DependencyInjection\Compiler;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Weblabel\HttpClientBundle\DependencyInjection\Compiler\RequestMiddlewareCompilerPass;

class RequestMiddlewareCompilerPassTest extends TestCase
{
    public function testRequestMiddlewareAutoconfiguration()
    {
        $containerBuilder = new ContainerBuilder();
        $httpClientDefinition = $containerBuilder->register('weblabel_http_client.client');
        $requestMiddlewareDefinition = $containerBuilder->register('weblabel_http_client.middleware.request.test');
        $requestMiddlewareDefinition->addTag('weblabel_http_client.middleware.request');

        $compilerPass = new RequestMiddlewareCompilerPass();
        $compilerPass->process($containerBuilder);

        self::assertContainsEquals(new Reference('weblabel_http_client.middleware.request.test'), $httpClientDefinition->getArgument(1));
    }
}
