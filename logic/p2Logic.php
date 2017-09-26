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
require('./libraries/Form.php');
use David\Menu;
use DWA \Form;

// Create new menu object and retrieve data from JSON file
$menu = new Menu('./data/menu.json');
// Create new form object
$form = new Form($_GET);

// Set variables
$maxCalories=$nutrition=$diet=$nonDiet=$protein=$beef=$chicken=$eggs=$fish=$pork='';
$errorMaxcalories = 'false';
$outputClass='outputHide';

// validate
if ($form->isSubmitted()) {
    $errors = $form->validate([
        'maxCalories' => 'required',
        'maxCalories' => 'numeric',
        'nutrition' => 'required'
    ]);
    // Loop through errors to see if error in maxCalories field
    for ($i = 0 ; $i < count($errors); $i++){
        if($errors[$i] == "The field maxCalories can only contain numbers") {
            $errorMaxcalories = true;
            break;
        } else {
            $errorMaxcalories = false;
        }
    }
}

if (isset($_GET['maxCalories'])) {
    $maxCalories=sanitize($_GET['maxCalories']);
}

if(isset($_GET['nutrition'])) {
    $nutrition=sanitize($_GET['nutrition']);
    $outputClass='outputDisplay';
}

if (isset($_GET['protein']) && $_GET['protein'] !='select'){
    $protein=sanitize($_GET['protein']);
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

// Call getDish method passing in 3 parameters
$foundDishes = $menu->getDish($maxCalories, $nutrition, $protein);
