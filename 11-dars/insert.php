<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "
INSERT INTO 
    `talabalar`
    (`first_name`, `last_name`, `email`) 
VALUES 
('Botir','Yoqibov','botir@umail.uz'),
('Botir2','Yoqibov2','botir@umail.uz2'),
('Botir3','Yoqibov3','botir@umail.uz3')
";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>