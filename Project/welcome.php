<?php
   include("database.php"); // include database connection
   include("session.php"); // include session checking
?>
<html">
   
   <head>
      <title>Welcome</title>
   </head>
   
   <body>
      <h1>Sign in successful!</h1> <!-- Success message -->
      <?php echo "You will be redirected back to the home page in 5 seconds."; // redirect message
      ?>
        <meta http-equiv="refresh" content="5;url=index.html"> <!-- redirect link and seconds -->
      <h2><a href = "logout.php">Sign Out</a></h2> <!-- hyperlink for signing out -->
   </body>
   
</html>