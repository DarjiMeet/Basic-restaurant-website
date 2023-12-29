<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityTrekker</title>
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="contact.css">
    
</head>
<body>
<div>
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
          <li class="welcome-para" >Hello <span class="welcome-para" id="username"><?php session_start();  echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></span></li>
          <!-- <li><button class="login-button" href="#">LOGIN</button></li>
          <li><button class="join-button" href="#">SIGNUP</button></li> -->
      </ul>
    </nav>
    <div class="container">
    <h1>Contact CityTrekker</h1>
        <div class="contact-info">
            <p>If you have any questions or feedback about CityTrekker, feel free to contact us</p>
            <div class="author">
                <strong>Dev Barai</strong>
                <br>
                Email: <a href="mailto:devbarai.21.cs@iite.indusuni.ac.in">devbarai.21.cs@iite.indusuni.ac.in</a>
            </div>
            <div class="author">
                <strong>Meet Darji</strong>
                <br>
                Email: <a href="mailto:meetdarji.21.cs@iite.indusuni.ac.in">meetdarji.21.cs@iite.indusuni.ac.in</a>
            </div>
        </div>
    </div>
    <div class="footer">
  <a href="about.php">About</a> | <a href="contact.php">Contact</a> | <a href="index.php">Home</a>
  <p class="copyright">&copy; 2023 - City Trekker</p>
</div>
</div>

<script src="contact.js"></script>
</body>

</html>