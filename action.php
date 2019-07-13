<?php
require './vendor/kint.phar';

$Edmar = isset($_POST['Edmar']) ? 'Yes' : 'No';
$harder = isset($_POST['harder']);

$user_data = [
    'name'     => htmlspecialchars($_POST['name']),
    'press'    => (int)$_POST['press'],
    'deadlift' => (int)$_POST['deadlift'],
    'bench'    => (int)$_POST['bench'],
    'squat'    => (int)$_POST['squat'],
    'Edmar'    => $Edmar,
    'harder'   => $harder,
];

// Set cookie for one year
$time = time();
$user_data_serialized = serialize($user_data);
if ($_SERVER['SERVER_NAME'] === 'localhost') {
    setcookie('531_user', $user_data_serialized, $time + 32140800, '/', false, false);
} else {
    setcookie('531_user', $user_data_serialized, $time + 32140800, '/', true, true);
}

// Program-url-trix
$address = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path    = str_replace('/action.php', '', $address);
$address = '//' . $path . '/program.php';

// Relocate to program
header("Location: $address");
