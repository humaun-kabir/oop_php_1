<?php


class Base{
	private $name;

	public function __construct($n){
		$this->name = $n;
	}

	protected function show(){
		echo "your name : " . $this->name ."<br>";
	}
}

class Derived extends Base{
	public function get(){
		echo "your name :" . $this->name . "<br>";
	}
}

$test = new Derived("tausif");

//$test->name = "humaun";

$test->get();