<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>5 3 1 | Sluggern</title>
	<meta name="description" content="">
	<meta name="author" content="Björn-Eric">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css?v=1.0">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

	<?php 
	  define( 'ROOT_DIR', dirname(__FILE__) );
	  include(ROOT_DIR.'/includes/functions.php');

	  $currentURL = $_SERVER['REQUEST_URI'];

		$pressRM = $_GET['pressRM'];
		$deadliftRM = $_GET['deadliftRM'];
		$benchRM = $_GET['benchRM'];
		$squatRM = $_GET['squatRM'];

	  // Se if we should Edmar
		if ( isset ($_GET['Edmar']) ) {
				$Edmar = 'Yes';
			} else {
				$Edmar = 'No';
			} 
	?> 


<body>
	<header>
		<h1>5 3 1</h1>
		<h2 class="heading-athlete-name"><?php echo $_GET["name"]; ?></h2>
		<a href="<?php echo $currentURL ?>">Bookmark this program</a>
	</header>


<!------------------ WAVE 1 ---------------->
<article class="wave-1">
	<div class="heading">
		<h3 class="heading-wave">Wave 1</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
			calculateWave( $pressRM, 1, 65, 75, 86 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-bench.php';
			} else {
				include ROOT_DIR.'/includes/assistance-press.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
			calculateWave( $deadliftRM, 1, 65, 75, 86 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-squat.php';
			} else {
				include ROOT_DIR.'/includes/assistance-deadlift.php';	
			}
		?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
			calculateWave( $benchRM, 1, 65, 75, 86 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-press.php';
			} else {
				include ROOT_DIR.'/includes/assistance-bench.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
			calculateWave( $squatRM, 1, 65, 75, 86 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-deadlift.php';
			} else {
				include ROOT_DIR.'/includes/assistance-squat.php';	
			}
		?>
	
	</section>

</article>


<!------------------ WAVE 2 ---------------->

<article class="wave-2">
	<div class="heading">
		<h3 class="heading-wave">Wave 2</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
			calculateWave( $pressRM, 2, 70, 80, 90 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-bench.php';
			} else {
				include ROOT_DIR.'/includes/assistance-press.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
			calculateWave( $deadliftRM, 2, 70, 80, 90 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-squat.php';
			} else {
				include ROOT_DIR.'/includes/assistance-deadlift.php';	
			}
		?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
			calculateWave( $benchRM, 2, 70, 80, 90 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-press.php';
			} else {
				include ROOT_DIR.'/includes/assistance-bench.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
			calculateWave( $squatRM, 2, 70, 80, 90 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-deadlift.php';
			} else {
				include ROOT_DIR.'/includes/assistance-squat.php';	
			}
		?>
	
	</section>

</article>


<!------------------ WAVE 3 ---------------->

<article class="wave-3">
	<div class="heading">
		<h3 class="heading-wave">Wave 3</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
			calculateWave( $pressRM, 3, 75, 85, 95 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-bench.php';
			} else {
				include ROOT_DIR.'/includes/assistance-press.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
			calculateWave( $deadliftRM, 3, 75, 85, 95 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-squat.php';
			} else {
				include ROOT_DIR.'/includes/assistance-deadlift.php';	
			}
		?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
			calculateWave( $benchRM, 3, 75, 85, 95 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-press.php';
			} else {
				include ROOT_DIR.'/includes/assistance-bench.php';	
			}
		?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
			calculateWave( $squatRM, 3, 75, 85, 95 ); 
			if ( $Edmar == 'Yes' ) {
				include ROOT_DIR.'/includes/assistance-deadlift.php';
			} else {
				include ROOT_DIR.'/includes/assistance-squat.php';	
			}
		?>
	
	</section>

</article>

<!---------- NEW PROGRAM -------->

	<section class="weight-input">
		<h2>Three new heavier waves</h2>
		<form action="result.php" method="get">
		Name: <input type="text" name="name" value="Bea"><br>
		Press: <input type="text" name="pressRM" value="<?php echo $pressRM + 2.5; ?>"><br>
		Deadlift: <input type="text" name="deadliftRM" value="<?php echo $deadliftRM + 5; ?>"><br>
		Bench: <input type="text" name="benchRM" value="<?php echo $benchRM + 2.5; ?>"><br>
		Squat: <input type="text" name="squatRM" value="<?php echo $squatRM + 2.5; ?>"><br>

		Edmar it up: <input type="checkbox" name="Edmar" value="Yes" /><br>

		<input type="submit">
	</section>

	<!---------------------	CHARTS ---------------------->
	<section class="charts">
		<?php 
			include(ROOT_DIR.'/includes/google-charts-api.php'); 
		?>
	</section>



	<footer>

	</footer>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>