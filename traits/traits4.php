<?php

//multiple traits & multiple function

trait hello{

	public function sayhello(){
		echo "say hello";	}
	public function sayhi(){
		echo "say hello";	}
} 

trait bye{

	public function saybye(){
		echo "bye bye everyone";
	}
}

class base{
	use hello,bye;
}

class base2{
	use hello;
}

$test = new base();
$test->sayhello();
echo "<br>";
$test->saybye();
echo "<br>";
$test->sayhi();
