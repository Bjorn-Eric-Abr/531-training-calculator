<?php 
	function week1( $weightRM ) {
		$nintypercent = 0.9;
		$weightTM = $weightRM * $nintypercent;  ?>


			<div class="main-lifts">
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.4 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.6 / 5 );  ?> * 3</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.65 / 5 );  ?> * 5</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.75 / 5 );  ?> * 5</span>
				<span class="cell span-final-set"><?php echo 5 * floor($weightTM*0.85 / 5 );  ?> * 5+</span>
			</div><?php // .main-lifts ?>

				<span class="cell span-heading">Boring but big</span>
				<span class="cell"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 10 * 5</span><br>

<?php		} ;?>

<?php 
	function week2( $weightRM ) {
		$nintypercent = 0.9;
		$weightTM = $weightRM * $nintypercent;  ?>


			<div class="main-lifts">
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.4 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.6 / 5 );  ?> * 3</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.70 / 5 );  ?> * 3</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.80 / 5 );  ?> * 3</span>
				<span class="cell span-final-set"><?php echo 5 * floor($weightTM*0.90 / 5 );  ?> * 3+</span>
			</div><?php // .main-lifts ?>

				<span class="cell span-heading">Boring but big</span>
				<span class="cell"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 10 * 5</span><br>

<?php		} ;?>

<?php 
	function week3( $weightRM ) {
		$nintypercent = 0.9;
		$weightTM = $weightRM * $nintypercent;  ?>


			<div class="main-lifts">
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.4 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 5</span>
				<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.6 / 5 );  ?> * 3</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.75 / 5 );  ?> * 5</span>
				<span class="cell"><?php echo 5 * floor($weightTM*0.85 / 5 );  ?> * 3</span>
				<span class="cell span-final-set"><?php echo 5 * floor($weightTM*0.95 / 5 );  ?> * 1+</span>
			</div><?php // .main-lifts ?>

				<span class="cell span-heading">Boring but big</span>
				<span class="cell"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 10 * 5</span><br>

<?php		} ;?>