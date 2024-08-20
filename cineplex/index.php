<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cineplax Theater</title>
</head>

<body>

    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">Cineplax Theater</h1></div>
            <!-- <div class="home-container"><a href="index.html">Home</a></div> -->
            <div class="tickets-container"><a href="tickets.php">Tickets</a></div>
            <div class="events-container"><a href="Events.php">Events</a></div>
            <div class="visit-container"><a href="visit.php">Visit</a></div>
            <div class="login-container"><a href="register_form.php">Login</a></div>
        </div>   
        <div class="search">
          <input type="text" placeholder="Search"/>
          <i class="fa fa-search" aria-hidden="true"></i>
        </div>
        <!-- <button class="btnlogin">
          <i class="fa fa-user-circle" aria-hidden="true"></i> Login </button> -->
    </div>

    <br>






    <div class="mySlides fade">
        <!-- <div class="numbertext">1 / 5</div> -->
        <img src="images/Slideshow/Aquaman.jpeg" style="width:100%" height="650px">
        <!-- <div class="text">Aquaman 2</div> -->
      </div>
    
      <div class="mySlides fade">
        <!-- <div class="numbertext">2 / 5</div> -->
        <img src="images/Slideshow/Beekeeper.jpeg" style="width:100%" height="650px">
        <!-- <div class="text">The Beekeeper</div> -->
      </div>
    
      <div class="mySlides fade">
        <!-- <div class="numbertext">3 / 5</div> -->
        <img src="images/Slideshow/Kong.jpeg" style="width:100%" height="650px">
        <!-- <div class="text">Godzila vs Kong</div> -->
      </div>
    
      <div class="mySlides fade">
        <!-- <div class="numbertext">4 / 5</div> -->
        <img src="images/Slideshow/Openheimer.jpeg" style="width:100%" height="650px">
        <!-- <div class="text">The Openheimer</div> -->
      </div>
    
      <div class="mySlides fade">
        <!-- <div class="numbertext">5 / 5</div> -->
        <img src="images/Slideshow/wonka.jpg" style="width:100%" height="650px">
        <!-- <div class="text">Wonka</div> -->
      </div>
    
      <!-- Next and previous buttons
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br> -->
    
      </div>
     
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
    
      
      <script>
      let slideIndex = 0;
      showSlides();
      
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
      }
      </script>


      <div class="intro">
              
      <br><p class="welcome">Welcome to Cineplax Theater!</p><br>

      <!-- where cinematic dreams come to life -->

       <p> Nestled in the heart of Kandy, our theater is a haven for movie enthusiasts seeking the ultimate entertainment experience.<br>
        With state-of-the-art facilities, plush seating, and a diverse selection of films, we cater to every taste and preference. 
        Whether you're craving the latest Hollywood blockbuster, indie gems, or timeless classics, 
        our screens light up with stories that captivate, inspire,<br> and transport you to new worlds. 
        Join us for an unforgettable journey through the magic of cinema at Cineplax Theater.</p></div> <br><br>



        <div class="container">

          <div class="movie-list-container">
            <h1 class="movie-list-title">NOW SHOWING</h1>
              <div class="movie-list-wrapper">
                <div class="movie-list">
                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/Avatar.jpeg" alt="">
                    <span class="movie-list-item-title">Avatar</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=5PSNL1qE6VY">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/Nemo.jpeg" alt="">
                    <span class="movie-list-item-title">Nemo</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=2zLkasScy7A">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/Batman.jpeg" alt="">
                    <span class="movie-list-item-title">Batman</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=mqqft2x_Aa4&t=5s">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/bumblebee.jpeg" alt="">
                    <span class="movie-list-item-title">Bumblebee</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=lcwmDAYt22k">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/intersteller.jpeg" alt="">
                    <span class="movie-list-item-title">Intersteller</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=zSWdZVtXT7E">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/star wars.jpeg" alt="">
                    <span class="movie-list-item-title">Star Wars</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=8Qn_spdM5Zg">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/brave.jpeg" alt="">
                    <span class="movie-list-item-title">Brave</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button">Buy Tickets</button>
                      <button class="movie-list-item-button-2"><a href="https://www.youtube.com/watch?v=TEHWDA_6e3M">View More</a></button>
                  </div>

                </div>

                <i class="fa fa-arrow-right arrow" aria-hidden="true"></i>

              </div>
              
          </div>




          
          <div class="movie-list-container">
            <h1 class="movie-list-title">COMING SOON</h1>
              <div class="movie-list-wrapper">
                <div class="movie-list">
                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/Argylle.jpeg" alt="">
                    <span class="movie-list-item-title">Argylle</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=7mgu9mNZ8Hk">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/dune.jpeg" alt="">
                    <span class="movie-list-item-title">Dune</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=8g18jFHCLXk">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/G VS K.jpg" alt="">
                    <span class="movie-list-item-title">Godzila vs Kong</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=odM92ap8_c0">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/Kung fu Panda 4.jpeg" alt="">
                    <span class="movie-list-item-title">Kung Fu Panda 4</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=_inKs4eeHiI">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/the first omen .jpeg" alt="">
                    <span class="movie-list-item-title">The First Omen</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=H4xk8yLiFwM">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/venom 3.jpeg" alt="">
                    <span class="movie-list-item-title">Venom 3</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=uWfGGw-KGtQ">View More</a></button>
                  </div>

                  <div class="movie-list-item">
                    <img class="movie-list-item-img" src="images/coming soon/ghostbusters frozen empire .jpg" alt="">
                    <span class="movie-list-item-title">Ghostbusters Frozen Empire</span>
                    <!-- <p class="movie-list-item-desc">On the lush alien world of Pandora live the Na'vi, beings who appear primitive but are highly evolved. 
                      Because the planet's environment is poisonous, human/Na'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. 
                      Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na'vi woman (Zoe Saldana). 
                      As a bond with her grows, he is drawn into a battle for the survival of her world.</p> -->
                      <button class="movie-list-item-button"><a href="https://www.youtube.com/watch?v=6hjlyknlTaw">View More</a></button>
                  </div>

                </div>

                <i class="fa fa-arrow-right arrow" aria-hidden="true"></i>

              </div>
              
          </div>

        </div>

        <script src="app.js"></script>




        


        <!-- Home Page Footer -->

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