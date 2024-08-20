<?php

@include 'config.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // echo($full_name,$email,$message);

    if (!empty($full_name) && !empty($email) && !empty($message)) {
        
        $sql = "INSERT INTO feedback_form (full_name, email, message) VALUES (?, ?, ?)";
        
        $stmt = mysqli_prepare($conn, $sql);
        
        mysqli_stmt_bind_param($stmt, "sss", $full_name, $email, $message);
        
        if(mysqli_stmt_execute($stmt)){
            $success_message = "Feedback submitted successfully";
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);
        
    } else {
        $error = "Error: Required fields are empty";
    }
}

?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="visit.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" 
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous"> -->
     
    <title>Visit Us</title>
</head>




<body>
    <body>
        <div class="navbar">
            <div class="navbar-container">
                <div class="logo-container"><h1 class="logo">Cineplax Theater</h1></div>
                <div class="home-container"><a href="index.php">Home</a></div>
                <div class="tickets-container"><a href="tickets.php">Tickets</a></div>
                <div class="events-container"><a href="Events.php">Events</a></div>
                <div class="visit-container"><a href="visit.php">Visit</a></div>
            </div>   
        </div>


















  <!-- Feedback Form -->
  <!-- <br><br><br> -->
  <section class="contact">
    <div class="content">
      <!-- <h2>Contact Us</h2> <br> -->
      <p>
        Thank you for choosing us for your movie experience. <br>Your satisfaction means everything to us! 
        Feel free to share your thoughts, suggestions, or any feedback you have. <br>Your input helps us improve and ensures that we continue to provide the best movie-watching experience possible. 
        <br>See you at the movies again soon! 🎥🍿
      </p> <br> <br> <br>
    </div>


    <div class="container">

      <div class="contact-info">
        <br>
        <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
          <div class="text">
            <h3>Address</h3> <br>
            <p> No B26,<br>King Street,<br>Kandy</p>
          </div>
        </div>
        <br>
        <div class="box">
          <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
          </div>
          <div class="text">
            <h3>Phone</h3> <br>
            <p>+94 81 345 7643</p>
          </div>
        </div>
        <br>
        <div class="box">
          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
          </div>
          <div class="text">
            <h3>Email</h3> <br>
            <p>cineplaxtheater@gmail.com</p>
          </div>
        </div>
      </div> <br><br>

      <div class="contact-form"> 
        <form action="" method="post">

        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            }
        }
        ?>    


          <h2>Send Message</h2>
          <div class="input-box">
            <input type="text" name="full_name" required="required">
            <span>Full Name</span>
          </div>
          <div class="input-box">
            <input type="text" name="email" required="required">
            <span>Email</span>
          </div>
          <div class="input-box">
            <textarea required="required" name="message"></textarea>
            <span>Type your message</span>
          </div>
          <div class="input-box">
            <input type="submit" name="" value="Send">
          </div>
        </form>
      </div>


    </div>

  </section>











  


   <!-- Visit Page Footer -->

   <footer>
    <div class="footer-container">
      <div class="social-icons">
        <a href=""><i class="fa-brands fa-facebook"> </i></a>
        <a href=""><i class="fa-brands fa-instagram"> </i></a>
        <a href=""><i class="fa-brands fa-twitter"> </i></a>
      </div>
      <div class="footer-nav"> 
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="tickets.php">Tickets</a></li>
          <li><a href="Events.php">Events</a></li>
          <li><a href="visit.php">Contact Us</a></li>
        </ul>
      </div>
     
    </div>
    <div class="footer-bottom">
      <p>Copyright &copy;2024; Designed by <span class="designer">Chalith</span> </p>
    </div>
  </footer>






</body>



</html>