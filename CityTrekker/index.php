<?php
    session_start();
   session_destroy();
   session_start();
   
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityTrekker</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
   <div ng-controller = "myController">
    <nav>
      <div class="logo">
        <a href="index.php">
          <img src="CityTrekker.png" alt="CityTrekker">
        </a>
          
      </div>
      <div class="hamburger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
      </div>
      <ul class="nav-links">
          <li><div class="logo">
            <img src="A Tourist Place Suggestor.gif" alt="A Tourist Place Suggestor">
        </div></li>
        <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a>  </li>
          <li class="welcome-para" >Hello <span class="welcome-para" id="username">{{username}}</span></li>
          <!-- <li><button class="login-button" href="#">LOGIN</button></li>
          <li><button class="join-button" href="#">SIGNUP</button></li> -->
      </ul>
    </nav>
    
  <div class="container">
    <h1 class="welcome-title">Welcome to CityTrekker</h1> 
    <p class="welcome-para">Are you ready for your next adventure? Whether you're a seasoned traveler or a newbie explorer, we're here to help you discover your next dream destination. This Tourist Place Suggestor is your one-stop destination for travel inspiration, personalized recommendations, and all the information you need to plan your perfect getaway. Find Country codes <a href="countrycodes.php">Here</a></p>
    <div class="form-container">
      <form action="main.php" method="get">
        <h3 class="title-text">ENTER YOUR OPTIONS</h3>
        <div>
        <input type="text" name="username" id="username" placeholder="Enter Username" ng-model="username" required autocomplete="TRUE">
        </div>
       
       <div>
         <input type="text" name="searchcity" id="search-city" placeholder="Region, city, village, etc. (e.g. Moscow)" required> 
         
       </div>

       <div>
       
       <select id="countrySelect" name="countrycode" required>
        <option value> Select a Country </option>
       </select> 
        
       </div>

       <div>
         <input type="number" name="placeradius" id="place-radius" placeholder="Enter Radius(KM)" required> 
       </div>

       <div>
        <input id="search-btn" type="submit" value="Search">
       </div>
       <h6 class="title-text">Remember : On Visiting Home Page,You will Log OUT!</h6>
    </form>
    </div>
    
  </div>
  <div class="footer">
  <a href="about.php">About</a> | <a href="contact.php">Contact</a>
  <p class="copyright">&copy; 2023 - City Trekker</p>
</div>
   </div>
  
  <script>
    var app = angular.module('myApp', []);
    
    app.controller('myController', function($scope) {
      
    });
  </script>
  <script src="index.js"></script>
</body>

</html>