<?php 
    require 'config.php';
    if(isset($_POST['submites'])){
        $email=$_POST['Email'];
        $password=$_POST['Password'];
        $sql="SELECT * from customer where  Email='$email'";
        $found = mysqli_query($conn,$sql);
        
        $row = mysqli_fetch_assoc($found);
           
            
        if(mysqli_num_rows($found) > 0){
            
           if($password == $row['Password']){
                $_SESSION['login']=true;
                $_SESSION['id']=$row['Srno'];
               

                header("Location: Home.html");
           }
           else{
            echo "<script>alert('Wrong password');</script>";
           }
        }
        else{
                echo "<script>alert('User not register');</script>";
            }
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
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
    body{
    margin: 0;
    }
    .acc{
    padding-top: 12px;
    font-weight: bold;
    }

    em{
    font-size: 20px;
    color: black;
    }

    a{
    color: #7e3f3f;
    }
    </style>

</head>
<body>
<header>
<form action="" method="post" >
<div class="container">
        <div class="details"><strong id='details'><h1>Login To Our Website :</strong></h1> <br>
            <input  class='input' type="email" name='Email' placeholder="Email"  required value> <br>
           
            <input  class='input' type="Password" name='Password' placeholder="Password" required value> <br>
        <div class="button">
            <input class='login' type='submit' name='submites' value='Login'  >
        </div>
        <div class="acc"><em>Didn't have an account?</em><a href="registration.php">Register</a></div>

        </div>
</div>
</form>
<header>
</body>
</html>