<?php

class Base{

	public $name = "Parent Class";
}

class Derived extends Base{

	public $name = "Child class";
}

$test = new Derived();

echo $test->name;