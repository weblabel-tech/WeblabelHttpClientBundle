<?php

declare(strict_types=1);

namespace Weblabel\HttpClientBundle\Tests\Integration;

use Psr\Http\Message\RequestFactoryInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Weblabel\HttpClient\Factory\JsonRequestFactory;
use Weblabel\HttpClient\HttpClient;

class WeblabelHttpClientBundleIntegrationTest extends KernelTestCase
{
    public function testServiceConfiguration()
    {
        self::bootKernel();

        $container = static::getContainer();

        self::assertInstanceOf(RequestFactoryInterface::class, $container->get('test.Psr\Http\Message\RequestFactoryInterface'));
        self::assertInstanceOf(JsonRequestFactory::class, $container->get('test.weblabel_http_client.factory.request.json'));
        self::assertInstanceOf(HttpClient::class, $container->get('test.weblabel_http_client.client'));
    }
}
