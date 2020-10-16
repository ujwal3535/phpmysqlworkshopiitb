<?php
$hostname="localhost";
$db_user="root";
$db_pass="Omkar1"
$db_name="counter";


$connection=mysqli_connect($hostname,$db_user,$db_pass,$db_name);
if(mysqli_connect_errno()){
	die("Error connecting to the database");
}

$visitor_ip=$_SERVER['REMOTE_ADDR'];
$query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip'";
$result=mysqli_query($connection,$query);

if(!$result){
	die("Retriving Query Error<br>".$query);
}
$total_visitors=mysqli_num_rows($result);
if($total_visitors<1){
$query="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
$result=mysqli_query($connection,$query);


}
?>

<html>
<head>
 <title></title>
 <style type="text/css">
 	.wrapper{
 		height: 300px;
 		width:300px;
 		background-color: skyblue;
 		margin: auto;
 		text-align:center;
 		border:1px solid white;
 		box-shadow: 2px 2px 10px gray;

 	}
 	h1{
 		background-color: mediumseagreen;
 		color:white;
 		border-bottom:2px solid white;
 		}

 	h3{
 		font-size:5em;

 	}

 	h1,h3{
 		padding:20px;
 		margin:0px;
 	}
 </style>
</head>
<body>
	<div class="wrapper">
		<h1>
			Visitor count

</h1>
<h3><?php echo $total_visitors;?></h3>
</div>
</body>
</html>