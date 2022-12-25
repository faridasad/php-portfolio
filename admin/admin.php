<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-admin.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Admin</a>

				<h1>Admin</h1>
				<p>This table includes <?php echo counting("admin", "id");?> admin.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Username</th>
			<th>Password</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$admin = getAll("admin");
				if($admin) foreach ($admin as $admins):
					?>
					<tr>
		<td><?php echo $admins['username']?></td>
		<td><?php echo $admins['password']?></td>


						<td><a href="edit-admin.php?act=edit&id=<?php echo $admins['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $admins['id']?>&cat=admin" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				