<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>User Name</td>
                <td><input type="text" name="name" ></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="Password" name="Password" ></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="Password" name="Password" ></td>
            </tr>
            <tr>
                <td>Type</td>
                <td><input type="text" name="type" ></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone" ></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" ></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="company" ></td>
            </tr>
        </table>
<tr>
			<td></td>
			<td><input type="submit" name="Login" value="Register"></td>
		</tr>


    </form>
    <br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</head>
<body>
    
</body>
</html>