<?php
// In your delete.php file,

$id = $_GET['id'];
//Connect DB
include_once('db/config.php');

// sql to delete a record
$sql = "DELETE FROM logs WHERE id = $id"; 

if (mysqli_query($link, $sql)) {
    mysqli_close($link);
    header('Location: all_log.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}

?>