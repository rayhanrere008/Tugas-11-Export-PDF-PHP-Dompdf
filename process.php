<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === $username && $password === $password) {
        $_SESSION['username'] = $username;
        header("Location: formregistrasi.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>