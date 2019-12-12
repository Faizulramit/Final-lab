<!DOCTYPE html>
<html>
<head>
	<title>add catagory</title>
</head>
<body>
	<h1>ADD CATAGORY</h1>
	<div>
		<h3 style='color: blue'>{{session('msg')}}</h3>
	</div>

	<form method="post" >
		<!-- @csrf -->

		<!-- {{csrf_field()}} -->

		<input type="hidden" name="_token" value="{{csrf_token()}}">
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
		<!-- {{session('msg')}} -->
		@foreach($errors->all() as $err)
		 <p style="color: red">{{'*'.$err}}</p>
		 @endforeach
	</div>



</body>
</html>