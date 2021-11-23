<?php include 'header.php'; ?>

<a href="register.php">Register Your Blood Group</a>

<table class="table">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Phone Number</th>
		<th>Blood Group</th>
	</thead>

	<tbody>
		<?php foreach($students as $student): ?>
			<tr>
				<td><?php echo $student['id'] ?></td>
				<td><?php echo $student['name'] ?></td>
				<td><?php echo $student['phone'] ?></td>
				<td><?php echo $student['blood_group'] ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<?php include 'footer.php'; ?>