<?php 
require 'config.php';
if(!empty($_SESSION['id'])){
    $email2=$_SESSION['id'];
   
   $result=mysqli_query($conn,"SELECT * FROM customer WHERE Srno='$email2'");
   $row = mysqli_fetch_assoc($result) ;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Orders</title>
    <link rel="stylesheet" href="active.css">
    <style>
        .ready{
            font-size: 17px;
            color: #76e076;
           
            
        }
        h2{
            padding-top:53px;
        }
        .display {
        padding: 5px 0;
        font-size: 16px;
        }
        .privious{
            padding:40px 0px;
        }
        #order_time{
            padding: 20 10px !important;
        }
        
    </style>
</head>
<body>
<header>
        <div class="container item" id="contain">
          
            <nav class="navbar">
                <div class="left"><a href="Home.html" class="icon"> <img   src="flavor_fusion_logo_(1).avif" height="70"  alt="logo"></a></div>
                <ul class="list">
                <li><a href="menu.html">Menu</a></li>
                <li><a href="Home.html#About Us">About Us</a></li>
               
                <li><a href="menu.php">Your Order</a></li>
                <li><a href="active.php">Order Details</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
           <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 30 30">
            <path d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"></path>
          </svg>
        </div>
        
        </nav>
        <div class="toogle">
            <ul class="togglelist">
                <li><a href="menu.html">Menu</a></li>
                <li><a href="Home.html#About Us">About Us</a></li>
               
                <li><a href="menu.php">Your Order</a></li>
                <li class='details'><a href="active.php">Order Details</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
      
    </header>

<section>
    
        <h2><b>Order Details:</b></h2>
       
        
       
        <div class="order_details">
        <div class="privious"><h4>Privious Order:</h4>
        <div class="email display">Email=<?php echo $row['Email']; ?></div>
        <div class='yourorder display'>Order=<?php echo $row['priviousorder']; ?></div>
        </div>
        <div class="active"><h4>Active Order:</h4>
        <div class="email display">Email=<?php echo $row['Email']; ?></div>
        <div class='yourorder display'>Order=<span class='span'><?php echo $row['activeorder']; ?></span></div>
       <div class="price display">Price=<span class='span'><?php echo $row['price']; ?></span></div>
        </div>
        
    </div>
   
    <div class="order_time" id='order_time' style="padding: 20px 10px;">Your Order will be ready in: 10mins </br>
Your Token Number is:105</div>
    <div class="sub"><input type="submit" name='sub' value='click' required value></div>
    
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $('.sub').hide()
    $('.toogle').hide()
    $('svg').on('click',function(){
    $('.toogle').toggle()
    })
   
for(var i=0; i<$('.span').length;i++){
    var a = document.querySelectorAll('.span')[i].innerText
   if(a===""){
    
    $('.active').length=0
    $('.active').hide()
    $('.order_time').hide()
   }
}
  
   
    
    
    
</script>
</body>
</html>