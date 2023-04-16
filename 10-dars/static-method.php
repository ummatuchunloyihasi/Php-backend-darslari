<?php
class greeting {

    const name = "Salom";
    public static function welcome() {
        echo self::name;
    }

    public static function getName($name){
        return self::name." ".$name;
    }
}

// Call static method
greeting::welcome();
echo "<br>";
echo greeting::getName("OOP");

echo "<br>";
echo greeting::getName("JK");

echo "<br>";
echo greeting::getName("Notebook");
