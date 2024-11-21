<?php

namespace App\Remote;

use App\Remote\Button\ButtonInterface;
use Symfony\Component\DependencyInjection\Attribute\AutowireIterator;

final class ButtonRemote {
	public function __construct(
		#[AutowireIterator(ButtonInterface::class)]
		private iterable $buttons
	) {
	}

	public function press(string $name): void {
		$this->buttons->get($name)->press();
	}

	/**
	 * @return string[]
	 */
	public function buttons(): array{
		$buttons = [];
		foreach ($this->buttons as $name => $button) {
			$buttons[] = $name;
		}
		return $buttons;
	}
}