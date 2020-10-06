<!DOCTYPE html>
<html>
<head>
	<title>Triangle Dectotor</title>
</head>
<body>
  <form action="" method="GET">
  	<input type="text" name="side1" placeholder="side1"></input><br><br>
  	<input type="text" name="side2" placeholder="side2"></input><br><br>
  	<input type="text" name="side3" placeholder="side3"><br><br>
  	<input type="submit"><br><br>

  </form>
<?php
$a=$_GET['side1'];
$b=$_GET['side2'];
$c=$_GET['side3'];

if($a==$b && $b==$c)
{
	echo"Triangle is equilateral";
}
elseif($a==$b || $b==$c)
{
	echo "Triangle is isoscales";

}
else
{
	if($a*$a+$b*$b==$c*$c || $a*$a==$b*$b+$c*$c || $a*$a+$c*$c==+$b*$b)
	{
		echo"Triangle is right anglesd triangle";
	}
	else{
		echo "Triangle is Scaelen";
	}
}
?>
</body>
</html>