<?php

if(isset($_POST['submit'])) {
	
  $sqlCondition = "";
  $started = false;
  
  if(isset($_POST['level']) && $_POST['level'] != 'nofilt') {
	  if($started == true) {
		  $sqlCondition .= " AND ";
	  }
    $sqlCondition .= " LOWER(Level) = LOWER('" . $_POST['level'] . "')";
	$started = true;
  }
  
  if(isset($_POST['category']) && $_POST['category'] != 'nofilt') {
	if($started == true) {
		$sqlCondition .= " AND ";
	}
    $sqlCondition .= " LOWER(Category) = LOWER('" . $_POST['category'] . "')";
	$started = true;
  }
  
  if(isset($_POST['topic']) && $_POST['topic'] != 'nofilt') {
	if($started == true) {
		$sqlCondition .= " AND ";
	}
    $sqlCondition .= " LOWER(Topic) LIKE LOWER('%" . $_POST['topic'] . "%')";
	$started = true;
  }
  
  $sqlStatement = "SELECT * FROM modulesnew";
  if($started == true) {
	  $sqlStatement .= " WHERE " . $sqlCondition;
  }

  $query=mysqli_query($conn, $sqlStatement) or die(mysqli_error());
  if ($query->num_rows > 0) {
    while($row = mysqli_fetch_assoc($query)){
      echo "<tr><td>". $row["Module Code"]. "</td><td>". $row["Module Title"]. "</td><td>". $row["Level"]. "</td><td>". $row["Category"]. "</td><td>". $row["Topic"]. "</td></tr>";

    }
  }
}
?>