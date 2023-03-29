<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password=='admin2'){

        $_SESSION['login'] = 'success';

        header('location: news.php');

    }else{

        $_SESSION['login'] = 'error';

        header('location: login.php');

    }
}

?>