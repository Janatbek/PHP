<?php 

class Car{
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;
	public function __construct($price, $speed, $fuel, $mileage){
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		if($price > 10000){
			$this->tax = 0.15;
		}
		else{
			$this->tax = 0.12;
		}
		$this->display_all();	
	}
	public function display_all(){
		echo "Price: " . $this->price . "<br>" . 
			 "Speed: " . $this->speed . "mph" .  "<br>" . 
			 "Fuel: " . $this->fuel . "<br>" .
			 "Mileage: " . $this->mileage . "mpg" . "<br>" . 
			 "Tax: " . $this->tax . "<br>";			 
	}

	
};

$audi = new Car(2000, 35, "Full", 15);
echo "<hr>";
$honda = new Car(2000, 5, "Not Full", 105);
echo "<hr>";
$toyota = new Car(2000, 15, "Full", 95);
echo "<hr>";
$chevrolet = new Car(2000, 25, "Empty", 25);
echo "<hr>";
$bmw = new Car(2000, 35, "Kind ofFull", 25);
echo "<hr>";
$bentley = new Car(2000000, 35, "Emptry", 45);


?>