<?php

declare(strict_types=1);

namespace Weblabel\HttpClientBundle\Tests\Fixtures;

use Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use Weblabel\HttpClientBundle\WeblabelHttpClientBundle;

class WeblabelHttpClientTestKernel extends Kernel
{
    public function __construct()
    {
        parent::__construct('test', true);
    }

    public function registerBundles()
    {
        return [
            new FrameworkBundle(),
            new SensioFrameworkExtraBundle(),
            new WeblabelHttpClientBundle(),
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/sensio_framework_extra.test.yaml');
        $loader->load(__DIR__.'/config/services.test.yaml');
    }

    public function getProjectDir(): string
    {
        return __DIR__;
    }
}
