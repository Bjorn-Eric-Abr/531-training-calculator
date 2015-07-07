<?php 
	function calculateWave( $weightRM, $waveNr, $perc1, $perc2, $perc3 ) {
		$nintypercent = 0.9;
		$weightTM = $weightRM * $nintypercent;  

		$perc1dec = $perc1 / 100;
		$perc2dec = $perc2 / 100;
		$perc3dec = $perc3 / 100;

		if ( $waveNr == 1 ) {
			$set1 = 5;
			$set2 = 5;
			$set3 = 5;
		} elseif ( $waveNr == 2 ) {
			$set1 = 3;
			$set2 = 3;
			$set3 = 3;
		} elseif ( $waveNr == 3 ) {
			$set1 = 5;
			$set2 = 3;
			$set3 = 1;
		}	
?>


		<div class="main-lifts">
			<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.4 / 5 );  ?> * 5</span>
			<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.5 / 5 );  ?> * 5</span>
			<span class="cell span-warmup"><?php echo 5 * floor( $weightTM*0.6 / 5 );  ?> * 3</span>
			
			<!------------ Main Lifts ------------>
			<span class="cell"><?php echo 5 * floor($weightTM*$perc1dec / 5 ) . ' * ' . $set1; ?></span>
			<span class="cell"><?php echo 5 * floor($weightTM*$perc2dec / 5 ) . ' * ' . $set2; ?></span>
			<span class="cell span-final-set"><?php echo 5 * floor($weightTM*$perc3dec / 5 ) . ' * ' . $set3 . '+'; ?></span>
		</div><?php // .main-lifts ?>

<?php		} ;?>