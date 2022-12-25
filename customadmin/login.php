<?php
    session_start();
    if(isset($_SESSION['username']))
        header('Location: ./index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <div class="wrapper">
       <h1>WHERE'S THE MONEY SKYLER?</h1>
       <form action="./auth.php" method="POST">
          <input type="text" name="username" placeholder="Enter name">
          <input type="password" name="password" placeholder="Enter password">
          <button>Login</button>
       </form>
    </div>
</body>
</html>