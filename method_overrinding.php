<?php

class Base{

	public $name = "Parent Class";

	public function calc($a,$b){
		return $a * $b;
	}

}

class Derived extends Base{

	public $name = "Child class";

	public function calc($a,$b){
		return $a + $b;
	}
}

//$test = new Derived();
$test = new Base();

echo $test->calc(10,20);