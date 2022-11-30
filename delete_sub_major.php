<?php
include 'config.php';

$sql = "DELETE FROM sub_majors WHERE id='".$_GET["sub_major_id"]. "'";
$msg= "Record deleted successfully";
if (mysqli_query($conn, $sql)) {
    $msg= "Record deleted successfully";
} else {
    $msg= "Error deleting record: " . mysqli_error($conn);
}
$id = $_GET['majorxx_id'];


header("Location:majors.php? msg=Sub Major Deleted Successfully");
?>