<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Project 1 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu accoring to the user selections.
//==============================================================
// import the p1.contoller.php script
// include causing error on live server
include ('./logic/p2Logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Project 2 | HES | Dwa</title>

    <meta charset="UTF-8">
    <meta name="description" content="HES - Dynamic Web Applications - Project Two">
    <meta name="keywords" content="html, css, php">
    <meta name="author" content="David Petringa">

    <link rel="shortcut icon" href="http://www.dukesnuz.com/images/favicon.ico">
    <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
    <link rel = "stylesheet" href = "./css/p2.css?p=1234"/>

</head>
<body>

    <div id ="wrapper">
        <header class="banner">
            <h1>HES - Dynamic Web Applications - Project 2</h1>
            <h2>What's For Dinner?</h2>
        </header>

        <section class="content">

            <header>
                <h3>Select your preferences.</h3>
            </header>

            <form action ="/" method="get">
                <p>
                    <label for="maxCalories">Max Calories</label>
                    <input type="text" id="maxCalories" name="maxCalories" id="maxCalories" value="<?=$maxCalories?>">
                    <span class="error"><?=$errorCalories?></span>
                </p>
                <fieldset>
                    <p>
                        <label for="nutrition"><input type="radio" name="nutrition" id="nutrition" value="diet" <?php if(isset($_GET['nutrition'])=='diet') echo "CHECKED"?>>Diet</label>
                    </p>
                    <p>
                        <label for="nutrition"><input type="radio" name="nutrition" id="nutrition" value="nonDiet" <?php if(isset($_GET['nutrition'])=='nonDiet') echo "CHECKED"?>>Non Diet</label>
                        <span class="error"><?=$errorNutrition?></span>
                    </p>
                </fieldset>
                <p>
                    <label for="protein">Select a Protein</label>
                        <select name="protein">
                            <option value="select">Select a Protein</option>
                            <option value="eggs" <?php if ($protein == 'eggs') echo 'selected' ?>>Eggs</option>
                            <option value="pork" <?php if ($protein == 'pork') echo 'selected' ?>>Pork</option>
                            <option value="chicken" <?php if ($protein == 'chicken') echo 'selected' ?>>Chicken</option>
                        </select>
                        <span class="error"><?=$errorProtein?></span>
                    </p>
                    <p>
                        <button type="submit">Select your dinner</button>
                    </p>
                    <form>

                    </section>

                    <section class="output">
                        <header><h3><?=$outputHeading?></h3>
                            <ul>
                                <li><?php echo $dishName; ?></li>
                                <li><?php echo $dishNutrition; ?></li>
                            </ul>
                        </section>

                        <footer>

                            <ul>
                                <li>School: Harvard Extension</li>
                                <li>Class: Dynamic Web Applications</li>
                                <li>Assignment: Project two</li>
                                <li>Student: David Petringa</li>
                                <li>Coded: September 2017</li>
                            </ul>

                        </footer>
                    </div><!--END wrapper div-->

                </body>
                </html>
