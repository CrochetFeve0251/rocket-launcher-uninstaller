<?php

namespace RocketLauncherUninstaller\Tests\Fixtures\inc\Uninstall\Uninstall\classes;

use RocketLauncherCore\Container\AbstractServiceProvider;
use RocketLauncherCore\Activation\ActivationServiceProviderInterface;
use RocketLauncherUninstaller\Uninstall\UninstallServiceProviderInterface;

class VisibleServiceProvider extends AbstractServiceProvider implements UninstallServiceProviderInterface
{

    protected function define()
    {

    }
}
