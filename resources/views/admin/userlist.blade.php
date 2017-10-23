<!DOCTYPE html>
<html>
<head>
	<title>Users - User Manager</title>
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
				@if(Session::has('Success'))
						<label style="color:green;">{{ Session::get('Success') }}</label>
					@endif
				<h3>User List</h3>
					<form>
						<label>KEYWORD: </label>
						<input type="text">
						<input type="submit" value="Search">
					</form>
					<br/>
					<table border="1">
						<tr>
							<th>FULL NAME</th>
							<th>USERNAME</th>
							<th>TYPE</th>
							<th>OPTION</th>
						</tr>
						@if(count($userlist) > 0)
						   @foreach($userlist->all() as $user)
								<tr>
									<td><a href="details.html">{{ $user->fullname  }}</a></td>
									<td>{{ $user->username }}</td>
									<td>{{ $user->type }}</td>
									<td><a href="{{ route('admin.edit',$user->userId) }}">Edit</a> | <a href="{{ route('admin.destroy',$user->userId) }}" onclick="if(confirm('Are Your sure want to delete?')){
			                            event.preventDefault();
			                            document.getElementById('delete-form-{{ $user->userId }}').submit();
			                          }else{
			                            event.preventDefault();
			                          }">Delete</a></td>
									<form id="delete-form-{{ $user->userId }}" action="{{ route('admin.destroy',$user->userId) }}" style="display: none;" method="post">

										{{ csrf_field() }}

										{{ method_field('DELETE') }}

									</form>

								</tr>
							@endforeach
						@endif	 
					</table>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>