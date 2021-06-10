<?php
class base{

	protected static $name = "yahoo";

	public function show(){
		echo static::$name;
	}
}

class derived extends base{

	protected static $name = "baba";
}

$test = new derived();

$test->show();

//output - baba.
//when we use static:: then it shows derived classes properties.