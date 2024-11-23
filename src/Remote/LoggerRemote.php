<?php

namespace App\Remote;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\AsDecorator;
use Symfony\Component\DependencyInjection\Attribute\Target;

#[AsDecorator(ButtonRemote::class)]
class LoggerRemote implements RemoteInterface{
	public function __construct(
		#[Target('buttonsLogger')]
		private LoggerInterface $logger,
		private RemoteInterface $inner
	) {
	}

	public function press(string $name): void {
		$this->logger->info('Pressing button {name}', [
			'name' => $name
		]);

		$this->inner->press($name);
		
		$this->logger->info('Pressed button {name}', [
			'name' => $name
		]);
	}

	/**
	 * @return string[]
	 */
	public function buttons(): iterable{
		return $this->inner->buttons();
	}
}