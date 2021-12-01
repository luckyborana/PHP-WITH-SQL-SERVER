<?php
include 'dbcon.php';
include('session.php'); 
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
     
 
      $sql = "INSERT INTO [users] ([username],[password],[name]) VALUES('$username','$password','$name')";

     $result=sqlsrv_query($con,$sql);
    
     if($result){
                   
                   header('location:display.php');


     }else{
        ?>
                                         <script>
                                             alert("NOT inserted");
                                             die(sqlsrv_error($con));
                                         </script>
                                    <?php
     }





}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>GULJAG</title>
  </head>
  <body>
<br />
    <h1>ADD CLIENT</h1>
                <div class="container my-5">
                    <form method="POST">
                        <div class="mb-3">
                          <label >NAME</label>
                          <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
                        </div>
                         <div class="mb-3">
                          <label >username</label>
                          <input type="text" class="form-control" placeholder="Enter username" name="username" required>
                        </div>
                        <div class="mb-3">
                          <label >Password</label>
                          <input type="Password" class="form-control" placeholder="Enter Password" name="password" required>
                        </div>

                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                     </form>

                </div>
  </body>
</html>
