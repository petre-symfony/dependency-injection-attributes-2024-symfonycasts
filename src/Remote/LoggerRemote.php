<?php

namespace App\Remote;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\AsDecorator;

#[AsDecorator(ButtonRemote::class)]
class LoggerRemote implements RemoteInterface{
	public function __construct(
		private LoggerInterface $buttonLogger,
		private RemoteInterface $inner
	) {
	}

	public function press(string $name): void {
		$this->buttonLogger->info('Pressing button {name}', [
			'name' => $name
		]);

		$this->inner->press($name);
		
		$this->buttonLogger->info('Pressed button {name}', [
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