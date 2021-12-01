<?php 
include('dbcon.php');
include('session.php'); 

$result=sqlsrv_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=sqlsrv_fetch_array($result);



 ?>

<html>
<head>
    <title>GULJAG - HOME</title>
                     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link href="css/sb-admin-2.min.css" rel="stylesheet">
                    <link rel="icon" href="./media/download.jpg">
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >


</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="./add_client.php"  >ADD CLIENT</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" style="padding-left: 500px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
      
      </form>
      <div><h5 style="float: left; padding-left: 100px;">Welcome <?php echo $row['name']; ?> </h5></div>
        
       <div><a style="float: right; padding-left: 20px;" href="logout.php">Log out</a></div> 
    </div>
  </div>
</nav>

    <div>
        <button class="btn btn-primary"><a href="./display.php" class="text-light"> DISPLAY DATA</a></button>
    </div>

</body>
</html>