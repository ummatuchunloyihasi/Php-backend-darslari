<?php
session_start();


echo "<h2>Session</h2>";


$_SESSION['name'] = "Jamol";
$_SESSION['user'] = "User N1";


echo "<pre>";
print_r($_SESSION);
print_r($_SESSION);


?>