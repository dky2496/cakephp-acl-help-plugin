<div id="content">
	<div class="access index">

		<table>
			<tr>
				<th>Group Name</th><th>Info</th>
			</tr>
		
		<?php foreach($groups as $group): ?>
			<tr>
				<td><?php echo $group['Group']['name'] ?><br />
				<?php echo $group['Group']['body'] ?></td>
				<td>
					<h4>Group Permissions</h4>
					<table>
					<tr>
						<th>Alias</th><th>Create</th><th>Read</th><th>Update</th><th>Delete</th>
					</tr>
					<?php foreach($group['AroO']['Aco'] as $aco): ?>
					<tr>
						<td><?php echo $aco['alias']; ?></td>
						<td><?php echo $aco['Permission']['_create']; ?></td>
						<td><?php echo $aco['Permission']['_read']; ?></td>
						<td><?php echo $aco['Permission']['_update']; ?></td>
						<td><?php echo $aco['Permission']['_delete']; ?></td>
					</tr>
					<?php endforeach; ?>
					</table>
					
					<h4>Users</h4>
					<table>
						<tr>
							<th>Username</th>
						</tr>
						<?php foreach($group['User'] as $user): ?>
						<tr>
							<td><?php echo $user['username']; ?></td>
						</tr>
						<?php endforeach; ?>
					</table>
		
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	
	</div>
	
	<div class="actions">
		<?php echo $this->element('actions'); ?>
	</div>


</div>