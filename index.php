<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Project 1 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu accoring to the user selections.
//==============================================================
// import the p1.contoller.php script
include ('./logic/p2Logic.php');
// set page title. Wanted to demonstrate an if else statement and variable
$title = 'Project 2 | David Petringa';
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>
        <?php if (isset($title)){
				echo $title;
			} else {
				echo 'Project 2';
			} ?>
        </title>

        <meta charset="UTF-8">
        <meta name="description" content="HES - Dynamic Web Applications - Project Two">
        <meta name="keywords" content="html, css, php">
        <meta name="author" content="David Petringa">

        <link rel="shortcut icon" href="http://www.dukesnuz.com/images/favicon.ico">
        <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
        <link rel = "stylesheet" href = "./css/p2.css"/>

    </head>
    <body>

        <header class="banner">
            <h1>What Is For Dinner</h1>
        </header>

        <div id ="wrapper">
            <section class="content">

                <header>
                  <h2>Select your preferences.</h2>
                </header>

				<form action ="/" method="get">
					<ul>
						<li>
							<label for="maxCalories">Max Calories</label>
							<input type="text" id="maxCalories" name="maxCalories" value="">
						</li>
						<li>
							<label><input type="radio" name="nutrition" value="diet">Diet</label>
							<label><input type="radio" name="nutrition" value="nonDiet">Non Diet</label>
						</li>
						<li>
							<label for="protein">Select a Protein</lable>
								<select name="protein">
									<option value="select">Select a Protein</option>
									<option value="eggs">Eggs</option>
									<option value="pork">Pork</option>
									<option value="chicken">Chicken</option>
								</select>
						</li>
							<button type="submit">Select your dinner</button>
						</li>
					</ul>
				<form>

            </section>

			<section>
				<header><h3>You selected the folowing</h3>
					<?=$match?>
        </div><!--END wrapper div-->

        <footer>

          <ul>
            <li>School: Harvard Extension</li>
            <li>Class: Dynamic Web Applications</li>
            <li>Assignment: Project two</li>
            <li>Student: David Petringa</li>
            <li>Coded: September 2017</li>
          </ul>

        </footer>

    </body>
</html>
