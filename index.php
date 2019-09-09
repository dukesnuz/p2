<?php
//=============================================================
// Script - index.php
// Class - HES - Dynamic Web Applications - Project 2 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu according to the user selections.
//==============================================================

// Import the p2Logic.php logic script
include('./logic/p2Logic.php');
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

      <!--User input form-->
      <form action ="/" method="get">
        <p>
          <label for="maxCalories">Max Calories</label>
          <input type="text" id="maxCalories" name="maxCalories" value="<?=$maxCalories?>">
          <span class="error">
            <?php if (!isset($errorMaxcalories) || $errorMaxcalories == true) : ?>
              Required Numbers only.
            <?php else : ?>
              &nbsp;
            <?php endif; ?>
          </span>
        </p>
        <fieldset>
          <p>
            <label><input type="radio" name="nutrition" value="diet" <?=$diet?>>Diet</label>
          </p>
          <p>
            <label><input type="radio" name="nutrition" value="nonDiet" <?=$nonDiet?>>Non Diet</label>
          </p>
          <span class="error"><?php echo (!$form->get('nutrition'))? 'Required' : '' ;?></span>
        </fieldset>
        <p>
          <label for="protein">Select a Protein</label>
          <select name="protein" id="protein">
            <option value="select">Select a Protein</option>
            <option value="beef" <?=$beef?>>Beef</option>
            <option value="chicken" <?=$chicken?>>Chicken</option>
            <option value="eggs" <?=$eggs?>>Eggs</option>
            <option value="fish" <?=$fish?>>Fish</option>
            <option value="pork" <?=$pork?>>Pork</option>
          </select>
          <span class="error"><?php echo (!$form->get('protein') || $form->get('protein') == 'select' || $form->get('protein' == null))? 'Required' : '' ;?></span>
        </p>
        <p>
          <button type="submit">Select your dinner</button>
        </p>
      </form>

    </section>

    <!--Show user input or message if no data found-->
    <section class="<?=$outputClass?>">

      <header>
        <?php if (count($foundDishes) > 0) : ?>
          <h3>We Found These Tasty Dishes For You.</h3>
          <ul>
            <li><strong>Your calorie selection:</strong><?=$maxCalories?></li>
            <li><strong>Your diet selection:</strong><?php echo ($diet == "CHECKED")? 'Diet': 'Not diet' ;?></li>
            <li><strong>Your protein selection:</strong><?=ucfirst($protein)?></li>
          </ul>
        <?php else : ?>
          <h3>We did not find any tasty dishes. Please try again.</h3>
          <ul>
            <li><strong>Your calories selection:</strong><?=$maxCalories?></li>
            <li><strong>Your diet selection:</strong><?=($diet == "CHECKED")? 'Diet': 'Not diet'?></li>
            <li><strong>Your protein selection:</strong><?=$protein?></li>
          </ul>
        <?php endif; ?>
      </header>

      <!-- Display found data-->
      <?php foreach ($foundDishes as $key => $item) : ?>
        <ul class="dishDisplayed">
          <li><strong><?=$key?></strong></li>
          <li><strong>Nutrition: </strong><?=($foundDishes[$key]['nutrition'] == "diet")? 'Diet': 'Not diet'?></li>
          <li><strong>Appetizer: </strong><?=$foundDishes[$key]['appetizer']?></li>
          <li><strong>Entree:</strong>
            <ul>
              <?php foreach ($foundDishes[$key]['entree'] as $entreeItem) : ?>
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
        <li><a href="http://dukesnuz.com/self-study-courses/courses-menu/dukesnuz-david-petringa#e-15">
          Student: David Petringa</a></li>
        <li>Coded: September 2017</li>
      </ul>

    </footer>

  </div><!--END wrapper div-->
  <!-- Default Statcounter code for Harvard Extension DWA
  http://http//www.dukesnuz.com -->
  <script type="text/javascript">
  var sc_project=11889370;
  var sc_invisible=1;
  var sc_security="6ab59e53";
  </script>
  <script type="text/javascript"
  src="https://www.statcounter.com/counter/counter.js"
  async></script>
  <noscript><div class="statcounter"><a title="Web Analytics"
    href="http://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="//c.statcounter.com/11889370/0/6ab59e53/1/" alt="Web
    Analytics"></a></div></noscript>
    <!-- End of Statcounter Code -->
  </body>
  </html>
