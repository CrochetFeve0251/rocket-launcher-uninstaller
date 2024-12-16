<?php

namespace LaunchpadUninstaller\Tests\Fixtures\inc\boot\autowiring\inc;

use LaunchpadCore\Activation\HasActivatorServiceProviderInterface;
use LaunchpadCore\Activation\HasActivatorServiceProviderTrait;
use LaunchpadCore\Container\AbstractServiceProvider;

class AnnotationActivatorServiceProvider extends AbstractServiceProvider implements HasActivatorServiceProviderInterface {
	use HasActivatorServiceProviderTrait;

	/**
	 * @inheritDoc
	 */
	protected function define() {
		$this->register_activator(AnnotationActivator::class);
	}
}