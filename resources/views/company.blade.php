<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>S.N.</th>
		<th>Name</th>
		<th>Email</th>
		<th>Logo</th>
		<th>Website</th>
		<th>Action</th>
	</tr>
	@foreach($companies as $company)
	<tr>
		<td>{{ $loop->iteration }}</td>
		<td>{{ $company->name }}</td>
		<td>{{ $company->email }}</td>
		<td><img src="/image/logo/{{ $company->logo }}" width="100" height="100"></td>
		<td>{{ $company->website }}</td>
		<td><a href="{{ route('company.edit', $company->id) }}"><button type="button">Edit</button></a><form method="POST" action="{{ route('company.destroy' , $company->id) }}">@csrf @method('DELETE') <button type="submit">Delete</button></form></td>
	</tr>
	@endforeach
</table>
</body>
</html>