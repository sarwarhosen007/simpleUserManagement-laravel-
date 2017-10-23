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
				<a href="{{ route('admin.home') }}">Home</a> |
				<a href="{{ route('admin.index') }}">Users</a> |
				<a href="settings.html">Settings</a> |
				<a href="report.html">Report</a> |
				<a href="{{ route('logout') }}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>Admin Home</h3>
					<p>Welcome <strong>@if(Session::has('userFullName')) 
									 {{ Session::get('userFullName') }}
					               @endif
					</strong></p>
					<p>Your last login was on @if(Session::has('userLastLogin')) 
									 {{ Session::get('userLastLogin') }}
					               @endif PM</p>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>