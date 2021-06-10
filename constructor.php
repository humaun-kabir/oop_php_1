<?php

class Person{
	public $name;
	public $age;
	public $id;

	function __construct($n = "sazzad",$a=30,$i=10){
		$this->name = $n;
		$this->age = $a;
		$this->id = $i;
	}

	function show(){
		echo $this->name . " - " . $this->age . " - " . $this->id . "<br>";
	}
}

$p1 = new Person();
$p2 = new Person("Humaun",32,11);
$p3 = new Person("tausif",27,16);

$p1->show();
$p2->show();
$p3->show();
