<?php
	#sql query to get all modules
	$sql = "SELECT * FROM `Module Code`; 

	$result = $conn->query($sql); #store sql query in result;
	if ($result->num_rows > 0();

	$row = $result->fetch_assoc(); #fetch result of next row

	$modCode = $row["Module Code"];
	$modTitle = $row["Module Title"];
	$modLevel = $row["Level"];
	$modCategory = $row["Category"];
	$modTopic = $row["Topic"];

	echo

	} else {
		echo "Not Found";
	}
	$conn->close();

?>