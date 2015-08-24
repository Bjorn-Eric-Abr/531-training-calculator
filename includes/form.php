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