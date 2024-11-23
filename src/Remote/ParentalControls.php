<?php

namespace App\Remote;

use Symfony\Component\DependencyInjection\Attribute\Lazy;
use Symfony\Component\Mailer\MailerInterface;

#[Lazy]
final class ParentalControls {
	public function __construct(
		private MailerInterface $mailer
	) {
	}

	public function volumeTooHigh(): void {
		dump('send volume alert email');
	}
}