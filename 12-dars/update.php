<?php

require_once "db.php";

$sql = "
UPDATE 
    talabalar 
SET 
    fam = 'Olimov', 
    birthday = '1988-03-12' 
WHERE id = 1;";

if($conn->query($sql)===TRUE){
    echo "Updated ";
}else{
    echo "Error updated: ". $conn->error;
}


?>