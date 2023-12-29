<?php 
session_start();

    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        $name = $_GET['username'];
        $_SESSION['username'] = $name;
        $city = $_GET['searchcity'];
        $countryCode = $_GET['countrycode'];
        $radius = $_GET['placeradius']*1000;
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "citytrekker";
        $conn = new mysqli($host, $username, $password, $database);
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (username,place,country,radius) VALUES ('$name','$city','$countryCode','$radius')";
    
        if ($conn->query($sql) === TRUE) {
            //  echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
    $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <title>CityTrekker</title>
    <link rel="stylesheet" href="main.css">
    
</head>

<body>
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
          <li class="welcome-para" >Hello <span class="welcome-para" id="username"><?php echo $name; ?></span></li>
          <!-- <li><button class="login-button" href="#">LOGIN</button></li>
          <li><button class="join-button" href="#">SIGNUP</button></li> -->
      </ul>
    </nav>
    <div class="container">
    

    <div id="info"></div>
    <div class="row">
        <div class="column-1">
            <div id="list" class="list-group"></div>
            <div class="btn-container">
            <button id="next_button" type="button">
                    Next
                </button>
            </div>
        </div>
        <div class="column-2">
            <div id="poi"></div>
        </div>
    </div>
</div>

    <script>
        var countrycode = "<?php echo $countryCode; ?>";
        var city = "<?php echo $city; ?>";
        var radius = "<?php echo $radius; ?>";
    </script>
    <script src="main.js"></script>
</body>
</html>