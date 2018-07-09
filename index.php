<?php
    include( dirname(__FILE__) . '/includes/header.php');
// echo "<h2>".$_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI']. "</h1>";
    // Defaults
    $user = [];
    $user['name'] = "";
    $user['press'] = "";
    $user['deadlift'] = "";
    $user['bench'] = "";
    $user['squat'] = "";

    // Get cookie
    if ( isset( $_COOKIE['user'] ) ) {
        $user = unserialize( $_COOKIE['user'] );

        // Get previous settings (if any)
        foreach( $user as $key => $value ) {
            // echo $key ." is set to ". $value ."<br />";

            // Populate user array
            $user[$key] = $value;
        }
    }

?>
    <section class="weight-input">
        <!-- <form action="action.php" method="post"> -->
        <form action="action.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" required="required" value="<?php echo $user['name']; ?>">
            <br>
            <label for="press">Press: </label>
            <input type="tel" name="press" required="required" value="<?php echo $user['press']; ?>">
            <br>
            <label for="deadlift">Deadlifts: </label>
            <input type="tel" name="deadlift" required="required" value="<?php echo $user['deadlift']; ?>">
            <br>
            <label for="bench">Bench: </label>
            <input type="tel" name="bench" required="required" value="<?php echo $user['bench']; ?>">
            <br>
            <label for="squat">Squat: </label>
            <input type="tel" name="squat" required="required" value="<?php echo $user['squat']; ?>">
            <br>
            <span class="label">Edmar it up:<input type="checkbox" name="Edmar" value="Yes" /></span>
            <br>
            <input type="submit">
    </section>

    <footer>
        Denna sida använder cookies (inte riktiga kakor 😔).
    </footer>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>

    </html>
