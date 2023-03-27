<?php

function dump($text){
    echo "<pre>";
        print_r($text);
    echo "</pre>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="file" name="photo1">
        <input type="file" name="photo2">
        <input type="submit" value="Send" name="send">
    </form>

    <?php


    if(isset($_FILES['photo'])){
        dump($_FILES['photo']['name']);
    }


//    if(isset($_GET['a']) && isset($_GET['b'])){

//     $a = $_GET['a'];
//     $b = $_GET['b'];
    
//     $c = $a+$b;
//     echo "<h3>Javob: $a + $b = ". $c ."</h3>";
//     $c = $a-$b;
//     echo "<h3>Javob: $a - $b = ". $c ."</h3>";
//     $c = $a*$b;
//     echo "<h3>Javob: $a * $b = ". $c ."</h3>";
//     $c = $a/$b;
//     echo "<h3>Javob: $a / $b = ". $c ."</h3>";


//    }
    
    
    ?>

</body>
</html>