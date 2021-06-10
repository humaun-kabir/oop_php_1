<?php

class Base{

	public static $name = "yahoo";

	public static function show(){
		echo self::$name;
	}

	public function __construct(){
		self::show();
	}
}

$test = new Base();

$test->show();

//echo Base::$name;

//Base::show();