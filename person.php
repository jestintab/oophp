<?php

Class Person{

	public $age;
	public $name;

	public function __construct($name,$age){
		//echo 'Constructed';
		$this->name= $name;

		$this->age= $age;
	}

	public function sentence(){
		return $this->name . ' is '. $this->age. ' years old.';
	}
}