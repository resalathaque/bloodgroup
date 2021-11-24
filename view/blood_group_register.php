<?php
include 'header.php';
include 'config/blood_groups.php';
?>

<div class="row justify-content-md-center">
	<div class="col-md-5">

		<form method="POST">

			<h1>Register your blood group</h1>

			<?php if (isset($error_msg)): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $error_msg ?>
				</div>
			<?php endif ?>
			
			<input value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" class="form-control" type="text" name="name" placeholder="Name">
			<input value="<?php if (isset($_POST['phone'])) echo $_POST['phone'] ?>" class="form-control" type="text" name="phone" placeholder="Phone Number">

			<select name="blood_group" class="form-control">
				<?php foreach ($blood_groups as $blood_group): ?>
					<option <?php if (@$_POST['blood_group'] == $blood_group) echo 'selected' ?> value="<?php echo $blood_group ?>"><?php echo $blood_group ?></option>
				<?php endforeach ?>
			</select>

			<input type="submit" class="btn btn-primary" value="Register">

		</form>
	</div>
</div>

<?php include 'footer.php'; ?>