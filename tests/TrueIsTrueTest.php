<?php
 use phpunitdemo\User;
 use PHPUnit\Framework\TestCase;

 class TrueIsTrueTest extends TestCase {
 	private $user;
	public function test_TrueAssertsToTrue() {
		$this->assertTrue(true);
	}

	public function test_GivenSetFirstName_ReturnCorrectFirstName() {
		$user = new User();
		$user->setFirstName('Senthil');
		$this->assertEquals('Senthil',$user->getFirstName());
	}
}