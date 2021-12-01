<?php

include 'dbcon.php';
include('session.php'); 
if(isset($_GET['delteteid'])){
    $id=$_GET['delteteid'];

    $sql="delete from [users] where user_id=$id";
    $result=sqlsrv_query($con,$sql);
    if($result){
          
                                        header('location:display.php');

    }else{
              ?>
                                         <script>
                                             alert("DATA NOT DELETED");
                                             die(sqlsrv_error($con));
                                         </script>
                                    <?php
    }
}

?>
