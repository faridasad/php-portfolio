<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "admin" || $cat_get == "admin") {
					$username = addslashes(htmlentities($_POST["username"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admin` (  `username` , `password` ) VALUES ( '".$username."' , '".md5($password)."') ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admin` SET  `username` =  '".$username."'  WHERE `id` = '".$id."' "); 
					if($_POST["password"] && $_POST["password"] != "") {
						mysqli_query($link, "UPDATE `admin` SET  `password` =  '".md5($password)."' WHERE `id` = '".$id."' ");
					}
					
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admin` WHERE id = '".$id_get."' ");
					}
					header("location:"."admin.php");
				}
				
				if($cat == "admins" || $cat_get == "admins") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `admins` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `admins` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `admins` WHERE id = '".$id_get."' ");
					}
					header("location:"."admins.php");
				}
				
				if($cat == "profs" || $cat_get == "profs") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `profs` (  `name` ) VALUES ( '".$name."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `profs` SET  `name` =  '".$name."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `profs` WHERE id = '".$id_get."' ");
					}
					header("location:"."profs.php");
				}
				
				if($cat == "projects" || $cat_get == "projects") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$category = addslashes(htmlentities($_POST["category"], ENT_QUOTES));
$image = addslashes(htmlentities($_POST["image"], ENT_QUOTES));
$link = addslashes(htmlentities($_POST["link"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `projects` (  `name` , `category` , `image` , `link` ) VALUES ( '".$name."' , '".$category."' , '".$image."' , '".$link."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `projects` SET  `name` =  '".$name."' , `category` =  '".$category."' , `image` =  '".$image."' , `link` =  '".$link."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `projects` WHERE id = '".$id_get."' ");
					}
					header("location:"."projects.php");
				}
				
				if($cat == "stack" || $cat_get == "stack") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$image = addslashes(htmlentities($_POST["image"], ENT_QUOTES));
$datalabel = addslashes(htmlentities($_POST["datalabel"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `stack` (  `name` , `image` , `datalabel` ) VALUES ( '".$name."' , '".$image."' , '".$datalabel."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `stack` SET  `name` =  '".$name."' , `image` =  '".$image."' , `datalabel` =  '".$datalabel."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `stack` WHERE id = '".$id_get."' ");
					}
					header("location:"."stack.php");
				}
				
				if($cat == "user" || $cat_get == "user") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$aboutme = addslashes(htmlentities($_POST["aboutme"], ENT_QUOTES));
$image = addslashes(htmlentities($_POST["image"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `user` (  `name` , `aboutme` , `image` ) VALUES ( '".$name."' , '".$aboutme."' , '".$image."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `user` SET  `name` =  '".$name."' , `aboutme` =  '".$aboutme."' , `image` =  '".$image."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `user` WHERE id = '".$id_get."' ");
					}
					header("location:"."user.php");
				}
				?>