<?php
    include("database.php");
    include("createmod.php"); // include createmod which also includes database connection
    session_start(); //start session
    // check to see if user is logged in, if not redirect to login page
    if(!isset($_SESSION['login_user'])){
          header("location:login.php"); // if user is not logged in, send them to login page.
          exit();
    }
        ?>
<!DOCTYPE html>
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
        <!--------- Header Section --------->
    <section class="header">
        <nav class = "navbar">
            <!--Logo and navigation bar links-->
            <a href="index.html"><img src="logo-Reading.png"></a>
                <ul class="nav-menu">
                    <li class = "items"><a href="home.html">Home</a></li>
                    <li class = "items">
                        <a href="curriculum.php">Academic Curriculum</a>
                            <ul class = "subnav">
                                <li class = "subitems"><a href="create.php">Create Module</a></li>
                                <li class = "subitems"><a href="curriculum.php">View Modules</a></li>
                                <li class = "subitems"><a href="edit.php">Edit Module</a></li>
                             </ul>
                    </li>
                </ul>

                <!-- Hamburger Menu for smaller screen sizes-->
                <div class = "hamburger" onclick = "showMenu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
        </nav>
        <div class="intro">
            <h1>Create a Module</h1>
        </div>
    </section>
  
    <form name = "create" method="post">
        <fieldset> <!-- Fieldset for drawing a box around elements -->
            <legend>Create a Module</legend>
        <div class = "createContainer">
            <div class = "mod-group">
                <label for="modCode">Module Code:</label>
                <!-- Sets input type, id, name, name & max length to 7 for module code-->
                <input type="text" id="modCode" name="modCode" maxlength="7"><br>
            </div>
            <div class = "mod-group">
                <label for="modTitle">Module Title:</label>
                <!-- Sets input type, id, name, name & max length to 100 for module title-->
                <input type="text" id="modTitle" name="modTitle" maxlength="100"><br>
            </div>
            <div class = "mod-group">
                <label for="modLevel">Level:</label>
                <!-- Sets input type, id, name, name & max length to 2 for module level-->
                <input type="text" id="modLevel" name="modLevel" maxlength="2"><br>
            </div>
            <div class = "mod-group">
                <label for="modCat">Category:</label>
                <?php
        #Select statement for getting categories from the table
        if($r_set = $conn->query("SELECT DISTINCT category from modulesnew")){
            // dropdown for categories
			echo "<select id='modCategory' name='modCategory' class='form-control' style='width:175px;'>";
			while ($row = $r_set->fetch_assoc()) {
                // fetch categories from database table
				echo "<option value='{$row["category"]}'>{$row["category"]}</option>";
			}
			echo "</select>";
		}
		else{
			echo $conn->error;
		}
            
        ?>
            </div>
            <div class = "mod-group">
            <label for="modLevel">Topic:</label>
                <!-- Sets input type, id, name, name & max length to 100 for module topic-->
                <input type="text" id="modTopic" name="modTopic" maxlength="100"><br>
            </div>
        </div>
        <!-- Submit button -->
        <input type="submit" name = "Submit" value="Submit">
    </fieldset>
    </form> 

    <!-- JavaScript for hamburger menu open and close toggle events-->
    <script src="hamburgerMenu.js">
    </script>
    </table>
    </body>
</html>