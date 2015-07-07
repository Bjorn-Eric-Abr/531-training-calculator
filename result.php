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

	<?php // include the weeks ?>
	<?php 
	  define( 'ROOT_DIR', dirname(__FILE__) );
	  include(ROOT_DIR.'/includes/functions.php');


	  // Edmar it up! (alternating bbb)
		if(isset($_POST['formWheelchair']) && 
		   $_POST['formWheelchair'] == 'Yes') 
		{
		    $bbb : ;
		}
		else
		{
		    echo "Do not Need wheelchair access.";
		}    
	?> 


<body>
	<header>
		<h1>5 3 1</h1>
		<h2 class="heading-athlete-name"><?php echo $_GET["name"]; ?></h2>
	</header>

<article class="wave-1">
	<div class="heading">
		<h3 class="heading-wave">Wave 1</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php week1( $_GET["pressRM"] );?>

		<span class="cell span-heading">Assistance: </span>
		<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
			
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Deadlift</h3>
			<?php week1( $_GET["deadliftRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Bench</h3>
			<?php week1( $_GET["benchRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
	
	</section>
	
	<section class="lift">
	
			<h3 class="heading-lift">Squat</h3>
			<?php week1( $_GET["squatRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>
</article><?php // .wave-1 ?>

<article class="wave-2">
	<div class="heading">
		<h3 class="heading-wave">Wave 2</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php week2( $_GET["pressRM"] );?>

		<span class="cell span-heading">Assistance: </span>
		<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
			
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Deadlift</h3>
			<?php week2( $_GET["deadliftRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Bench</h3>
			<?php week2( $_GET["benchRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
	
	</section>
	
	<section class="lift">
	
			<h3 class="heading-lift">Squat</h3>
			<?php week2( $_GET["squatRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>
</article><?php // .wave-2 ?>

<article class="wave-3">
	<div class="heading">
		<h3 class="heading-wave">Wave 3</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php week3( $_GET["pressRM"] );?>

		<span class="cell span-heading">Assistance: </span>
		<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
			
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Deadlift</h3>
			<?php week3( $_GET["deadliftRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>

	<section class="lift">
	
			<h3 class="heading-lift">Bench</h3>
			<?php week3( $_GET["benchRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Lats, Upper Back, Triceps, Biceps</span>
	
	</section>
	
	<section class="lift">
	
			<h3 class="heading-lift">Squat</h3>
			<?php week3( $_GET["squatRM"] );?>
	
			<span class="cell span-heading">Assistance: </span>
			<span class="cell">Hipthrust, Hamstrings, Lower Back, Abs</span>
	
	</section>
</article><?php // .wave-2 ?>
	


	<!-- //////////////////	CHARTS //////////////////-->
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