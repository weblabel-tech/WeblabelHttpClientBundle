<?php

declare(strict_types=1);

namespace Weblabel\HttpClientBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Weblabel\HttpClient\RequestMiddleware;
use Weblabel\HttpClientBundle\DependencyInjection\Compiler\RequestMiddlewareCompilerPass;

class WeblabelHttpClientBundle extends Bundle
{
    /**
     * Builds the bundle.
     *
     * @return void
     */
    public function build(ContainerBuilder $container)
    {
        $container->registerForAutoconfiguration(RequestMiddleware::class)->addTag('weblabel_http_client.middleware.request');
        $container->addCompilerPass(new RequestMiddlewareCompilerPass());
    }
}
