@extends('layouts.admin.master')

@section('main-content')
   <h3>User Statistics</h3>
		<table border="1">
			<tr>
				<th>USER TYPE</th>
				<th>TOTAL USER</th>
			</tr>
			<tr>
				<td>Admin</td>
				<td>{{ $admincount }}</td>
			</tr>
			<tr>
				<td>User</td>
				<td>{{ $usercount }}</td>
			</tr>
		</table>
		<br/>
		<br/>
		<h3>User Activity</h3>
		<table border="1">
			<tr>
				<th>INACTIVE SINCE</th>
				<th>TOTAL USER</th>
				<th>DETAILS</th>
			</tr>
			@for($i = 0; $i<count($arr); $i++)
				<tr>
					<td>3 - 6 Months</td>
					<td>1</td>
					<td><a href="#">Details</a></td>
				</tr>
				<tr>
					<td>6 - 9 Months</td>
					<td>0</td>
					<td><a href="#">Details</a></td>
				</tr>
				<tr>
					<td>9 - 12 Months</td>
					<td>0</td>
					<td><a href="#">Details</a></td>
				</tr>
				<tr>
					<td>More than 12 Months</td>
					<td>1</td>
					<td><a href="#">Details</a></td>
				</tr>
			@endfor
		</table>
@endsection