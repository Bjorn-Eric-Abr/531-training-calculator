<?php

$Edmar = isset($_POST['Edmar']) ? "Yes" : "No";
$harder = isset($_POST['harder']);

$user_data = [
    "name"     => htmlspecialchars($_POST['name']),
    "press"    => (int)$_POST['press'],
    "deadlift" => (int)$_POST['deadlift'],
    "bench"    => (int)$_POST['bench'],
    "squat"    => (int)$_POST['squat'],
    "Edmar"    => $Edmar,
    "harder"    => $harder,
];

// Set cookie for one year
$time = time();
$user_data_serialized = serialize($user_data);

setcookie("531_user", $user_data_serialized, ($time + 32140800));

if (!isset($_COOKIE["531_user"])) {
    die('Could not set Cookie :(');
}

// Program-url-trix
$address = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$path    = str_replace("/action.php", "", $address);
$address = "http://" . $path . "/program.php";

// Relocate to program
header("Location: $address");
