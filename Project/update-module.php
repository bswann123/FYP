<?php 
  if (isset($_GET["ModuleCode"]) == false) {
    echo "Sorry, you have not specified a module code!";
    exit;
  }
  include 'database.php';
?>
<html>
   
   <head>
        <!-- Used for making the website responsive-->
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <!-- Import css stylesheet-->
        <link type="text/css" rel="stylesheet" href="style.css">
        <title>
            Academic Curriculum
        </title>
   </head>
   
   <body>
      <?php

          if(isset($_POST['update'])) {

            // checks whether variables have been set
            $modCode = isset($_POST['modCode']) ? $_POST['modCode'] : ""; 
            $modTitle = isset($_POST['modTitle']) ? $_POST['modTitle'] : "";
            $modLevel = isset($_POST['modLevel']) ? $_POST['modLevel'] : "";
            $modCategory = isset($_POST['modCategory']) ? $_POST['modCategory'] : "";
            $modTopic = isset($_POST['modTopic']) ? $_POST['modTopic'] : "";
            
            //SQL statement to update modules with data stored in the variables
            $sql = "UPDATE modulesnew ". "SET `Module Code`='" . $modCode . "', `Module Title`='" . $modTitle . "', `Level`='" . $modLevel . "', `Category`='" . $modCategory . "' ,`Topic`='" . $modTopic . "' WHERE `Module Code`='" . $_GET["ModuleCode"] . "'";
            mysqli_query($conn, $sql);
            // message displayed once the update has been successful. gets the module code to inform the user that the specific module has been updated.
            echo "Module with original code " . $_GET["ModuleCode"] . " has been updated, redirected back to modules screen in 5 seconds."; 
      ?>
        <meta http-equiv="refresh" content="5;url=edit.php"> <!-- Redirects to edit.php after 5 seconds -->
      <?php
         }
         else {
          $result = mysqli_query($conn, "SELECT * FROM modulesnew WHERE `Module Code` = '" . $_GET["ModuleCode"] . "'"); // select statement to get modules
         
         if (mysqli_num_rows($result) == 0) {
            echo "Sorry, there is no module with that code"; // message displayed if the user doesnt select a module from the list
            exit; // exits the code from here to prevent the rest of the code from running.
          }
          $row = mysqli_fetch_array($result); // fetches results of sql query into rows
            ?>
               <!-- Form for editing modules -->
               <form method = "post" action = "<?php $_PHP_SELF ?>">
               <form name = "create" method="post">
                <fieldset> <!-- Fieldset for drawing a box around elements -->
                   <legend>Edit Module</legend> 
                     <div class = "createContainer">
                         <div class = "mod-group">
                         <label for="modCode">Module Code:</label>
                         <!-- Sets input type, id, name, max length and prints the current module code in the input field -->
                         <input type="text" id="modCode" name="modCode" maxlength="7" value="<?php echo $row["Module Code"] ?>"/><br>
                     </div>
                     <div class = "mod-group">
                        <label for="modTitle">Module Title:</label>
                        <!-- Sets input type, id, name, max length and prints the current module title in the input field -->
                        <input type="text" id="modTitle" name="modTitle" maxlength="100" value="<?php echo $row["Module Title"] ?>"/><br>
                     </div>
                     <div class = "mod-group">
                        <label for="modLevel">Level:</label>
                        <!-- Sets input type, id, name, max length and prints the current module level in the input field -->
                        <input type="text" id="modLevel" name="modLevel" maxlength="2" value="<?php echo $row["Level"] ?>"/><br> 
                     </div>
                     <div class = "mod-group">
                        <label for="modCategory">Category:</label>
                        <!-- Sets input type, id, name, max length and prints the current module categories in the input field -->
                        <input type="text" id="modCategory" name="modCategory" maxlength="200" value="<?php echo $row["Category"] ?>"/><br>
                     </div>
                     <div class = "mod-group">
                        <label for="modCategory">Topic:</label>
                        <!-- Sets input type, id, name, max length and prints the current module topics in the input field -->
                        <input type="text" id="modTopic" name="modTopic" maxlength="100" value="<?php echo $row["Topic"] ?>"/><br>
                     </div>
                     <td>
                        <!-- Update button-->
                        <input name = "update" type = "submit" id = "update" value = "Update">
                    </td>
               </fieldset>
               </form>
            <?php
         }
      ?>
   </body>
</html>
