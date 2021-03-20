<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	First Name <input type="name" name="fname"><br>
	Last Name <input type="name" name="lname"><br>
	Email <input type="email" name="email"><br>
	Phone <input type="number" name="phone"><br>
	Company Name <select name="company">
		<option>Select Company</option>
		<option>Company ID</option>
	</select><br>
	<input type="submit" name="submit">
</form>
</body>
</html>