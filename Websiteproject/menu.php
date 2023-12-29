<?php 
require 'config.php';
if(!empty($_SESSION['id'])){
    $email2=$_SESSION['id'];
   
   $result=mysqli_query($conn,"SELECT * FROM customer WHERE Srno='$email2'");
   $row = mysqli_fetch_assoc($result) ;
}
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // collect value of input field
    if(isset($_POST['submit2'])){

    $order =  $_POST['order'];
    $price = $_POST['price'];
   
    if($row['activeorder']==NULL){
        $sql="UPDATE customer SET activeorder ='$order', price = '$price' WHERE Srno='$email2'";
        mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Your order is place successfully ')</script>";
        }
    }
    else{
        echo "<script>alert('Cannot Order!,Please login again to order again')</script>";
    }
    }
    else{
        echo "";
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="flavor_fusion_logo_(1).avif"  type="image/x-icon">
    <title>Your Order</title>
   
    <link rel="stylesheet" href="order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Roboto:wght@100;300&family=Young+Serif&display=swap" rel="stylesheet">
    <style>
        /* header */
        *{
    margin: 0;
    padding: 0;
   
}

.container{
    /* display: flex;
    justify-content: space-between; */
    background-color: #461b1bcf;
    width: 100%;
    height: 50px;
    position: fixed;
    z-index: 1;
   
   
}
.navbar{
    display: flex !important;
    justify-content: space-between;
    padding: 0 10px;
    margin-left: 0% !important;
    height: 50px;
    align-items: center;
   
    
}
.left img{
    
    height: 100px;
}

svg{
    visibility: hidden;
}



.list{
    display: flex;
    list-style: none;
  
}

.list li{
    padding: 14px 31px;
   
}
.item{
    color:white;
    font-size: 16px;
    font-weight: 500px;
}



a{
    color: white;
    text-decoration: none;
}

a:visited{
    color: white;
}
a:hover {
    color:rgba(163, 62, 62, 0.858);
}
a:active {
    color: rgba(163, 62, 62, 0.858);
    background-color: transparent;
    text-decoration: underline;
  }


.toogle{
    position: fixed;
    right: 0;
    z-index: 1;
    top: 49px;
    background-color: #461b1bcf;
    width: 103px;
    
}
.togglelist{
    list-style: none;
}
.togglelist li{
    padding: 10px 5px;
}

@media screen and (max-width: 800px) {
    .list {
      display: none;
    }
    svg{
        visibility: visible;
    }
    
  }
  /* section */
        ol{
            padding: 61px 40px;
            font-size: 21px;
            color:brown
        }
       ol li{
            padding:20px 3px;
            border:2px solid brown;
            margin:10px
           
        }
        .edit{
            text-align:center;
            padding-top:15px;
            position: relative;
            bottom: 20vh;
        }
        .editorder:hover{
            cursor:pointer;
            border: 5px solid rgb(0, 0, 0);
            background-color: rgba(161, 67, 67, 0.678);
            
        }
        .editorder{
            min-width:  17vw;
            height: 4vh;
            background-color: rgba(163, 62, 62, 0.858);
            border-radius: 10px
        }
        .button{
            text-align:center;
            padding-top: 50px;
        }
        .order{

            width:60vw;
            height:50px;
            background-color: rgba(163, 62, 62, 0.858);
            color:white;
            border-radius:5px;
            font-size:18px;
        }
        .confirm{

            width:60vw;
            height:50px;
            background-color: rgba(163, 62, 62, 0.858);
            color:white;
            border-radius:5px;
            font-size:18px;
        }
        .order:hover{
            border: 5px solid rgb(0, 0, 0);
            background-color: rgba(161, 67, 67, 0.678);
        }
        .editorder a:hover{
            color:white;
        }
        input{
        margin: 10px 48px;
        padding: auto;
        padding: 2px 5px;
        min-width: 300px;
       
        height: 3vh;
        border-radius: 5px;
        border: 2px solid black;
        
        }
        #details{
            margin: 10px 48px;
        }
        .editorder{
            color:white !important;
        }


    </style>
</head>
<body>
<body>
<header>
        <div class="container item" id="contain">
          
            <nav class="navbar">
                <div class="left"><a href="Home.html" class="icon"> <img   src="flavor_fusion_logo_(1).avif" height="70"  alt="logo"></a></div>
                <ul class="list">
                <li><a href="menu.html">Menu</a></li>
                <li><a href="Home.html#About Us">About Us</a></li>
               
                <li><a href="menu.php">Your Order</a></li>
                <li><a href="active.php">Orders Details</a></li>
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
                <li><a href="#About Us">About Us</a></li>
               
                <li><a href="menu.php">Your Order</a></li>
                <li class='details'><a href="active.php">Orders Details</a></li>
                <li><a href="logout.php">LogOut</a></li>
            </ul>
        </div>
      
    </header>

<section>
<div class="get_elements">
    <form action="menu.php" method="post">
    <ol>
 <?php 
  
    if(isset($_POST['submit']))
    {
        $menu=$_POST['chk'];
        $values=$_POST['getValue'];
        
        foreach($menu as $x)
        {
           
            echo "<li class='elements'><strong>$x</strong></li>";
        }
        
        foreach($values as $v)
        {
            echo "<div>Price= <em>$v</em></div>";
        }
        

       
        
        
    }
    
   
     
    
   
    
       
     
    
 ?>
 </ol>
 
 <input  class="get_order" type="hidden" name='order' value='null' > <br>
 <input class="get_price" type="hidden" name='price' value='null'>

 </div>
 <div class="button">
   
    <input class='order' type='submit' name='submit2' value='Place Your Order' >
 </div>
 


 </form>
 </div>
 <div class="value">Please Select your order from menu</div>
 <div class="edit">
 <a id='editorder' href="menu.html"><button class="editorder">ResetOrder</button></a>
 </div>
 
 <div class="button">
 <button class="confirm">Confirm !</button>
 </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="order.js"></script>

<script>

    if($('.elements').length==0){
        $('.value').show()
        $('.get_elements').hide()
        $('.confirm').hide()
        $('.order').hide()
        $('.editorder').hide()
    }
    else{

        $('.value').hide()
        $('.order').hide()

    $(' .confirm').on('click',function(){
        const getorder = [];
        for(var i=0; i<$('.elements').length;i++){
            var o= document.querySelectorAll('.elements')[i].innerText;
            getorder.push(o);
        }
        
        // $('.get_order').attr('value',getorder)
        // var p=document.querySelector('em').innerText;
        // $('.get_price').attr('value',p)
        $('.confirm').hide()
        $('.order').show()
        $('.editorder').hide();
        $('ent_val').prop('disabled',true);
       

    })

    $('.order').on('click',function(){
        $('.order').hide()
        $('input').hide()
       
       
      
    //    alert('Your order is place successfully ')
    })

    var rand=Math.floor(Math.random()*100)
    console.log(rand)
}
</script>

</body>
</html>
