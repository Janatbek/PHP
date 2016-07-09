<?php 
session_start();
if(isset($_SESSION['lana'])){
	
	if(isset($_POST['farm'])){
	$_SESSION['lana'] += rand(10,20);
	}
	
	else if(isset($_POST['cave'])){
	$_SESSION['lana'] += rand(5,10);
	}

	else if(isset($_POST['house'])){
	$_SESSION['lana'] += rand(2,5);
 	}
	
	else if(isset($_POST['casino'])){
		$casino=rand(0,1);
		if($casino===0){
			$_SESSION['lana'] -=rand(0,50);
		}
		else{
			$_SESSION['lana'] +=rand(0,50);
		}
	}
}





header('Location: ninja.php');
exit();



?>