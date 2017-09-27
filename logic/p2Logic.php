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
use DWA\Form;

// Create new menu object and retrieve data from JSON file
$menu = new Menu('./data/menu.json');
// Create new form object
$form = new Form($_GET);

// Set variables to empty string
$maxCalories=$nutrition=$diet=$nonDiet=$protein=$beef=$chicken=$eggs=$fish=$pork='';
//$errorMaxcalories = 'true';
$outputClass='outputHide';


// Set value in fields
if (isset($_GET['maxCalories'])) {
    $maxCalories=sanitize($_GET['maxCalories']);
}
if(isset($_GET['nutrition'])) {
    $nutrition=sanitize($_GET['nutrition']);
}
if (isset($_GET['protein'])) {
    $protein=sanitize($_GET['protein']);
}

// Save entered values to form
if($nutrition=='diet') {
    $diet='CHECKED';
}
if($nutrition=='nonDiet') {
    $nonDiet='CHECKED';
}
if ($protein =='beef') {
    $beef='SELECTED';
}
if ($protein=='chicken') {
    $chicken='SELECTED';
}
if ($protein=='eggs') {
    $eggs='SELECTED';
}
if ($protein=='fish') {
    $fish='SELECTED';
}
if ($protein=='pork') {
    $pork='SELECTED';
}

// Validate form data and display results
if ($form->isSubmitted()) {
    $errorMaxcalories = false;
    $errors = $form->validate([
        'maxCalories' => 'required',
        'maxCalories' => 'numeric',
        'nutrition' => 'required'
    ]);
    foreach ($errors as $error) {
        if ($error == 'The field maxCalories can only contain numbers') {
            $errorMaxcalories = true;
            break;
        } //End if
    } // END foreach
    // Show hide results section

    if (!empty($errors) || $protein == 'select') {
        $outputClass='outputHide';
    } else {
        $outputClass='outputDisplay';
    }
} // END if ($form-isSubmitted)

// Call getDish method passing in 3 parameters
$foundDishes = $menu->getDish($maxCalories, $nutrition, $protein);
