<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'] )){
    header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="formstyle.css">

</head>
<body>

<div class="container">

    <div class="content">
        <h3>Hi, <span>User</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['user_name']?></span></h1>
        <!-- <p>This is an user page</p> --> <br>
        <a href="tickets.php" class="btn">Buy Tickets</a>
        <a href="logout.php" class="btn">Logout</a>


    </div>

</div>
    
</body>
</html>