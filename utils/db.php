<?php
    //how to connect mysql database using php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $database = "portfolio";
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    
?>