<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="booking.css">
    <script src="booking.js" defer></script>
</head>

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






















    <div class="main">
        <div class="tickets">
            <div class="ticket-selector">
                <div class="title">
                    Star Wars
                </div>
                <div class="seats">
                    <div class="status">
                        <div class="item">Available</div>
                        <div class="item">Booked</div>
                        <div class="item">Selected</div>

                    </div>
                    <div class="all-seats">
                        <input type="checkbox" name="tickets" id="s1">
                        <label for="s1" class="seat booked"></label>
                    </div>
                </div>
                <div class="screentext">All Eyes Here Please</div>
                <div class="timings">
                    <div class="dates">
                        <input type="radio" name="date" id="d1" checked>
                        <label for="d1" class="dates-item">
                            <div class="day">Fri</div>
                            <div class="date">12</div>
                        </label>
                        <input type="radio" name="date" id="d2">
                        <label for="d2" class="dates-item">
                            <div class="day">Sat</div>
                            <div class="date">13</div>
                        </label>
                        <input type="radio" name="date" id="d3">
                        <label for="d3" class="dates-item">
                            <div class="day">Sun</div>
                            <div class="date">14</div>
                        </label>
                        <input type="radio" name="date" id="d4">
                        <label for="d4" class="dates-item">
                            <div class="day">Mon</div>
                            <div class="date">15</div>
                        </label>
                        <input type="radio" name="date" id="d5">
                        <label for="d5" class="dates-item">
                            <div class="day">Tue</div>
                            <div class="date">16</div>
                        </label>
                        <input type="radio" name="date" id="d6">
                        <label for="d6" class="dates-item">
                            <div class="day">Wed</div>
                            <div class="date">17</div>
                        </label>
                        <input type="radio" name="date" id="d7">
                        <label for="d7" class="dates-item">
                            <div class="day">Thu</div>
                            <div class="date">18</div>
                        </label>
                    </div>
                    <div class="times">
                        <input type="radio" name="time" id="t1" checked>
                        <label for="t1" class="time">11:00</label>
                        <input type="radio" name="time" id="t2">
                        <label for="t2" class="time">14:30</label>
                        <input type="radio" name="time" id="t3">
                        <label for="t3" class="time">18:00</label>
                        <input type="radio" name="time" id="t4">
                        <label for="t4" class="time">21:30</label>
                    </div>
                </div>
            </div>
            <div class="price">
                <div class="total">
                    <span><span class="count">0</span> Tickets</span>
                    <div>LKR <div class="amount">0</div>
                    </div>
                </div>
                <button type="button">Book</button>
            </div>
        </div>
    </div>
















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