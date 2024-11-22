<?php

namespace App\Remote;

use App\Remote\Button\ButtonInterface;
use Symfony\Component\DependencyInjection\Attribute\AutowireLocator;
use Symfony\Contracts\Service\ServiceCollectionInterface;

final class ButtonRemote {
	public function __construct(
		#[AutowireLocator(ButtonInterface::class, indexAttribute: 'keys')]
		private ServiceCollectionInterface $buttons
	) {
	}

	public function press(string $name): void {
		$this->buttons->get($name)->press();
	}

	/**
	 * @return string[]
	 */
	public function buttons(): array{
		return array_keys($this->buttons->getProvidedServices());
	}
}