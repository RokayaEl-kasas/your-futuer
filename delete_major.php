<?php
include 'config.php';

$sql = "DELETE FROM majors WHERE id='" . $_GET["major_id"] . "'";
$msg= "Record deleted successfully";
if (mysqli_query($conn, $sql)) {
    $msg= "Record deleted successfully";
} else {
    $msg= "Error deleting record: " . mysqli_error($conn);
}

header("Location:majors.php? msg=$msg");
?>