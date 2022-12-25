<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$admin = getById("admin", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Admin</legend>
						<input name="cat" type="hidden" value="admin">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Username</label>
							<input class="form-control" type="text" name="username" value="<?=$admin['username']?>" /><br>
							
							<label>Password</label>
							<input class="form-control" type="text" name="password" value="<?=$admin['password']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				