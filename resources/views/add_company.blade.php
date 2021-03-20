<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
</head>
<body>
<form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
	@csrf
	Name <input type="name" name="name"><br>
	Email <input type="email" name="email"><br>
	Logo <input type="file" name="logo"><br>
	Website <input type="name" name="website"><br>
	<input type="submit" name="submit">
</form>
</body>
</html>