<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$user = getById("user", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New User</legend>
						<input name="cat" type="hidden" value="user">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$user['name']?>" /><br>
							
							<label>Aboutme</label>
							<textarea class="ckeditor form-control" name="aboutme"><?=$user['aboutme']?></textarea><br>
							
							<label>Image</label>
							<input class="form-control" type="text" name="image" value="<?=$user['image']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				