<!DOCTYPE html>
<html>
<head>
	<title>Edit Company</title>
</head>
<body>
<form action="{{ route('company.update', $companies->id)}}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	Name <input type="name" name="name" value="{{ $companies->name }}"><br>
	Email <input type="email" name="email" value="{{ $companies->email }}"><br>
	Logo <input type="file" name="logo" >
	<img src="/image/logo/{{ $companies->logo }}" width="100" height="100"><br>
	Website <input type="name" name="website" value="{{ $companies->website }}"><br>
	<input type="submit" name="update" value="Update">
</form>
</body>
</html>