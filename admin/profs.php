<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-profs.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Profs</a>

				<h1>Profs</h1>
				<p>This table includes <?php echo counting("profs", "id");?> profs.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$profs = getAll("profs");
				if($profs) foreach ($profs as $profss):
					?>
					<tr>
		<td><?php echo $profss['name']?></td>


						<td><a href="edit-profs.php?act=edit&id=<?php echo $profss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $profss['id']?>&cat=profs" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				