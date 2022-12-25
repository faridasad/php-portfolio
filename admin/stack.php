<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-stack.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Stack</a>

				<h1>Stack</h1>
				<p>This table includes <?php echo counting("stack", "id");?> stack.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>
			<th>Image</th>
			<th>Datalabel</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$stack = getAll("stack");
				if($stack) foreach ($stack as $stacks):
					?>
					<tr>
		<td><?php echo $stacks['name']?></td>
		<td><?php echo $stacks['image']?></td>
		<td><?php echo $stacks['datalabel']?></td>
		<td><?php echo $stacks['id']?></td>


						<td><a href="edit-stack.php?act=edit&id=<?php echo $stacks['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $stacks['id']?>&cat=stack" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				