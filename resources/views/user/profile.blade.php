<!DOCTYPE html>
<html>
<head>
	<title>Profile - User Manager</title>
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
				<a href="{{ route('user.show', $userInfoProfile->userId) }}">Profile</a> | 
				<a href="{{ route('settings.edit',$userInfoProfile->userId) }}">Settings</a> | 
				<a href="{{ route('logout') }}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
			   @if(Session::has('UpdateSuccessMessage'))
				<span style="color: blue;">{{ Session::get('UpdateSuccessMessage') }}</span>
			@endif
			@if(Session::has('message'))
				<span style="color: blue;">{{ Session::get('message') }}</span>
			@endif
				<br/>
				<center>
				<h3>My Profile</h3>
				<form method="post">
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td>{{ $userInfoProfile->fullname }}</td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td>{{ $userInfoProfile->email }}</td>
							</tr>
							<tr>
								<td>USERNAME: </td>
								<td>{{ $userInfoUser->username }}</td>
							</tr>
							<tr>
								<td>TYPE: </td>
								<td>{{ $userInfoUser->type }}</td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="{{ route('userHome') }}">Back</a> | 
										<a href="{{ route('user.edit',$userInfoProfile->userId) }}">Edit</a>
									</center>
								</td>
							</tr>
						</table>
					</form>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>