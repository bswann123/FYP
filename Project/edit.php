<?php
        include ("database.php"); // include database connection
        $result = mysqli_query($conn, "SELECT * FROM modulesnew");
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
                        <a href="Curriculum.php">Academic Curriculum</a>
                            <ul class = "subnav">
                                <li class = "subitems"><a href="create.php">Create Module</a></li>
                                <li class = "subitems"><a href="Curriculum.php">View Modules</a></li>
                                <li class = "subitems"><a href="edit.php">Edit Module</a></li>
                             </ul>
                    </li>
                </ul>

                <!-- Hamburger Menu for smaller screen sizes with 2 bars-->
                <div class = "hamburger" onclick = "showMenu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
        </nav>
        <!-- Intro text for center image -->
        <div class="intro">
            <h1>Edit a Module</h1>
        </div>
    </section>
        <!-- Edit modules text above module list-->
        <h2 class = "primary-text">Edit a Module</h2>

   <?php
        if (mysqli_num_rows($result) > 0) {
    ?>

    <table class = "modules">

    <tr>
        <!-- Table Data Cells for each column -->
	    <td>Module Code</td>
		<td>Module Title</td>
		<td>Level</td>
		<td>Category</td>
		<td>Topic</td>
		<td>Action</td>
	  </tr>

      </tr>
      <?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	<!-- Display row data from database table -->
	  <tr>
	    <td><?php echo $row["Module Code"]; ?></td>
		<td><?php echo $row["Module Title"]; ?></td>
		<td><?php echo $row["Level"]; ?></td>
		<td><?php echo $row["Category"]; ?></td>
		<td><?php echo $row["Topic"]; ?></td>
        <!-- hyperlink for when the user clicks "Update", module code updates based on selection-->
		<td><a href="update-module.php?ModuleCode=<?php echo $row["Module Code"]; ?>">Update</a></td>
      </tr>
      <?php
			$i++; // iterate through rows
			}
			?>

     </table>
     <?php
    }
else
{
    echo "No result found"; // if no results are found display this message
}
?>
    <!-- JavaScript for hamburger menu open and close toggle events-->
    <script src="hamburgerMenu.js">
    </script>
    </body>
</html>
