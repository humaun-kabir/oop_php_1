<?php

class Base{
	public $name;

	public function __construct($n){
		$this->name = $n;
	}

	public function show(){
		echo "your name : " . $this->name ."<br>";
	}
}

$test = new Base("tausif");

$test->name = "humaun";

$test->show();