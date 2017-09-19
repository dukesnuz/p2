<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Project 2 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu accoring to the user selections.
//==============================================================
// import the p1.contoller.php script
include ('./logic/p2Logic.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Project 2 | HES | DWA</title>

    <meta charset="UTF-8">
    <meta name="description" content="HES - Dynamic Web Applications - Project Two">
    <meta name="keywords" content="html, css, php">
    <meta name="author" content="David Petringa">

    <link rel="shortcut icon" href="http://www.dukesnuz.com/images/favicon.ico">
    <link rel = "stylesheet" href = "http://www.dukesnuz.com/css_libs/dukes_normalize.css"/>
    <link rel = "stylesheet" href = "./css/p2.css"/>

</head>
<body>

    <div id ="wrapper">
        <header class="banner">
            <h1>HES - Dynamic Web Applications - Project 2</h1>
            <h2>What's For Dinner?</h2>
        </header>

        <section class="content">

            <header>
                <h3>Select your preferences</h3>
            </header>

            <form action ="/" method="get">
                <p>
                    <label for="maxCalories">Max Calories</label>
                    <input type="text" id="maxCalories" name="maxCalories" value="<?=$maxCalories?>">
                    <span class="error"><?=$errorCalories?></span>
                </p>
                <fieldset>
                    <p>
                        <label><input type="radio" name="nutrition" value="diet" <?=$diet?>>Diet</label>
                    </p>
                    <p>
                        <label><input type="radio" name="nutrition" value="nonDiet" <?=$nonDiet?>>Non Diet</label>
                    </p>
                    <span class="error"><?=$errorNutrition?></span>
                </fieldset>
                <p>
                    <label>Select a Protein</label>
                    <select name="protein">
                        <option value="select">Select a Protein</option>
                        <option value="beef" <?=$beef?>>Beef</option>
                        <option value="chicken" <?=$chicken?>>Chicken</option>
                        <option value="eggs" <?=$eggs?>>Eggs</option>
                        <option value="pork" <?=$pork?>>Pork</option>
                    </select>
                    <span class="error"><?=$errorProtein?></span>
                </p>
                <p>
                    <button type="submit">Select your dinner</button>
                </p>
            </form>

        </section>

        <section class="output">
            <header>
                <h3><?=$outputHeading?></h3>
            </header>
            <ul>
                <?php foreach ($dishes as $key => $dish) :?>
                    <?php if ($dishes[$key]['calories'] <= $maxCalories && $nutrition == $dishes[$key]['nutrition']): ?>
                        <li><?=$key?></li>
                        <li><?=$dishes[$key]['nutrition']?></li>
                        <li><?=$dishes[$key]['appetizer']?></li>
                        <?php foreach ($dishes[$key]['entree'] as $item): ?>
                            <ul>
                                <li><?=$item?></li>
                            </ul>
                        <?php endforeach; ?>
                        <li><?=$dishes[$key]['desert']?></li>
                        <li><?=$dishes[$key]['calories']?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
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
