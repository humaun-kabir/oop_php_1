<?php
class base{

	protected static $name = "yahoo";

	public function show(){
		echo static::$name;
		echo self::$name;
	}
}

class derived extends base{

	protected static $name = "baba";
}

$test = new derived();

$test->show();

//output - baba yahoo
//static::$name output baba and self::$name output yahoo.