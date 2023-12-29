<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CityTrekker</title>
        <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
        <link rel="stylesheet" href="about.css">
        
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
          <li class="welcome-para" >Hello <span class="welcome-para" id="username"><?php
                echo isset($_SESSION['username']) ? $_SESSION['username'] : '';
                ?></span></li>
          <!-- <li><button class="login-button" href="#">LOGIN</button></li>
          <li><button class="join-button" href="#">SIGNUP</button></li> -->
      </ul>
    </nav>
    <div class="container">

      <h3 class="welcome-title">About CityTrekker</h3>

      <p class="welcome-para">Welcome to CityTrekker, your ultimate destination for discovering the hidden gems and popular tourist spots in your city. CityTrekker was created by two passionate individuals, Dev Barai (Enrollment Number: IU2141230043) and Meet Darji (Enrollment Number: IU2141230032), who share a common love for exploring the beauty and culture of our city.</p>

      <h3 class="welcome-title">Our Mission</h3>

      <p class="welcome-para">At CityTrekker, our mission is to make your city exploration experience hassle-free and enjoyable. We understand that the best way to truly know a city is by discovering its local attractions, cuisine, and culture. We aim to provide you with the information you need to embark on memorable journeys within your city, whether you're a tourist or a local looking to rediscover your surroundings.</p>

      <h3 class="welcome-title">What Sets Us Apart</h3>

      <p class="welcome-para">CityTrekker stands out in the crowded world of travel and tourism websites thanks to the unique blend of technologies we use. Our website is built using a combination of HTML, CSS, PHP, JavaScript, and AngularJS. This advanced technology stack ensures that our platform is not only user-friendly but also highly interactive and responsive.</p>

      <p class="welcome-para">AngularJS, with its input name binding functionality, adds a dynamic touch to your search queries, making it easier for you to find the places you're looking for. We believe that a user-friendly interface and a smooth experience are crucial for helping you discover your city's treasures.</p>

      <h3 class="welcome-title">What You'll Find on CityTrekker</h3>

      <p class="welcome-para">Explore the Best Spots: CityTrekker provides an extensive list of the most captivating tourist attractions in your city. From historical landmarks to vibrant cultural hubs, we've got it all covered.</p>


      <h3 class="welcome-title">Join Us on Your Next Adventure</h3>

      <p class="welcome-para">CityTrekker is more than just a website; it's a gateway to unlocking the treasures of your city. Whether you're a seasoned traveler or a first-time explorer, we're here to guide you on your journey.</p>

      <p class="welcome-para">We're excited to be your companion as you embark on your next adventure in the heart of the city. Get ready to discover the hidden gems and renowned attractions your city has to offer, with CityTrekker as your trusty guide.</p>
    </div>
    <div class="footer">
    <a href="about.php">About</a> | <a href="contact.php">Contact</a> | <a href="index.php">Home</a>
  <p class="copyright">&copy; 2023 - City Trekker</p>
</div>
</div>



<script src="about.js"></script>
</body>
</html>