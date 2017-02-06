<?php

require 'bucket.php';

class buckettest extends PHPUnit_Framework_TestCase
{
	public $bucketInstance;

	public function setUp()
	{
		$this->bucketInstance=new bucket();
	}

	public function testballs() {

		$this->bucketInstance->setBalls(100);

		$this->bucketInstance->eatBalls();

		$this->assertEquals(99, $this->bucketInstance->getBalls());
	}
}

?>
