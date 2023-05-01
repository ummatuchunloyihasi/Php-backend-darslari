<?php

require_once "db.php";

$sql = "DELETE FROM talabalar  WHERE id = 4";

if($conn->query($sql)===TRUE){
    echo "Deleted ";
}else{
    echo "Error deleted: ". $conn->error;
}


?>