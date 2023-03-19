<?php

use RocketLauncherUninstaller\Tests\Fixtures\inc\Uninstall\Uninstall\classes\UninstallerServiceProvider;
use RocketLauncherUninstaller\Tests\Fixtures\inc\Uninstall\Uninstall\classes\ServiceProvider;
use RocketLauncherUninstaller\Tests\Fixtures\inc\Uninstall\Uninstall\classes\VisibleServiceProvider;
use RocketLauncherUninstaller\Uninstall\UninstallerInterface;


$uninstaller = Mockery::mock(UninstallerInterface::class);

$provider = Mockery::mock(ServiceProvider::class);

$visible_provider = Mockery::mock(VisibleServiceProvider::class);

$uninstaller_provider = Mockery::mock(UninstallerServiceProvider::class);

return [
    'testShouldLoadActivator' => [
        'config' => [
            'uninstallers' => [
                $uninstaller
            ],
            'params' => [],
            'providers' => [
                [
                    'provider' => $provider,
                    'callbacks' => [
                        'get_uninstallers' => [],
                    ]
                ],
                [
                    'provider' => $visible_provider,
                    'callbacks' => [
                        'get_uninstallers' => [],
                    ]
                ],
                [
                    'provider' => $uninstaller_provider,
                    'callbacks' => [
                        'get_uninstallers' => [get_class($uninstaller)],
                    ]
                ],
            ]
        ],
        'expected' => [
            'providers' => [
                $visible_provider,
                $uninstaller_provider
            ],
            'uninstallers' => [
                $uninstaller
            ]
        ]
    ]
];
