<?php

session_start();

require_once "./header.php";

if(isset($_SESSION['login']) && $_SESSION['login']=='success'){

?>

<h2 style="text-align: center;">
    Bu yangilik sahifasi
</h2>

<p style="text-align: center; color:white">
    <a href="logout.php" style="color:white">Chiqish</a>
</p>

<?php

}else{
    header('location: login.php');
}

include_once "./footer.php";


?>