<?php
function dump($text){
    echo "<pre>";
        print_r($text);
    echo "</pre>";
}

$a = $_GET['a'];
$b = $_GET['b'];

$c = $a+$b;
echo "<h3>Javob: $a + $b = ". $c ."</h3>";
$c = $a-$b;
echo "<h3>Javob: $a - $b = ". $c ."</h3>";
$c = $a*$b;
echo "<h3>Javob: $a * $b = ". $c ."</h3>";
$c = $a/$b;
echo "<h3>Javob: $a / $b = ". $c ."</h3>";





?>