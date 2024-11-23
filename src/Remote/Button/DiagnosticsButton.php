<?php

namespace App\Remote\Button;

use App\Remote\RemoteInterface;
use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('diagnostics')]
class DiagnosticsButton implements ButtonInterface {
	public function press(): void {
		dump('Press diagnostics button.');
	}
}