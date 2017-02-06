<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
require 'Bucket.php';

final class BucketTest extends TestCase
{
	public $BucketInstance;

	public function setUp()
	{
		$this->BucketInstance=new Bucket();
	}

	public function tearDown()
	{
		unset($this->instance);
	}

	public function testBalls() {

		$this->BucketInstance->setBalls(100);

		$this->BucketInstance->eatBalls();

		$this->assertEquals(10, $this->BucketInstance->getBalls());
	}
}

?>
