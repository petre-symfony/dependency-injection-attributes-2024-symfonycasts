<?php

namespace App\Remote\Button;

use App\Remote\RemoteInterface;
use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;
use Symfony\Component\DependencyInjection\Attribute\When;

#[AsTaggedItem('diagnostics')]
#[When('dev')]
class DiagnosticsButton implements ButtonInterface {
	public function press(): void {
		dump('Press diagnostics button.');
	}
}