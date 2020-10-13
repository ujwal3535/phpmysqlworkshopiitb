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
  	<input type="text" name="s5" placeholder="Subject5"><br><br>
  	<input type="submit"><br><br></form>
<?php
$e=$_POST["s5"];
$n=$_POST["name"];
$conn=mysqli_connect("localhost","root","","test") or die('not connected');
$fetch="SELECT sub1,sub2,sub3,sub4 from class1 where name='Rohan'";
$result=mysqli_query($conn,$fetch);
 while($row = mysqli_fetch_assoc($result)) {
         $a=$row["sub1"];
         $b=$row["sub2"];
         $c=$row["sub3"];
         $d=$row["sub4"];  
      }
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
$query="UPDATE class1 SET sub5='$e',total='$t',percent='$p' WHERE name='Rohan'";
mysqli_query($conn,$query) or die(mysqli_error($conn));
?>
</body>
</html>