<?php

namespace App\Remote;

use Symfony\Component\Mailer\MailerInterface;

final class ParentalControls {
	public function __construct(
		private MailerInterface $mailer
	) {
	}

	public function volumeTooHigh(): void {
		dump('send volume alert email');
	}
}