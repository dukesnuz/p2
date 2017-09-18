<?php
//require ('../helpers.php');
$dishesJson = file_get_contents('./data/menu.json');

$dishes = json_decode($dishesJson, true);

// Set variables to not cause errors
$dishName='';
$dishNutrition='';
$maxCalories='';
$nutrition='';
$protein='';
$outputHeading ='';
$errorProtein = 'Optional';
$diet='';
$nonDiet='';
$beef='';
$chicken='';
$eggs='';
$pork='';

// check that form is filled in
if(empty($_GET['maxCalories']) || !filter_var($_GET['maxCalories'], FILTER_VALIDATE_INT)) {
  $errorCalories = 'Required. Please enter only numbers';
} else {
   $errorCalories = '';
   $maxCalories=$_GET['maxCalories'];
}

if(!isset($_GET['nutrition'])) {
  $errorNutrition = 'Required. Please select Diet or Non Diet.';
} else {
   $errorNutrition = '';
   $nutrition=$_GET['nutrition'];
}

if (isset($_GET['protein'])){
	$protein=$_GET['protein'];
}
// Save entered values to form
if($nutrition=='diet') {
    $diet = 'CHECKED';
}
if($nutrition=='nonDiet') {
	$nonDiet = 'CHECKED';
}
if ($protein =='beef') {
	$beef= 'SELECTED';
}
if ($protein =='chicken') {
	$chicken= 'SELECTED';
}
if ($protein =='eggs') {
	$eggs= 'SELECTED';
}
if ($protein =='pork') {
	$pork= 'SELECTED';
}

// Set variables to an empty string
//$dishName=$dishNutrition=$dishApetizer=$dishEntree=$dishDesert=$dishCalories='';

    //  for ($i=0;  $i < count($dishes); $i++) {
		  //echo $dishes["No Limit Ribs"]['nutrition'];

	//  }

	//foreach ($dishes as $key => $dish) {
		// set the variables
	//	$dishCalories=$dish['calories'];
	   // $dishNutrition=$dish['nutrition'];
		// check if a match
	//	if ($dishCalories <= $maxCalories && $nutrition == $dishNutrition) {
	  //      unset($dishes[$key]); // used in video use another code style
			//$dishName.=$key;
			//$dishNutrition.=$dish['nutrition'];
	       // $dishApetizer.=$dish['appetizer'];
	        //$dishEntree=$dish['entree'];
	        //$dishDesert.=$dish['desert'];
	       //$dishCalories=$dish['calories'];
		//}
//	}
 //  $outputHeading='You selected the folowing';
//} else {
	//$outputHeading = '';
//}
