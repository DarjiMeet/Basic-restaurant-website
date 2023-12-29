<?php 
    require 'config.php';
    if(isset($_POST['submited'])){
        $username=$_POST['Username'];
        $email=$_POST['email'];
        $password=$_POST['Password'];
        $confirm=$_POST['ConfirmPassword'];

        $duplicate=mysqli_query($conn,"SELECT * FROM customer WHERE   Email='$email'");

        if(mysqli_num_rows($duplicate)>0){
            echo "<script>alert(' Email is already taken');</script>";
        }
        else{
            if( $password == $confirm){
                $query = "INSERT INTO `customer` (`Srno`, `User_Name`, `Email`, `Password`, `time`) VALUES (NULL, ' $username', '$email', '$password', current_timestamp());";

                mysqli_query($conn,$query);

                echo "<script>alert('Registration Completed');</script>";
            }
            else{
                echo "<script>alert('Password does not match');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   
    <link rel="stylesheet" href="regis.css">
    <link rel="shortcut icon" href="flavor_fusion_logo_(1).avif"  type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100;300&family=Young+Serif&display=swap" rel="stylesheet">

    <style>
    .input{
        margin: 10px;
        width: 50vw;
        height: 3vh;
        font-size: 16px;
        padding: 2px 5px;
        border-radius: 5px;
    }
    </style>
</head>
<body>
<header>
<form action="" method="post" autocomplete='off'>
<div class="container">
        <div class="details"><strong id='details'><h1>Register To Our Website :</strong></h1> <br>
            <input  class='input' type="text" name='Username' placeholder="Username" required value=""> <br>
            <input  class='input' type="email" name='email' placeholder="Email" required value="" > <br>
            <input  class='input' type="Password" name='Password' placeholder="Password" required value=""> <br>
            <input  class='input' type="Password" name='ConfirmPassword' placeholder="ConfirmPassword" required value=""> <br>
        <div class="button">
            <input class='login' type='submit' name='submited' value='Register' >
        </div>
        <div class="acc"><em>Already Have an account?</em><a href="login.php">login</a></div>

        </div>
</div>
</form>
<header>
</body>
</html>