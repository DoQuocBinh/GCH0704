<!DOCTYPE html>
<html>
<head>
	<title>Processing</title>
</head>
<body>
	<?php 
		 $name = $_POST["txtName"];
		 $course = $_POST["cbCourse"];	
		 $birthday = $_POST["dob"];
		 $gender = $_POST["gender"];
		 $fav_book =$_POST["book"];
		 $fav_car = $_POST["car"];

	 ?>
	 <h2>Thank you <?php echo $name?>  for registering 
	 		<?php echo $course?>
	 </h2>
	 <ul>
	 	<li><?php echo $birthday?></li>
	 	<li><?php echo $gender?></li>
	 	<li><?php echo $fav_book?></li>
	 	<li><?php echo $fav_car?></li>
	 </ul>
	 <a href="Register.php">Back</a>
</body>
</html>