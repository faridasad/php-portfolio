<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-user.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New User</a>

				<h1>User</h1>
				<p>This table includes <?php echo counting("user", "id");?> user.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>
			<th>Aboutme</th>
			<th>Image</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$user = getAll("user");
				if($user) foreach ($user as $users):
					?>
					<tr>
		<td><?php echo $users['name']?></td>
		<td><?php echo $users['aboutme']?></td>
		<td><?php echo $users['image']?></td>
		<td><?php echo $users['id']?></td>


						<td><a href="edit-user.php?act=edit&id=<?php echo $users['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $users['id']?>&cat=user" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				