<?php
class Employee{
	public $name;
	public $age;
	public $salary;

	function __contruct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}

	function info(){
		
		echo "<h3>Employee Info</h3>";
		echo "Employee name" . $this->name . "<br>";
		echo "Employee Age" . $this->age . "<br>";
		echo "Employee salary" . $this->salary . "<br>";
	}
}



$e1 = new Employee("humaun",32,11);


$e1->info();



