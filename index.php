<?php

$user = [];
$user['name'] = '';
$user['press'] = '';
$user['deadlift'] = '';
$user['bench'] = '';
$user['squat'] = '';

// Get cookie
if (isset($_COOKIE['531_user'])) {
    $user = unserialize($_COOKIE['531_user'], ['']);

    foreach ($user as $key => $value) {
        $user[$key] = $value;
    }
}

include __DIR__ . '/lib/header.php';

?>
<section class="weight-input">
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
        <span class="label">Edmar it up:<input type="checkbox" name="Edmar" value="Yes"/></span>
        <br>
        <span class="label">Make it harder:<input type="checkbox" name="harder" value="Yes"/></span>
        <br>
        <input type="submit">
    </form>
</section>

<footer>
    Denna sida använder cookies (inte riktiga kakor 😔).
</footer>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>

</html>
