<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "php_dars_2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `talabalar` WHERE ism = 'Nodir' or id = 12";
$result = $conn->query($sql);


if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Fam:".$row['fam']." Name:".$row['ism']." <br>";
    }
}
?>