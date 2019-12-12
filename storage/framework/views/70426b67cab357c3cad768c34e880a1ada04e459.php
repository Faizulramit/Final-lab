<!DOCTYPE html>
<html>
<head>
	<title>add catagory</title>
</head>
<body>
	<h1>ADD CATAGORY</h1>
	<div>
		<h3 style='color: blue'><?php echo e(session('msg')); ?></h3>
	</div>

	<form method="post" >
		<!-- @csrf  -->

		<!-- <?php echo e(csrf_field()); ?> -->

		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
		<table>
		    <tr>
			    <td>ADD NAME</td>
				<td><input type="text" name="catagoryname"></td>
			</tr>
			<tr>
				<td>CATAGORY AUTHOR</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td> CATEGORIES</td>
				<td><input type="text" name="categories"></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price"></td>
			</tr>
            <tr>
				<td>DESCRIPTION</td>
				<td><textarea rows="4" cols="30" name="description"></textarea></td>
			</tr>

			<tr>
				
			<td><input type="submit" name="submit" value="Submit"></td>
				<td><a href="/adminhome">Home</a></td>
			</tr>
		</table>
	</form>
		<!-- <?php echo e(session('msg')); ?> -->
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 <p style="color: red"><?php echo e('*'.$err); ?></p>
		 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>



</body>
</html>