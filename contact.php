<?php

$name - $_POST['name'];
$email - $_POST['email'];
$phone - $_POST['phone'];
$subject - $_POST['subject'];
$message - $_POST['message'];

$mailheader - "Received from:" .$name. "<" .$email. ">\r\n";

$recipient = "20085833@imail.sunway.edu.my";

mail($recipient, $subject, $message, $mailheader) or die("Error! Please try again.");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <link rel="stylesheet" href="style.css">
  <!--<link rel="stylesheet" href="textbox.css">-->
  
</head>
<body>
  <main>
    <div class="wrapper light">
      <!--<img src="./pics/shape.png" alt="shape" class="shape">-->

      <!--navigation bar-->
      <header>
        <div class="container">
          <div class="logo">
            <a href="index.html"><img src="./pics/kodamatwo.png" alt="logo"></a>
            <a href="index.html"><h3>mentas</h3></a>
          </div>
          <div class="navlinks">
            <ul>
              <li><a href="about.html">about</a></li>
              <li><a href="resources.html">resources</a></li>
              <li><a href="contact.html">contact</a></li>
              <li><a href="#" class="button">register</a></li>
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="burgermenu">
            <div class="bar"></div>
          </div>
        </div>
      </header>


      
      <!--main content-->
      <div style="text-align: center; color: var(--dark1);">
        <h1 style="margin-bottom: 10px; font-size: 24px;">thanks for contacting us! we'll make sure to respond as soon as possible</h1>
        <p style="font-size: 18px;">return to <a href="index.html" style="color: red;">homepage</a>.</p>
      </div>



      <!--dark and light theme button-->
      <div class="endcontent">
        <div class="container">
          <button class="togglebutton">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
          </button>
        </div>
      </div>
    </div>
  </main>

  <script src="https://kit.fontawesome.com/0e06f04ff1.js" crossorigin="anonymous"></script>
  <script src="main.js"></script>
</body>
</html>


';