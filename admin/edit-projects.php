<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$projects = getById("projects", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Projects</legend>
						<input name="cat" type="hidden" value="projects">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$projects['name']?>" /><br>
							
							<label>Category</label>
							<input class="form-control" type="text" name="category" value="<?=$projects['category']?>" /><br>
							
							<label>Image</label>
							<input class="form-control" type="text" name="image" value="<?=$projects['image']?>" /><br>
							
							<label>Link</label>
							<input class="form-control" type="text" name="link" value="<?=$projects['link']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				