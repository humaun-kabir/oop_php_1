<?php

class Base{

	public static $name = "yahoo";

	public function show(){
		echo self::$name;
	}
}

echo Base::$name;