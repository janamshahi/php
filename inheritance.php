<?php
	class employee
	{
		public $name,$address,$salary;
		public function __construct($n,$a,$s)
		{
			$this->name = $n;
			$this->address = $a;
			$this->salary = $s;
		}
		public function getempl()
		{
			echo "<h2>employee detail</h2>";
			echo "employee name:"".$this->name.<br>";
			echo "employee address:"".$this->address.<br>";
			echo "employee salary:"".$this->salary.<br>";

		}
	}
	class manager extends employee
	{
		public $ta=1000,$phone=1500,pet=1600,$total=
	}
	