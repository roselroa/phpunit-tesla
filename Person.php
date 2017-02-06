<?php
declare(strict_types=1);

class Person {

	private $fname,$lname;

	public function setFname($txt) {
		$this->fname=$txt;
	}

	public function setLname($txt) {
		$this->lname=$txt;
	}

	public function fullName() {
		return $this->fname . $this->lname;
	}

}

?>
