<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Project 2 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu according to the user selections.
// Version 1 has most php logic in logic script
//==============================================================

// import the p1.contoller.php script
//  version 1 less php in display file - more logic in logic script
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
    <link rel = "stylesheet" href = "./css/p2.css?c=123"/>

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
                        <option value="eggs" <?=$fish?>>Fish</option>
                        <option value="pork" <?=$pork?>>Pork</option>
                    </select>
                    <span class="error"><?=$errorProtein?></span>
                </p>
                <p>
                    <button type="submit">Select your dinner</button>
                </p>
            </form>

        </section>

        <section class="<?=$outputClass?>">
            <header>
                <?php if (count($foundDishes) > 0) : ?>
                    <h3>We Found These Tasty Dishes For You.</h3>
                    <ul>
                        <li><strong>Your calorie selection:</strong> <?=$maxCalories?></li>
                        <li><strong>Your diet selection:</strong> <?php echo ($diet == "CHECKED")?  'Diet':  'Not diet';?></li>
                        <li><strong>Your protein selection:</strong> <?=$protein?></li>
                    </ul>
                <?php else : ?>
                    <h3>We did not find any tasty dishes. Please try again.</h3>
                    <ul>
                        <li><strong>Your calories selection:</strong> <?=$maxCalories?></li>
                        <li><strong>Your diet selection:</strong> <?php echo ($diet == "CHECKED")?  'Diet':  'Not diet';?></li>
                        <li><strong>Your protein selection:</strong> <?=$protein?></li>
                    </ul>
                <?php endif; ?>
            </header>

            <?php foreach ($foundDishes as $key => $item) : ?>
                <ul class="dishDisplayed">
                    <li><strong><?=$key?></strong></li>
                    <li><strong>Nutrition: </strong><?=$foundDishes[$key]['nutrition']?></li>
                    <li><strong>Appetizer: </strong><?=$foundDishes[$key]['appetizer']?></li>
                    <li><strong>Entree:</strong>
                        <ul>
                            <?php foreach ($foundDishes[$key]['entree'] as $entreeItem) :?>
                                <li><?=$entreeItem?></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><strong>Desert: </strong><?=$foundDishes[$key]['desert']?></li>
                    <li><strong>Calories: </strong><?=$foundDishes[$key]['calories']?></li>
                </ul>
            <?php endforeach; ?>

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
