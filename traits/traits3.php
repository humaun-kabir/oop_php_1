<?php
// using multiple traits

trait hello{

	public function sayhello(){
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
$test->saybye();
echo "<br>";
$test->sayhello();