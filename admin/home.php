<?php
		include "includes/header.php";
		?>
		<table class="table table-striped">
		<tr>
		<th class="not">Table</th>
		<th class="not">Entries</th>
		</tr>
		
				<tr>
					<td><a href="admin.php">Admin</a></td>
					<td><?=counting("admin", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="admins.php">Admins</a></td>
					<td><?=counting("admins", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="profs.php">Profs</a></td>
					<td><?=counting("profs", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="projects.php">Projects</a></td>
					<td><?=counting("projects", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="stack.php">Stack</a></td>
					<td><?=counting("stack", "id")?></td>
				</tr>
				
				<tr>
					<td><a href="user.php">User</a></td>
					<td><?=counting("user", "id")?></td>
				</tr>
				</table>
			<?php include "includes/footer.php";?>
			