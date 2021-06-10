<?php

class Base{

	public static $name = "yahoo";

	public static function show(){
		echo self::$name;
	}
}

echo Base::$name;

Base::show();