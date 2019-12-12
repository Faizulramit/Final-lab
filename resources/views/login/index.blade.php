<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Online Computer Shop</h1>

	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
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
				
			<td><input type="submit" name="submit" value="Login"></td>
				<td><a href="/registration">Registration</a></td>
			</tr>
		</table>
	</form>

	<div>
		<!-- {{session('msg')}} -->
		@foreach($errors->all() as $err)
		 <p style="color: red">{{'*'.$err}}</p>
		 @endforeach
	</div>

</body>
</html>