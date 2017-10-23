<!DOCTYPE html>
<html>
<head>
	<title>Login - User Manager</title>
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
				 @if(Session()->has('SuccessMessage'))
					<span style="color: blue">{{ Session()->get('SuccessMessage') }}</span>
				 @endif
				<h3>User Authentication</h3>
					<form method="post" action="{{ route('userCheck') }}">
					  {{ csrf_field() }}
						<table>
							<tr>
								<td>USERNAME: </td>
								<td><input type="text" name="username"></td>
							</tr>
							<tr>
								<td>PASSWORD: </td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="{{ route('registerView') }}">here</a> to register
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					 @if(Session::has('LogoinErrorMessage'))

					  <label style="color:red">{{ Session::get('LogoinErrorMessage') }}</label>

					@endif
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>