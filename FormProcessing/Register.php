<!DOCTYPE html>
<html>
<head>
	<title>Register the course</title>
</head>
<body>
	<form action="doRegister.php" method="post">
		<table border="0" width="50%">
			<tr>
				<td>Your name</td>
				<td><input type="text" name="txtName"></td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<select name="cbCourse">
						<option value="C#">C#</option>
						<option value="Java">Java</option>
						<option value="Cloud"> Cloud</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Date of Birth</td>
				<td><input type="Date" name="dob"/></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="Male">Nam
					<input type="radio" name="gender" value="Female">Nu
				</td>
				<tr>
					<td>Favorites</td>
					<td>
						<input type="checkbox" name="book" value="book">Books
						<input type="checkbox" name="car" value="car">Cars

					</td>
				</tr>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>