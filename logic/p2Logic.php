<?php
require ('../helpers.php');
$dishesJson = file_get_contents('./data/menu.json');

$dishes = json_decode($dishesJson, true);

if (isset($_GET['maxCalories']) && isset($_GET['nutrition'])) {
	foreach ($dishes as $dish) {
		$maxCalories=$_GET['maxCalories'];
		$dishCalories=$dish['calories'];
		$dishNutrition=$dish['nutrition'];
		$nutrition=$_GET['nutrition'];
        $match = '';
		if ($maxCalories >= $dishCalories && $nutrition == $dishNutrition ){
			echo $match;
		}
	}
} else {
	echo 'please enter';
}
