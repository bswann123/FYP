<?php
   session_start(); // start session
   
   $user_check = $_SESSION['login_user']; 
   // query for comparing username against table to ensure the account exists
   $ses_sql = mysqli_query($conn,"SELECT id FROM users WHERE username = '$user_check' "); 
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC); // fetch query row
   $login_session = isset($row['username']) ? $row['username'] : ""; 
   
   //checks if user is logged in
   if(!isset($_SESSION['login_user'])){
      echo "Sorry, this page is inaccessible";
      header("location:login.php");
      exit();
   }
?>