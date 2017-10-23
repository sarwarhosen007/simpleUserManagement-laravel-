<!DOCTYPE html>
<html>
<head>
	<title>Register - User Manager</title>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>User Manager</h1>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
				<hr/>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>New User Registration</h3>
				<form method="post" action="{{ route('registerCheck') }}">

				    {{ csrf_field() }}

						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" name="fullname" value="{{ old('fullname') }}"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" name="email" value="{{ old('email') }}"></td>
							</tr>
							<tr>
								<td>USERNAME: </td>
								<td><input type="text" name="username" name="{{ old('username') }}"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td>RE-PASSWORD: </td>
								<td><input type="password" name="conpassword"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="{{ route('loginView') }}">here</a> to login
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					@if(count($errors) > 0)
					   @foreach($errors->all() as $error)

					      <label style="color:red;">{{ $error }}</label><br>
					   @endforeach
					@endif
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>