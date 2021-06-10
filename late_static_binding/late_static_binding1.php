<?php
class base{

	protected static $name = "yahoo";

	public function show(){
		echo self::$name;
	}
}

class derived extends base{

	protected static $name = "baba";
}

$test = new derived();

$test->show();

//output - yahoo
//i have created derived classes object bt not showing output of derived classes properties. we will be learn in next file how to access derived classes properties.