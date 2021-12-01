<?php
 include 'dbcon.php';
 include('session.php'); 
   
function getdata(){
        $data = array();
        $data[1] = $_POST['username'];
        $data[2] = $_POST['password'];
        $data[3] = $_POST['name'];
        return $data;
} 
 
  
            if(isset($_POST['addclient'])){
                $info = getdata();
                $insert = "INSERT INTO [users] ([username],[password],[name]) VALUES('$info[1]','$info[2]','$info[3]')";
                $sqldata = sqlsrv_query($con,$insert);
                            if ($sqldata) {
                                    header('location:display.php');
                                }
                            else{
                               ?>
                                     <script>
                                         alert("data is not inserted");
                                     </script>
                                <?php
                            }
                            
            }
            
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guljag - ADD CLIENT</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="icon" href="download.jpg">
        <link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2F3.imimg.com%2Fdata3%2FCJ%2FMO%2FMY-1358%2Fguljag-industries-limited-120x120.jpg&imgrefurl=https%3A%2F%2Fwww.indiamart.com%2Fguljag-inds-ltd%2Faboutus.html&tbnid=9F1xf0U48AIxGM&vet=12ahUKEwiL0OSx-pT0AhU4sksFHWfrAcUQMyghegUIARCzAQ..i&docid=jzNlbqZ4R4MKpM&w=120&h=109&q=guljag%20industries%20limited&ved=2ahUKEwiL0OSx-pT0AhU4sksFHWfrAcUQMyghegUIARCzAQ">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style type="text/css">
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 50px auto;
    text-align: center;
    width: 800px;
}
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 50;
    font-family: 'Lato';
    padding: 0px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
}
div.form-element {
    margin: 15px 0;
}
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: none;
}
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
p.error {
    background: orangered;
}

</style>

<body style="background-color: #2333;" >

<form method="POST" action="" name="signin-form">
    <h1> ADD NAME OF CLIENT </h1>
    <br />
  
  <div class="form-element">
    <label>USERNAME<sup style="color:red;">*</sup></label>
    <input type="text" name="username"  required />
  </div>
 <div class="form-element">
    <label>PASSWORD<sup style="color:red;">*</sup></label>
      <input type="password" name="password" required />
  </div>
<div class="form-element">
    <label>NAME<sup style="color:red;">*</sup></label>
      <input type="name" name="name" required />
  </div>

  <button type="SUBMIT" name="addclient" class="btn btn-primary btn-user btn-block" >ADD</button>

</form>

  <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>

</body>
</html>