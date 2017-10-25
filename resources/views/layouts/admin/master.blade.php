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
				<a href="{{ route('adminHome') }}">Home</a> |
				<a href="{{ route('admin.index') }}">Users</a> |
				<a href="{{ route('adminSetting',Session()->get('userId')) }}">Settings</a> |
				<a href="{{ route('userReport') }}">Report</a> |
				<a href="{{ route('logout') }}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>

				   @yield('main-content') <!-- content show here -->

				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>

	@yield('scripts') <!-- Script goes there -->

</body>
</html>