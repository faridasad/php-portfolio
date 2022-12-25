<?php
    include '../utils/db.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check user in database
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row){
        session_start();
        $_SESSION['username'] = $username;
        header('Location: ./index.php');
    }else{
        header('Location: ./login.php');
    }
?>