<?php 
session_start(); 
 
include('dbcon.php'); 
 ?>
<html>
<head>
	<title>GULJAG - LOGIN</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="./media/download.jpg">
</head>
<body>

	<div>
		<img src="./media/download.jpg"  >
	</div>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Login </h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
	<?php
			if (isset($_POST['login']))
			{
				$username = $_POST['user'];
				$password = $_POST['pass'];
				
			
				$query = sqlsrv_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
				
				$row		= sqlsrv_fetch_array($query);
				$num_row 	= sqlsrv_num_rows($query);
				
				
				if ($query > 0) 
					{			
					
					$_SESSION['user_id'] = $row['user_id'];
						header('location:home.php');				
					}
				else
					{				 
							echo 'Invalid Username and Password Combination';
							
					}

			}

	?>
  <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  
</div>

</body>
</html>