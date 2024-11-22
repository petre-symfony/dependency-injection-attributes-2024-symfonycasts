<?php

namespace App\Remote\Button;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('mute')]
class MuteButton implements ButtonInterface {

	public function press(): void {
		dump('Mute button pressed');
	}
}