<html>
    <head>
     <link rel="stylesheet" type="text/css" href="css/SDstyle.css">
        <style>
        .sse{
	
    font-style: italic;
    color: skyblue;
    margin-left: 100px;
    margin-top: -10px; 
    }
#tbstyle {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

#tbstyle td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tbstyle tr:nth-child(even){background-color: #f2f2f2;}

#tbstyle tr:hover {background-color: #ddd;}

#tbstyle th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
      }
        </style>
    </head>
    <body>
          <header>
               <div class='logo'>Student Dashboard</div>
               <nav class='active'>
        <ul align=''>
             <li><a href=''  class='active'>Home</a></li>
                
             <li><a href='mail.html' align='left'>Email</a></li>         
          <li><a href='logout.php' align='left'>Logout</a></li>
        </ul>
      </nav>
    </header>     
     <table align="center" id="tbstyle" >
     <tr>
       <th>Php</th>
      <th>MySql</th>
      <th>Html</th>
     <th>Percentage</th>
     </tr>
<?php
  session_start();
  include('conn.php'); 
  $User=$_SESSION['sess_user'];
  $x="SELECT * From marks WHERE username='".($User)."'";
  $get=mysqli_query($conn,$x) or die(mysqli_error($conn));
  if(isset($_SESSION['sess_user']))
   { 
     $id=$_SESSION['sess_user'];
     echo "<br><br><br><br>   <h2 class='sse'>Welcome User:".$_SESSION['sess_user']."</h2>";
    while($row= mysqli_fetch_assoc($get))
{
    echo "<tr>";
    echo "<td>".$row['sub1']."</td>";
    echo "<td>".$row['sub2']."</td>";
    echo "<td>".$row['sub3']."</td>";
    echo "<td>".$row['percent']."</td>";
    echo "</tr>";
    
if($row['percent']>60)
 {
   echo "<br><br>   <h2 class='sse'>Congratulations</h2>";
 } 
}

   }
  else
  {
    
     }

?>
</table>
</body>
</html>