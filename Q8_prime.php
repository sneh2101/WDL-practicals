<html>
	<head>
	</head>
	<body>
		<form action="" method="post">
			<label> Enter the first number : </label>
			<input type ="number" name = "n1" required><br>
			<label> Enter the second number : </label>
			<input type ="number" name = "n2" required><br>
			<input type ="submit">
		</form>
	
<?php
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];

while($num1 < $num2 )
{
	$flag = 0;
	for($x =2; $x < $num1/2 ; $x++)
	{
		if($num1 % $x == 0)
		{
			$flag = 0;
			break;
			
		}
		else
		{
			$flag =1;
		}
	}
	if($flag == 1)
	{
		echo $num1;
		echo " ";
	}
	$num1++;
}
?>
</body>
</html>