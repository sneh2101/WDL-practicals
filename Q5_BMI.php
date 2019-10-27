<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
			Enter the height in metres: <input type="text" required name ="height"><br>
			Enter the weight in kilograms: <input type="text" required name ="weight"><br>
			<input type="submit">
		</form>
		<?php
		$h = $_POST['height'];
		$w = $_POST['weight'];
		$hs = $h*$h;
		$BMI = $w/$hs;
		echo "The calculated BMI is ";
		echo $BMI;
		echo "<br>";
		?>
	</body>
</html>