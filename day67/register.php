<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['gender'];
$d=$_POST['pass'];
include('conn.php');
echo"conn established"; 
$x="Insert into register(username,email,gender,pass) values('$a','$b','$c','$d')";
mysqli_query($conn,$x) or die(mysqli_error($conn));
header('Location:login.html');
?>