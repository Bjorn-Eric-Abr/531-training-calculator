<?php 
define('ROOT_DIR', dirname(__FILE__)); 
include(ROOT_DIR. '/includes/header.php'); 
?>
    <section class="weight-input">
        <form action="result.php" method="get">
            <label for="name">Name: </label>
            <input type="text" name="name" required="required" value="Bea">
            <br>
            <label for="pressRM">Press: </label>
            <input type="text" name="pressRM" required="required" value="100">
            <br>
            <label for="deadliftRM">Deadlift: </label>
            <input type="text" name="deadliftRM" required="required" value="220">
            <br>
            <label for="benchRM">Bench: </label>
            <input type="text" name="benchRM" required="required" value="160">
            <br>
            <label for="squatRM">Squat: </label>
            <input type="text" name="squatRM" required="required" value="180">
            <br>
            <span class="label">Edmar it up:<input type="checkbox" name="Edmar" value="Yes" /></span>
            <br>
            <input type="submit">
    </section>
    <footer>
        Footer
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>

    </html>
