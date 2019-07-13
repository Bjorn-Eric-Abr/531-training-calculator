<section class="weight-input">
    <h2>Three new heavier waves</h2>
    <form action="result.php" method="get">
        <label>Name:
            <input type="text" name="name" value="Bea">
        </label><br>
        <label>Press:
            <input type="text" name="pressRM" value="<?php echo $pressRM + 2.5; ?>">
        </label><br>
        <label>Deadlift:
            <input type="text" name="deadliftRM" value="<?php echo $deadliftRM + 5; ?>">
        </label><br>
        <label>Bench:
            <input type="text" name="benchRM" value="<?php echo $benchRM + 2.5; ?>">
        </label><br>
        <label>Squat:
            <input type="text" name="squatRM" value="<?php echo $squatRM + 2.5; ?>">
        </label><br>

        <label>Emil Edmar it up:
            <input type="checkbox" name="Edmar" value="Yes"/>
        </label><br>
        <label>Make 5% it harder:
            <input type="checkbox" name="harder" value="Yes"/>
        </label><br>

        <input type="submit">
</section>
