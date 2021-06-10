<?php

trait hello{

	public function sayhello(){
		echo "hello everyone";
	}
}

class base{
	use hello;
}

$test = new base();

$test->sayhello();