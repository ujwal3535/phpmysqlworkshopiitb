<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system using php and Mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>

<div class="content">
	<?php if(isset($_SESSION['success'])): ?>
		<div class="error success">
	<h3>
		<?php
		   echo $_SESSION['success'];
		   unset($_SESSION['success']);
		   ?>
    </h3>
</div>
	

	<?php if(isset($_SESSION["username"])): ?>
		<p>Welcome<strong><?php echo $_SESSION['username'];?></strong></p>
		<p><a href="" style="color:red;">Logout</a></p>
			<?php else:() ?>

</div>
</body>
</html>