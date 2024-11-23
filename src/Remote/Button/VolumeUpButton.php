<?php

namespace App\Remote\Button;

use App\Remote\ParentalControls;
use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('volume-up', priority: 20)]
final class VolumeUpButton implements ButtonInterface {
	public function __construct(
		private ParentalControls $parentalControls
	) {
	}

	public function press(): void {
		if (false) {
			//determine the volume is too high
			$this->parentalControls->volumeTooHigh();
		}

		dump($this->parentalControls);
		
		dump('Change the volume up');
	}
}
