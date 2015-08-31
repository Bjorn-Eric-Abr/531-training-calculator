<?php 
define('ROOT_DIR', dirname(__FILE__));
include(ROOT_DIR.'/includes/header.php');
include(ROOT_DIR.'/includes/functions.php');

    $currentURL = $_SERVER['REQUEST_URI'];

    $pressRM = $_GET['pressRM'];
    $deadliftRM = $_GET['deadliftRM'];
    $benchRM = $_GET['benchRM'];
    $squatRM = $_GET['squatRM'];

      // Se if we should Edmar
        if (isset($_GET['Edmar'])) {
            $Edmar = 'Yes';
        } else {
            $Edmar = 'No';
        }
    ?> 


<body>

<div class="layout---line layout--weightRM-box">
    <div class="layout---unit">
        <?php 
            //---- Echo out atlethe name
            $name = $_GET["name"];
            if ( isset( $name ) ) {
                echo '<h2 class="heading--smallcaps">LIFTER <span class="result--heading">'.$_GET["name"].'</span></h2>';
            } 
            //---- Echo weights
            echo '<h2 class="heading--smallcaps">press <span class="result--heading">' . $name = $_GET["pressRM"] . '</span></h2>'; 

            echo '<h2 class="heading--smallcaps">deadlift <span class="result--heading">' . $name = $_GET["deadliftRM"] . '</span></h2>'; 

            echo '<h2 class="heading--smallcaps">benchpress <span class="result--heading">' . $name = $_GET["benchRM"] . '</span></h2>'; 

            echo '<h2 class="heading--smallcaps">squat <span class="result--heading">' . $name = $_GET["squatRM"] . '</span></h2>'; 
        ?>
    </div>
</div>

<!-----------------------Mobild Nav---------------------------->
<nav class="mobile-nav layout--line">
    <div class="item">
        <a href="#wave-1">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored-1">
                1
            </button>
        </a>
    </div>
    <div class="item">
        <a href="#wave-2">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored-2">
                2
            </button>
        </a>
    </div>
    <div class="item">
        <a href="#wave-3">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored-3">
                3
            </button>
        </a>
    </div>
</nav>



<div class="layout---line">

    <!------------------ WAVE 1 ---------------->
    <article id="wave-1" class="wave-1 layout---unit">
        <div class="heading">
            <h3 class="type--heading-wave">Wave 1</h3>
        </div>




	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
            calculateWave($pressRM, 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-bench.php';
            } else {
                include ROOT_DIR.'/includes/assistance-press.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
            calculateWave($deadliftRM, 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-squat.php';
            } else {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            }
        ?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
            calculateWave($benchRM, 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-press.php';
            } else {
                include ROOT_DIR.'/includes/assistance-bench.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
            calculateWave($squatRM, 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            } else {
                include ROOT_DIR.'/includes/assistance-squat.php';
            }
        ?>
	
	</section>

</article>


<!------------------ WAVE 2 ---------------->

<article id="wave-2" class="wave-2 layout---unit">
	<div class="heading">
		<h3 class="type--heading-wave">Wave 2</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
            calculateWave($pressRM, 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-bench.php';
            } else {
                include ROOT_DIR.'/includes/assistance-press.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
            calculateWave($deadliftRM, 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-squat.php';
            } else {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            }
        ?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
            calculateWave($benchRM, 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-press.php';
            } else {
                include ROOT_DIR.'/includes/assistance-bench.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
            calculateWave($squatRM, 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            } else {
                include ROOT_DIR.'/includes/assistance-squat.php';
            }
        ?>
	
	</section>

</article>


<!------------------ WAVE 3 ---------------->

<article id="wave-3" class="wave-3 layout---unit">
	<div class="heading">
		<h3 class="type--heading-wave">Wave 3</h3>
	</div>


	<section class="lift">
	
		<h3 class="heading-lift">Press</h3>
		<?php 
            calculateWave($pressRM, 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-bench.php';
            } else {
                include ROOT_DIR.'/includes/assistance-press.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Deadlift</h3>
		<?php 
            calculateWave($deadliftRM, 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-squat.php';
            } else {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            }
        ?>
	
	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Bench</h3>
		<?php 
            calculateWave($benchRM, 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-press.php';
            } else {
                include ROOT_DIR.'/includes/assistance-bench.php';
            }
        ?>

	</section>

	<section class="lift">
	
		<h3 class="heading-lift">Squat</h3>
		<?php 
            calculateWave($squatRM, 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include ROOT_DIR.'/includes/assistance-deadlift.php';
            } else {
                include ROOT_DIR.'/includes/assistance-squat.php';
            }
        ?>
	
	</section>

</article>

</div><?php //--layout---line ?>

<!---------- NEW PROGRAM -------->
<section class="weight-input">
    <h2></h2>
    <form action="result.php" method="get">
        <label for="name">Name: </label>
        <input type="text" name="name" required="required" value="Bea">
        <br>
        <label for="pressRM">Press: </label>
        <input type="text" name="pressRM" required="required" value="<?php echo $pressRM + 2.5; ?>">
        <br>
        <label for="deadliftRM">Deadlift: </label>
        <input type="text" name="deadliftRM" required="required" value="<?php echo $deadliftRM + 5; ?>">
        <br>
        <label for="benchRM">Bench: </label>
        <input type="text" name="benchRM" required="required" value="<?php echo $benchRM + 2.5; ?>">
        <br>
        <label for="squatRM">Squat: </label>
        <input type="text" name="squatRM" required="required" value="<?php echo $squatRM + 5; ?>">
        <br>
        <span class="label">Edmar it up:<input type="checkbox" name="Edmar" value="Yes" /></span>
        <br>
        <input type="submit">
</section>
<!---------------------	CHARTS ---------------------->

<footer>
</footer>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
$('.lift').click(function() {
  $(this).find('.total').fadeToggle( "fast" );
});
</script>
</body>

</html>
