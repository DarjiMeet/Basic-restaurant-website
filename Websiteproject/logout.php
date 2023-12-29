<?php 
    require 'config.php';
    if(!empty($_SESSION['id'])){
        $email2=$_SESSION['id'];
       
       $result=mysqli_query($conn,"SELECT * FROM customer WHERE Srno='$email2'");
       $row = mysqli_fetch_assoc($result) ;
       $active=$row['activeorder'];

    }
    $sql="UPDATE customer SET priviousorder ='$active' WHERE Srno='$email2'";
    mysqli_query($conn,$sql);
    $query= "UPDATE customer SET activeorder =NULL,price=NULL WHERE Srno='$email2'";
    mysqli_query($conn,$query);

    $_SESSION=[];
    session_unset();
    session_destroy();
    header("Location: login.php");
    ?>