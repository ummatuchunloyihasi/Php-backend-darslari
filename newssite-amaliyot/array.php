<?php

$url = "http://php.dars.loc/newssite/json.php";

$file = file_get_contents($url);

echo "<pre>";
print_r(json_decode($file,true));

?>