<!DOCTYPE html>
<html>
<head>
	<title>Settings - User Manager</title>
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
				<a href="{{ route('user.show',$userInfo->userId) }}">Profile</a> | 
				<a href="{{ route('settings.edit',$userInfo->userId) }}">Settings</a> | 
				<a href="{{ route('logout') }}">Logout</a> 
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				@if(Session::has('message'))
					<span style="color:red">{{ Session::get('message') }}</span>
				@endif
				<h3>Change Password</h3>
				<form method="post" action="{{ route('settings.update',$userInfo->userId) }}">
				  {{ csrf_field() }}
				 <input type="hidden" name="_method" value="PUT">
						<table>
							<tr>
								<td>USERNAME: </td>
								<td>{{ $userInfo->username  }}</td>
							</tr>
							<tr>
								<td>OLD PASSWORD: </td>
								<td><input type="password" name="oldPassword"></td>
							</tr>
							<tr>
								<td>NEW PASSWORD: </td>
								<td><input type="password" name="newPassword"></td>
							</tr>
							<tr>
								<td>RE-TYPE PASSWORD: </td>
								<td><input type="password" name="retypePassword"></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="{{ route('userHome') }}">Back</a> | 
										<input type="submit" value="Update">
									</center>
								</td>
							</tr>
						</table>
					</form>
					<br/>
					<br/>
					 @if(count($errors) > 0)
					    @foreach($errors->all() as $error)
					       <label style="color: red;">{{ $error }}</label><br>
					    @endforeach
					 @endif
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>