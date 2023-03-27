<?php

echo "<h2>Cookie</h2>";

// $cookie_name = "language";
// $cookie_value = "uz";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



$languages = ['uz','ru','en'];

echo "<ul>";
foreach($languages as $language){
    echo "<li>";
        echo "<a href='?lan=".$language."'>$language</a>";
    echo "</li>";
}
echo "</ul>";



if(isset($_GET['lan']) && in_array($_GET['lan'],$languages)){

    $lan = $_GET['lan'];
    setcookie("lan",$lan,time() + 3600,"/");

    header('location: cookie.php');
    
}


if(isset($_COOKIE['lan']) && in_array($_COOKIE['lan'],$languages)){


    $lan = $_COOKIE['lan'];

    if($lan=='uz'){
        $text = "Salom dunyo";
    }elseif($lan=='ru'){
        $text = "Привет мир";
    }elseif($lan == 'en'){
        $text = "Hello world";
    }

    echo "<h3>$text</h3>";

}


?>