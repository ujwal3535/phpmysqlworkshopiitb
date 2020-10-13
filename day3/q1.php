<!DOCTYPE html>
<html>
<head>
	<title>Marks Submission</title>
	<style type="text/css">
		body{
             text-align: center; 
		     margin-top: 100px; 
		}
	</style>
</head>
<body>
	  <form action="" method="POST">
  	  	<input type="text" name="name" placeholder="Name"></input><br><br>
  	<input type="text" name="s1" placeholder="Subject1"></input><br><br>
  	<input type="text" name="s2" placeholder="Subject2"></input><br><br>
  	<input type="text" name="s3" placeholder="Subject3"><br><br>
  	<input type="text" name="s4" placeholder="Subject4"><br><br>
  	<input type="text" name="s5" placeholder="Subject5"><br><br>
  	<input type="submit"><br><br></form>
<?php
$a=$_POST["s1"];
$b=$_POST["s2"];
$c=$_POST["s3"];
$d=$_POST["s4"];
$e=$_POST["s5"];
$n=$_POST["name"];
$t=$a+$b+$c+$d+$e;
$p=($t*100)/500;
echo "Name :".$n;
echo "<br>";
echo "Marks in each subject";
echo "<br><br>";
echo "Subject1: ".$a."/100";
echo "<br><br>";
echo "Subject2: ".$b."/100";
echo "<br><br>";
echo "Subject3: ".$c."/100";
echo "<br><br>";
echo "Subject4: ".$d."/100";
echo "<br><br>";
echo "Subject5: ".$e."/100"     ;
echo "<br><br>";
echo "Total marks Obtained:".$t;
echo "<br><br>";
echo "Percentage: ".$p;
$conn=mysqli_connect("localhost","root","","test") or die('not connected');
$query="Insert into class1(ID,name,sub1,sub2,sub3,sub4,sub5,total,percent) values('?','$n','$a','$b','$c','$d','$e','$t','$p')";
mysqli_query($conn,$query) or die(mysqli_error($conn));
?>
</body>
</html>