<?php
require ('../helpers.php');
$dishesJson = file_get_contents('./data/menu.json');

$dishes = json_decode($dishesJson, true);

$output='';
$maxCalories='';
$nutrition='';
$protein='';
$outputHeading ='';

// Set variables to an empty string
$dishName=$dishNutrition=$dishApetizer=$dishEntree=$dishDesert=$dishCalories='';

if (isset($_GET['maxCalories']) && isset($_GET['nutrition'])) {
	// set variables
	$maxCalories=$_GET['maxCalories'];
	$nutrition=$_GET['nutrition'];
	$protein=$_GET['protein'];

      for ($i=0;  $i < count($dishes); $i++) {
		  //echo $dishes["No Limit Ribs"]['nutrition'];

	  }

	//foreach ($dishes as $key => $dish) {
		// set the variables
	//	$dishCalories=$dish['calories'];
	   // $dishNutrition=$dish['nutrition'];
		// check if a match
	//	if ($dishCalories <= $maxCalories && $nutrition == $dishNutrition) {
			//$dishName.=$key;
			//$dishNutrition.=$dish['nutrition'];
	       // $dishApetizer.=$dish['appetizer'];
	        //$dishEntree=$dish['entree'];
	        //$dishDesert.=$dish['desert'];
	       //$dishCalories=$dish['calories'];
		//}
//	}
   $outputHeading='You selected the folowing';
} else {
	$output = '';
}
