<?php

namespace RocketLauncherUninstaller\Uninstall;

interface UninstallerInterface
{
    /**
     * Executes this method on plugin uninstall
     *
     * @return void
     */
    public function uninstall();
}
