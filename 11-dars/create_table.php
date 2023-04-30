<?php

$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "php_dars_2";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Ulanish amalga oshiridi";

$sql = "CREATE TABLE 
`talabalar` 
( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `ism` VARCHAR(100) NOT NULL , 
    `fam` VARCHAR(100) NOT NULL , 
    `birthday` DATE NOT NULL , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;";

if($conn->query($sql)===TRUE){
    echo "Jadaval yaratildi";
}else{
  echo "Xatolik: ". $conn->error;
}


?>