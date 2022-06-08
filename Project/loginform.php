<?php
    // request login details and error handling
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $myusername = mysqli_real_escape_string($conn,$_POST['username']); 
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
      
      $sql = "SELECT id FROM users WHERE BINARY username = '$myusername' and password = '$mypassword'"; // checks table against $myusername and $mypassword variables 
      $result = mysqli_query($conn,$sql); // stores result from sql query
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC); // fetches row result
      $count = mysqli_num_rows($result); // gets number of rows in result variable and stores it in count
     
     // checks for empty username, if empty then sets $error variable to true
     if(empty($username)){
      $error= true;
     }
     // checks for empty password, if empty then sets $error variable to true
     if(empty($password)){
      $error= true;
     }
     // if statement for checking if the count is 1 or there is not an error.
     if ($count == 1 OR !$error){
          $_SESSION['username']= $myusername; //set session username to myusername variable
          $_SESSION['login_user'] = $myusername; //sets logged in user to myusername variable
         
         header("location: welcome.php"); //redirects to welcome.php file
     }else{
      $msg[] = " Invalid Username or Password"; // prints message if there is an error
      }
  }
?>