<?php

require "db.php";

$sql = "SELECT * FROM talabalar WHERE ism LIKE '%k%'";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Id: ".$row['id']." Name:".$row['ism']."<br>";
    }
}

?>