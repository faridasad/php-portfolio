<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$stack = getById("stack", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Stack</legend>
						<input name="cat" type="hidden" value="stack">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$stack['name']?>" /><br>
							
							<label>Image</label>
							<input class="form-control" type="text" name="image" value="<?=$stack['image']?>" /><br>
							
							<label>Datalabel</label>
							<input class="form-control" type="text" name="datalabel" value="<?=$stack['datalabel']?>" /><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				