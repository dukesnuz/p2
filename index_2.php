<?php
//=============================================================
// script - index.php
// Class - HES - Dynamic Web Applications - Project 2 - Fall 2017
// Student: David Petringa
// Susan, Thank you for checking my work.
// This app will pick a dinner menu according to the user selections.
// Version 2 has most php logic in logic display
//==============================================================
// import the p1.contoller.php script
include ('./logic/p2Logic_2.php');
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

			<form action ="./index_2.php" method="get">
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

		<section class="<?=$outputClass?>">
			<header>
				<h3>We Found These Tasty Dishes For You.</h3>
			</header>
			<?php foreach ($dishes as $key => $dish) :?>
				<?php if ($dishes[$key]['calories'] <= $maxCalories && $nutrition == $dishes[$key]['nutrition']): ?>
					<ul class="dishDisplayed">
						<li><strong><?=$key?></strong></li>
						<li><strong>Nutrition:</strong> <?=$dishes[$key]['nutrition']?></li>
						<li><strong>Appetizer:</strong> <?=$dishes[$key]['appetizer']?></li>
						<li><strong>Entree:</strong></li>
						<li>
							<ul>
								<?php foreach ($dishes[$key]['entree'] as $item): ?>
									<li><?=$item?></li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li><strong>Desert:</strong> <?=$dishes[$key]['desert']?></li>
						<li><strong>Calories:</strong> <?=$dishes[$key]['calories']?></li>
					</ul>
				<?php endif; ?>
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
