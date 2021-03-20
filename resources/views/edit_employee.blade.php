<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>
<form action="" method="POST">
	@csrf
	First Name <input type="name" name="fname" vaue=""><br>
	Last Name <input type="name" name="lname" vaue=""><br>
	Email <input type="email" name="email" vaue=""><br>
	Phone <input type="number" name="phone" vaue=""><br>
	Company Name <select name="company">
		<option>Select Company</option>
		<option>Company ID</option>
	</select><br>
	<input type="submit" name="update">
</form>
</body>
</html>