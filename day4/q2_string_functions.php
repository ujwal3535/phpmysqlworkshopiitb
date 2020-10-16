<!DOCTYPE html>
<html>
<head>
	<title>String functions</title>
</head>
<body>
    <form action="" method="Post">
    	<input type="text" name="string" placeholder="Type Anything...">
    </form>
</body>
</html>>
<?php

$str =$_POST['string'];
print_r (explode("String to array: ",$str));
echo "<br><br>";
print_r( "Number of chars are:".strlen($str));
echo "<br><br>";
echo ("Reverse a string:".strrev($str));
echo "<br><br>";
echo ("Characters to uppercase:".strtoupper($str));
echo "<br><br>";
echo ("Characters to lowercase:".strtolower($str));
echo "<br><br>"; 
$s="Hecco Worcd";  
// from and to terms 
$from = "c"; 
$to = "l"; 
// calling strtr() function 
$resStr = strtr($str, $from, $to); 
   
print_r("Sustring to string:".$resStr); 
?>