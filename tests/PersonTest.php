<?php

use PHPUnit\Framework\TestCase;
require 'Person.php';

final class PersonTest extends TestCase
{
	public $PersonInstance;

	public function setUp()
	{
		$this->PersonInstance=new Person();
	}

	public function tearDown()
	{
		unset($this->instance);
	}

	public function testPerson() {

		$fname='FirstName';
		$lname='LastName';
		$fullname=$fname.$lname;
		$this->PersonInstance->setFname($fname);
		$this->PersonInstance->setLname($lname);
		$this->assertEquals($fullname,$this->PersonInstance->fullName());
	}
}

?>
