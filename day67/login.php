<?php   
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
    include('conn.php');  
    $x=("SELECT * FROM register WHERE username='$user' AND pass='$pass'");  
     $query=mysqli_query($conn,$x) or die(mysqli_error($conn));
     $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
      while($row=mysqli_fetch_assoc($query))  
      {  
        $dbUsername=$row['username'];  
        $dbPassword=$row['pass'];  
      }  
    
      if($user == $dbUsername && $pass == $dbPassword)  
      {  
        session_start();  
        $_SESSION['sess_user']=$user;    
        header('Location:dashboard.php');  
      }  
      else {  
    echo "Invalid username or password!";  
    }  
   }     
?>