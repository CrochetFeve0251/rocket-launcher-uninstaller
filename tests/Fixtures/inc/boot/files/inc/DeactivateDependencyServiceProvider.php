<?php

namespace LaunchpadUninstaller\Tests\Fixtures\inc\boot\files\inc;

use LaunchpadCore\Container\AbstractServiceProvider;
use LaunchpadCore\Deactivation\DeactivationServiceProviderInterface;

class DeactivateDependencyServiceProvider extends AbstractServiceProvider implements DeactivationServiceProviderInterface
{

    protected function define()
    {
        $this->register_service(DeactivateDependency::class);
    }
}