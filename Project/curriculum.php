<?php
        include ("database.php")
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
        <h1>Computer Science Portfolio</h1>
    </div>
    </section>
    </section>

    <h2 class = "primary-text">Module Portfolio</h2>
    <form action="curriculum.php" method="POST">

      Level <select name="level">
        <option value="nofilt">No Filter</option>
         <option value="1">Year 1</option>
         <option value="2">Year 2</option>
         <option value="3">Year 3</option>
         <option value="7">Year 7</option>

      </select>
      Category <select name="category">
        <option value="nofilt">No Filter</option>
         <option value="Advanced Computing and Data Science">Advanced Computing and Data Science</option>
         <option value="Fundamentals and Systems">Fundamentals And Systems</option>
         <option value="Programming">Programming</option>
         <option value="Software Engineering">Software Engineering</option>
         <option value="Degree Project">Degree Project</option>

      </select>

      </select>
      Topic <select name="topic">
        <option value="nofilt">No Filter</option>
         <option value="AI">AI</option>
         <option value="Algorithms">Algorithms</option>
         <option value="Programming">Programming</option>
         <option value="Software Engineering">Software Engineering</option>
         <option value="Architecture">Architecture</option>
         <option value="Statistics">Statistics</option>
         <option value="Development">Development</option>
         <option value="Data Processing">Data Processing</option>
         <option value="Data Analytics">Data Analytics</option>
         <option value="Research">Research</option>
         <option value="Project Management">Project Management</option>

      </select>
      <input type="submit" name="submit" value="Search"/>
   </form>


    <table class = "modules">
      <tr>
        <th>Module Code</th>
        <th>Module Title</th>
        <th>Level</th>
        <th>Category</th>
        <th>Topics</th>
    </tr>

    <?php
       include ("filter.php");
        ?>
    <!-- JavaScript for hamburger menu open and close toggle events-->
    <script src="hamburgerMenu.js">
    </script> 
    </table>
    </body>
</html>
