<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
	<table>
		<!-- @csrf -->
		<!-- {{csrf_field()}} -->
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" ></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Login" value="Login"></td>
		</tr>
	</table>
	</form>
		{{-- {{session('msg')}}
		<br>

		{{-- @foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach --}}
</body> 
</html>