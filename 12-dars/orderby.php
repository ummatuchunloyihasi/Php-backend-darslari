<?php

require_once "db.php";

$sql = "SELECT * FROM `talabalar`  ORDER BY ism DESC";
$result = $conn->query($sql);


if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['id']." Fam:".$row['fam']." Name:".$row['ism']." <br>";
    }
}
?>