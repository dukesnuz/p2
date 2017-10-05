<?php
namespace DWA;

class Email
{
	// Properties
	private $recipient;

    // Methods
	public function __contruct($recipient)
	{
		$this->recipient = $recipient;
	}

	public function send($subject, $message) {
	    return mail($this->recipient, $subject, $message);
	}

} //END class
