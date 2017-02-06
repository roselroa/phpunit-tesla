<?php

class bucket {

	private balls;

	public function getBalls() {
		return $this->getBalls;
	}

	public function setBalls($count) {
		$this->balls=$count;
	}

	public function eatBalls() {
		$this->setBalls($this->getBalls()-1);
	}
}

?>
