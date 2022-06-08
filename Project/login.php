<?php
   include("database.php"); //Include database connection
   session_start(); // start session
   // check to see if user is logged in
   if(isset($_SESSION["login_user"]) && $_SESSION["login_user"] == true){
    echo "You are already logged in and will be redirected to the home page in 5 seconds"; // display message informing the user they're logged in and redirection
    header( "refresh:5;url=index.html" ); // redirect user to index.html in 5 seconds
    exit; // terminate code from here
}
   // request login details and error handling
   include("loginform.php");
?>
<html>
   <head>
             <!-- Used for making the website responsive-->
             <meta name="viewport" content ="width=device-width, initial-scale=1.0">
             <!-- Import css stylesheet-->
             <link type="text/css" rel="stylesheet" href="style.css">
               
             <title>Login Page</title>
   </head>
      <div>
               <!-- Form for login details-->
               <form class = Login id = loginForm method = "post">
                  <h3>Enter Login Credentials</h3> <!-- Login Header-->

                  <!-- Label and input for username field -->
                  <label class = loginCred for="username">Username</label>
                  <input type = "text" name = "username" class = "box"/><br>
                  <!-- Label and input for password field -->
                  <label class = loginCred for="password">Password</label>
                  <input type = "password" name = "password" class = "box" /><br/>

                  <input class="submitLogin" type = "submit" value = " Login "/><br /> <!-- Login button of type submit -->
                  <?php
                     // displays error message above username and password fields
                     if(isset($msg)){
                        foreach($msg as $err){
                           echo $err."<br>";
                        }
                     }
                  ?>
               </form>
         </div>
      </div>
   </body>
</html>