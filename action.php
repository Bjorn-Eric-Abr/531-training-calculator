<?php

// Om vi glömt kakan ...
// if ( !isset( $_COOKIE['user'] ) ) {
//     header('Location: http://localhost:8888/531/allow_cookies.php');
// }

$Edmar = isset( $_POST['Edmar'] ) ? "Yes" : "No";

// USER array
    $user_data = array(
        "name" => htmlspecialchars($_POST['name']),
        "press" => (int)$_POST['press'],
        "deadlift" => (int)$_POST['deadlift'],
        "bench" => (int)$_POST['bench'],
        "squat" => (int)$_POST['squat'],
        "Edmar" => $Edmar,
    );

$user_serialized = serialize( $user_data );

// Get current server adress
$adress = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Set cookie for one year
setcookie( "user", $user_serialized, time()+3600*24*31*12, "/", $_SERVER['HTTP_HOST'], false, true );

// Program-url-trix
$path = str_replace( "/action.php", "", $adress );
$adress = "http://" . $path . "/program.php";

// Relocate to program
header("Location: $adress");
