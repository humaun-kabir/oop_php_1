<?php

class Base{

	public static $name = "yahoo";

	}

class Derived extends Base{

	public static function show(){
		echo parent::$name;
	}
}

$test = new Derived();

$test->show();