<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityTrekker</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="index.css">
    <style>
       table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 3px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
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
          <li class="welcome-para" >Hello <span class="welcome-para" id="username"></span></li>
          <!-- <li><button class="login-button" href="#">LOGIN</button></li>
          <li><button class="join-button" href="#">SIGNUP</button></li> -->
      </ul>
    </nav>
    <div class="container">
        
    </div>
    <div class="footer">
  <a href="about.php">About</a> | <a href="contact.php">Contact</a>
  <p class="copyright">&copy; 2023 - City Trekker</p>
</div>
</div>
    <script src="countrycodes.js"></script>
</body>

</html>