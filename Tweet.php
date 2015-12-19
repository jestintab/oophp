<?php

class Tweet{
	private $id;  
	protected  $text;

	public function __construct($id,$text){
		$this->id= $id;
		$this->text= $text;
	}
	public function  __isset($property)
	{
	  return isset($this->$property);
	  //echo " ss";
	}
public function __get($property){
	 if(property_exists($this, $property)){
	 	echo $this->text ;
	 }
	 	//echo $this->text ;

	}

	public function tweeting(){

		echo $this->id . '. <i> tweet </i>'.$this->text;
	}

	public function __set($property, $value)
		{
		  if (property_exists($this, $property)) {
		    $this->$property = $value;
		  }
		}
	

}