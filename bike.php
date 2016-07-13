<?php 

class Bike{
	public $price;
	public $max_speed;
	public $miles;
	public function __construct($price,$speed){
		$this->price = $price;
		$this->max_speed = $speed;
		$this->miles = 0;
		return $this;	

	}
	public function displayInfo(){
		echo $this->price . "<br>";
		echo $this->max_speed . "<br>";

		if($this->miles < 0){
			$this->miles = 0;
			echo $this->miles;
			return $this;
		}else{
			echo $this->miles . "<br>";
			return $this;
		}	
		
		return $this;
	}
	public function drive(){
		echo "Driving<br>";
		$this->miles+=10;
		return $this;
	}
	public function reverse(){
		echo "Reversing<br>";
		$this->miles-=5;
		return $this;
		
	}	
};

$mongoose = new Bike(1050,100);
$mongoose->drive()->drive()->drive()->reverse()->displayInfo();
echo "<hr>";

//===========================
$mercedes = new Bike(2000, 90);
$mercedes->drive()->drive()->reverse()->reverse()->displayInfo();
echo "<hr>";

//==========================
$shwain = new Bike(3000, 125);
$shwain->reverse()->reverse()->reverse()->displayInfo();


?>