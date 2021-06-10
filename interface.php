<?php

interface parent1{

	function calc($a,$b);
}

interface parent2{

	function sub($a,$b);
}

class childClass implements parent1,parent2
{
	
	public function calc($a,$b)
	{
		echo $a + $b;
	}

	public function sub($c,$d)
	{
		echo $c - $d;
	}
}

$test = new childClass();

$test->calc(10,20);
echo "<br>";
$test->sub(30,20);