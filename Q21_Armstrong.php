<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
		Enter a number : <input type = "text" name ="num" required><br>
		<input type ="submit">
	</form>
	<?php
	$num1 = $_POST['num'];
	$num2 = $num1;
	$sum = 0;
	
	while($num2 > 0)
	{
		$d= $num2%10;
		$temp = $d*$d*$d;
		$sum = $sum + $temp;
		$num2 = $num2/10;
	}
	if($sum == $num1)
	{
		echo $num1;
		echo " is an armstrong number ";
	}
	else
	{
		echo $num1;
		echo " is not an armstrong number ";
	}
	?>
</body>
</html>