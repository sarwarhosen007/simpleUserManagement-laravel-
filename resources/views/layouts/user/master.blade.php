<!DOCTYPE html>
<html>
<head>
	<title>Home - User Manager</title>
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
			<td align="center">
				<a href="{{ route('userHome') }}">Home</a> | 
				<a href="{{ route('user.show', Session()->get('userId') ) }}">Profile</a> | 
				<a href="{{ route('settings.edit', Session()->get('userId')) }}">Settings</a> | 
				<a href="{{ route('logout') }}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>

				  @yield('main-content') <!-- main content show here -->

				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>