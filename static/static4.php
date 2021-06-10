<?php

class Base{

	public static $name = "yahoo";

	public static function show(){
		echo self::$name;
	}

	public function __construct($n){
		self::$name = $n;
	}
}

$test = new Base("tausif");

$test->show();

//echo Base::$name;

//Base::show();