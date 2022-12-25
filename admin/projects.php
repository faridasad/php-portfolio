<?php
				include "includes/header.php";
				?>

				<a class="btn btn-primary" href="edit-projects.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Projects</a>

				<h1>Projects</h1>
				<p>This table includes <?php echo counting("projects", "id");?> projects.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Name</th>
			<th>Category</th>
			<th>Image</th>
			<th>Link</th>
			<th>Id</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$projects = getAll("projects");
				if($projects) foreach ($projects as $projectss):
					?>
					<tr>
		<td><?php echo $projectss['name']?></td>
		<td><?php echo $projectss['category']?></td>
		<td><?php echo $projectss['image']?></td>
		<td><?php echo $projectss['link']?></td>
		<td><?php echo $projectss['id']?></td>


						<td><a href="edit-projects.php?act=edit&id=<?php echo $projectss['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $projectss['id']?>&cat=projects" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				