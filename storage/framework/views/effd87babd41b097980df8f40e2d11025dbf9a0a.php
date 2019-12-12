<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>

	<form method="post" >
		<!-- @csrf  -->

		<!-- <?php echo e(csrf_field()); ?> -->

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>phone</td>
				<td><input type="phone" name="phone"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>

	<div>
		<?php echo e(session('msg')); ?>

	</div>

</body>
</html>