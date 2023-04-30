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

$sql = "
INSERT INTO 
`talabalar` 
    (`ism`, `fam`, `birthday`) 
VALUES 
    ('Nodir', 'Xolboyev', '2001-04-10'),
    ('Nodir 2', 'Xolboyev 2', '2001-04-10'),
    ('Nodir 3', 'Xolboyev 3', '2001-04-10'),
    ('Nodir 4', 'Xolboyev 4', '2001-04-10')    
    ;
";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>