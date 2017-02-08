<?php

class Bucket {

	private $balls;

	public function getBalls() {
		return $this->balls;
	}

	public function setBalls($count) {
		$this->balls=$count;
	}

	public function eatBalls() {
		$this->setBalls($this->getBalls()-1);
	}
}

?>
