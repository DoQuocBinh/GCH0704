<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=GWCourses', 'postgres', '');
		echo "done";
		
		$sql = "SELECT studentname, course FROM registercourse";
		$stmt = $pdo->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
				
	?>
	<ul>
		<?php  
			foreach ($resultSet as $row) {
			echo '<li>' .
				$row['studentname'] . ' --' . $row['course'] 
				. '</li>';
			}
		?>
	</ul>

</body>
</html>