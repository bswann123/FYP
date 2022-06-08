<?php

    include ("database.php");

if(isset($_POST['Submit'])) {
 $code = $_REQUEST['modCode'];
 $title = $_REQUEST['modTitle'];
 $level = $_REQUEST['modLevel'];
 $category = $_REQUEST['modCategory'];
 $topic = $_REQUEST['modTopic'];

$sql = "INSERT INTO modulesnew VALUES ('{$code}', '{$title}', '{$level}', '{$category}', '{$topic}')";
if(mysqli_query($conn, $sql)){
    echo "<h3>Module added successfully.";
} else{
    echo "ERROR: Unsuccessful ".$sql."." 
        . mysqli_error($conn);
    }
}
?>