<?php
  session_start();
  include('conn.php'); 
  $To=$_POST['mail'];
  $User=$_SESSION['sess_user'];
  $x="SELECT * From marks WHERE username='".($User)."'";
  $get=mysqli_query($conn,$x) or die(mysqli_error($conn));
  if(isset($_SESSION['sess_user']))
   { 
     $id=$_SESSION['sess_user'];
    while($row= mysqli_fetch_assoc($get))
{
    
    $msg="Php score:".$row['sub1']."<br><br>Mysql Score:".$row['sub2']."<br><br>Html:".$row['sub3']."<br><br>Percentage".$row['percent'];
   
}
}
$m=mail($To,$id,$msg);
if($m==true)
{
  echo "Mail sent Succesfully";
}
?>