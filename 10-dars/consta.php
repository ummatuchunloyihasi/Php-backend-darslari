<?php
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye = new Goodbye();
echo Goodbye::LEAVING_MESSAGE;
echo "<br>";
$goodbye->byebye();
?>