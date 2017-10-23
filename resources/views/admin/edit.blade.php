<!DOCTYPE html>
<html>
<head>
	<title>Edit - User Manager</title>
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
				<h3>Edit User Information</h3>
				<form method="post" action="{{ route('admin.update',$user->userId) }}">
				       {{ csrf_field() }}
				       {{ method_field('PUT') }}
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td>{{ $profile->fullname }}</td>
							</tr>
							<tr>
								<td>USERNAME: </td>
								<td>{{ $user->username }}</td>
							</tr>
							<tr>
								<td>TYPE: </td>
								<td>
									<select name="type">
										<option @if($user->type == 'Admin') {{ 'selected' }} @endif >Admin</option>
										<option @if($user->type == 'User') 
										 {{ 'selected' }}  @endif>User</option>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="{{ route('admin.index') }}">Back</a> | 
										<input type="submit" value="Confirm">
									</center>
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					@if(Session::has('Error'))
						<label style="color:red;">{{ Session::get('Error') }}</label>
					@endif
					 
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>