<html>
	<head>
	</head>
	<body>
		<form action="" method = "post">
		<label> Enter distance in kilometres: </label>
		<input type ="text" name ="distance" required><br>
		<label> Enter weight in kilograms: </label>
		<input type ="text" name ="weight" required><br>
		<input type ="submit" text="calculate">
	</form>
	<?php
	$h = $_POST['distance'];
	$w = $_POST['weight'];

	$hval = $h*1.6;
	echo "The distance in miles is ";
	echo $hval;
	echo "<br>";
	$wval = $w*2.204;
	echo "The weight in kilograms is ";
	echo $wval;
	
	?>
	</body>
</html>