<?php
include 'config.php';

$sql = "DELETE FROM universty WHERE id='" . $_GET["uni_id"] . "'";
$msg= "Record deleted successfully";
if (mysqli_query($conn, $sql)) {
    $msg= "University deleted successfully";
} else {
    $msg= "Error deleting record: " . mysqli_error($conn);
}

header("Location:universities.php? msg=$msg");
?>