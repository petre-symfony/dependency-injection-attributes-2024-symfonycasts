<?php

namespace App\Remote;

use Psr\Container\ContainerInterface;

final class ButtonRemote {
	public function __construct(
		private ContainerInterface $container
	) {
	}

	public function press(string $name): void {
		$this->container->get($name)->press();
	}
}