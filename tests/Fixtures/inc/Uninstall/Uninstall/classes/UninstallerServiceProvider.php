<?php

namespace RocketLauncherUninstaller\Tests\Fixtures\inc\Uninstall\Uninstall\classes;

use RocketLauncherCore\Container\AbstractServiceProvider;
use RocketLauncherUninstaller\Uninstall\HasUninstallerServiceProviderInterface;

class UninstallerServiceProvider extends AbstractServiceProvider implements HasUninstallerServiceProviderInterface
{

    protected function define()
    {

    }

    public function get_uninstallers(): array
    {
        return [];
    }
}
