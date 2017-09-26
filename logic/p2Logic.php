<?php
/*=================================================
// script - p2Logic.php
// Class - HES - Dynamic Web Applications - Project 2 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu according to the user selections.
================================================*/
require('./logic/helpers.php');
require('./libraries/Menu.php');
use David\ClassName;

// Get data from JSON file
//$dishesJson = file_get_contents('./data/menu.json');
//$dishes = json_decode($dishesJson, true);
// Set variables in order to not cause errors
$maxCalories=$nutrition=$diet=$nonDiet=$protein=$beef=$chicken=$eggs=$fish=$pork='';
$outputClass='outputHide';
// Check that form is filled in
if(empty($_GET['maxCalories']) || !filter_var($_GET['maxCalories'], FILTER_VALIDATE_INT)) {
    $errorCalories = 'Required. Please enter only numbers';
} else {
    $errorCalories = '';
    $maxCalories=sanitize($_GET['maxCalories']);
}
if(!isset($_GET['nutrition'])) {
    $errorNutrition = 'Required. Please select Diet or Non Diet.';
} else {
    $errorNutrition = '';
    $nutrition=sanitize($_GET['nutrition']);
    $outputClass='outputDisplay';
}
if (isset($_GET['protein']) && $_GET['protein'] !='select'){
    $protein=sanitize($_GET['protein']);
    $errorProtein ='';
} else {
    $errorProtein='Required. Please select a protein.';
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
if ($protein =='fish') {
    $fish= 'SELECTED';
}
if ($protein =='pork') {
    $pork= 'SELECTED';
}
// Add matched dishes to an array
/*
$foundDishes = [];
foreach ($dishes as $key => $dish) {
    if ($dishes[$key]['calories'] <= $maxCalories && $nutrition == $dishes[$key]['nutrition'] && $protein == $dishes[$key]['protein']) {
        $foundDishes[$key] = $dish;
    }
}
*/

$d = new ClassName('./data/menu.json');
$foundDishes = $d->getDish($maxCalories);
