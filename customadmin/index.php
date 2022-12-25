<?php 
    session_start();
    if(!isset($_SESSION['username']))
        header('Location: ../admin/login.php');
    
    include "../utils/db.php";
    $query = "SELECT name, aboutme, image FROM `user`";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $aboutme = $row['aboutme'];
    $image = $row['image'];

    $stack_query = "SELECT name, image, datalabel FROM `stack`";
    $stack_result = mysqli_query($conn, $stack_query);
    $stack = [];
    while($stack_row = mysqli_fetch_assoc($stack_result)){
        array_push($stack, $stack_row);
    }

    $projects_query = "SELECT name, category, image, link FROM `projects`";
    $projects_result = mysqli_query($conn, $projects_query);
    $projects = [];
    while($projects_row = mysqli_fetch_assoc($projects_result)){
        array_push($projects, $projects_row);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Home</title>
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <?php include './aside.php' ?>

    <main>
        <?php 
            if(isset($_GET['action'])){
                $action = $_GET['action'];
                switch($action){
                    case 'profile':
                        include './profile.php';
                        break;
                    case 'project_form':
                        include './project_form.php';
                        break;
                    case 'list_project':
                        include './list_project.php';
                        break;
                    case 'add_stack':
                        include './add_stack.php';
                        break;
                    case 'list_stack':
                        include './list_stack.php';
                        break;
                    case 'logout':
                        session_destroy();
                        header('Location: ../admin/login.php');
                        break;
                    default:
                        include './profile.php';
                        break;
                }
            }else{
                include './profile.php';
            }
        ?>
    </main>
</body>
</html>