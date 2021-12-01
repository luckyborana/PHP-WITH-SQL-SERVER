<?php
include 'dbcon.php';
include('session.php'); 
$id=$_GET['updateid'];
$sql="select * from users where user_id='$id'";
$result=sqlsrv_query($con,$sql);

$row=sqlsrv_fetch_array($result);

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];

     $sql = "UPDATE [users] set username='$username',password='$password',name='$name' where user_id='$id'";
     $result=sqlsrv_query($con,$sql);

     if($result){
                 
                                        header('location:display.php');  
               //echo "update succesfully";


     }else{
        echo "not updated";
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
    <h1>UPDATE DATA</h1>
                <div class="container my-5">
                    <form method="POST">
                        <div class="mb-3">
                          <label >NAME</label>
                          <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value=<?php echo $row['name']; ?> >
                        </div>
                         <div class="mb-3">
                          <label >username</label>
                          <input type="text" class="form-control" placeholder="Enter username" name="username" value=<?php echo $row['username']; ?> >
                        </div>
                        <div class="mb-3">
                          <label >Password</label>
                          <input type="Password" class="form-control" placeholder="Enter Password" name="password" value=<?php echo $row['password']; ?> >
                        </div>

                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                     </form>

                </div>
  </body>
</html>
</body>
</html>