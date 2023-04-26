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

$sql = "SELECT * FROM `talabalar` WHERE id in (21,23) and last_name='Yoqibov'";
$result = $conn->query($sql);



?>


<table border="1">
    <tr>
        <th>
            Id
        </th>
        <th>
            Last name
        </th>
        <th>
            First_name
        </th>
        <th>
            Email
        </th>
    </tr>

    <?php
    
    
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       ?>

            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['first_name']?></td>
                <td><?=$row['last_name']?></td>
                <td><?=$row['email']?></td>
            </tr>

    <?php
        }
    } else {
        echo "0 results";
    }
    
    ?>

</table>


<?php
$conn->close();
?>