<?php

namespace PhpunitDemo;

class User {
	private $firstName;

	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}
	public function getFirstName() {
		return $this->firstName;
	}

}