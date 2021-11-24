<?php
include 'header.php';
include 'config/blood_groups.php';
?>

<a href="register.php">Register Your Blood Group</a>


<?php if (isset($_SESSION['success_message'])): ?>
	<div class="alert alert-success" role="alert">
		<?php 
		echo $_SESSION['success_message'];
		unset($_SESSION['success_message']);
		?>
	</div>
<?php endif ?>



<form class="form-inline">
	<div class="form-group">
		<select name="blood_group" class="form-control">
			<?php foreach ($blood_groups as $blood_group): ?>
				<option <?php if (@$_GET['blood_group'] == $blood_group) echo 'selected' ?> value="<?php echo $blood_group ?>"><?php echo $blood_group ?></option>
			<?php endforeach ?>
		</select>

	</div>

	<input type="submit" value="Search" class="btn btn-info">
</form>

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