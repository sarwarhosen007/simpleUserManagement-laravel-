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
				<a href="{{ route('userHome') }}">Home</a> | 
				<a href="{{ route('user.show',$userProfile->userId) }}">Profile</a> | 
				<a href="{{ route('settings.edit',$userProfile->userId) }}">Settings</a> | 
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
				<form method="post" action="{{ route('user.update',$userProfile->userId) }}">
					{{ csrf_field() }}
					 <input type="hidden" name="_method" value="PUT">
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" name="fullname" value="{{ $userProfile->fullname }}"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" name="email" value="{{ $userProfile->email }}"></td>
							</tr>
							<tr>
								<td colspan="2">
									<br/>
									<center>
										<a href="{{ route('user.show',$userProfile->userId) }}">Back</a> | 
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
					       <label style="color:red; ">{{ $error }}</label>
					    @endforeach
					 @endif
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>