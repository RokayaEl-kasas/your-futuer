<?php
session_start();
ob_start();

include 'config.php';

if(isset($_SESSION['user_id']))
{
        $usr_id=$_SESSION["user_id"];


    
    if($_GET["major_id"])
        $mj_id=$_GET["major_id"];

    else
        header("Location:majors.php? msg=There is an Error");   


    $deps_id = mysqli_query($conn, "SELECT major_id FROM favourites WHERE  user_id='$usr_id' and `major_id`='$mj_id' LIMIT 1");

        if(mysqli_num_rows($deps_id) >0){
            
            $sql = "DELETE FROM favourites WHERE user_id='$usr_id' and major_id='$mj_id'";
            $msg= "favorite deleted successfully";
            if (mysqli_query($conn, $sql)) {
                $msg= "favorite deleted successfully";
            } else {
                $msg= "Error  " . mysqli_error($conn);
            }
        
            header("Location:majors.php? msg=$msg");
            
        }else{

            $sql = "INSERT INTO favourites (user_id,major_id) VALUES ('{$usr_id}','{$mj_id}')";
            $result = mysqli_query($conn, $sql);
            if ($result){
            $msg= "favorite added successfully";
                
            }else
            $msg= "Error  " . mysqli_error($conn);


            header("Location:majors.php? msgg=$msg");

        }


}else{
    header("Location:majors.php?msg=You Shoud Logint To Choose Favourite Majors");
}

// header("Location:majors.php? msg=favorite added Successfully");
?>