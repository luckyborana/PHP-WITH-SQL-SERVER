<?php

include 'dbcon.php';
include('session.php'); 

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="icon"  href="./media/download.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>GULJAG</title>
</head>
<body>
		<div class="container">
			<button class="btn btn-primary my-5 "><a href="./user.php" class="text-light">Add CLIENT</a></button>
      <button class="btn btn-primary my-5 "><a href="./home.php" class="text-light">HOME PAGE</a></button>
			<table class="table">
  

     <?php

      $q2="select user_id,username,password,name from users";
$sqldata=sqlsrv_query($con,$q2);


echo '<table>';
echo "<tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th><th>NAME</th><th>EDIT</th><th>DELETE</th></tr>";

while($row = sqlsrv_fetch_array($sqldata, SQLSRV_FETCH_ASSOC)) {
  echo '<tr><td>';
  echo $row['user_id'];
  echo "</td><td>";
  echo $row['username'];
  echo "</td><td>";
  echo $row['password'];
  echo "</td><td>";
  echo $row['name'];
  echo "</td><td>";
  echo '<button class="btn btn-primary"><a href="update.php?updateid='.$row['user_id'].'" class="text-light">UPDATE</a></button>';
    echo "</td><td>";
  echo '<button class="btn btn-primary"><a href="delete.php?delteteid='.$row['user_id'].'" class="text-light">DELETE</a></button>';
  echo "</td></tr>";
}
echo "</table>";

     ?>



		</div>
	
</body>
</html>
