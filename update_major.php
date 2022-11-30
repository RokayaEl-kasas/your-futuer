<?php
include 'config.php';
include'template\header.php';


$id=$_GET['maj_id'];
if(isset($_GET['maj_id']) )
   $id=$_GET['maj_id'];
else
	header("Location:majors.php");

  
$major = mysqli_query($conn, " SELECT * FROM majors where id='$id' limit 1");

    if($major){
        $major = mysqli_fetch_assoc($major);
        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
        echo '<section class="w3l-mockup-form " style="background-image: url(images/banner.png);">
        <div class=" container " >
                    <div class="content-wthree" style="margin: 20% 25% 2% 25%; ">
                        <h2>Update Major</h2>
                        
                        <form action="" enctype="multipart/form-data" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Major Name" value="'.$major['name'].'"  required>
					        <input type="number" class="number" name="avg" placeholder="Enter at least Average" value="'.$major['avg'].'"  required>
                            
                            <input type="file" name="imageFile" id="fileToUpload">
                            <button name="submit" class="btn" type="submit">Update</button>
                        </form>
                    </div>
        </div>
        </section>';

        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $avg = mysqli_real_escape_string($conn, $_POST['avg']);

            if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){


                if(is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
                    move_uploaded_file($_FILES["imageFile"]["tmp_name"],"images/major-images/".$_FILES["imageFile"]["name"]);
                    
                    $image_name ="images/major-images/".$_FILES["imageFile"]["name"];
                     $sql = "UPDATE  majors  SET name='$name',avg='$avg' ,major_image='$image_name' WHERE id='$id'";

    
                }else{
                    $sql = "UPDATE  majors  SET name='$name',avg='$avg' WHERE id='$id'";

    
                  }

                $result = mysqli_query($conn, $sql);
                if ($result){
                    echo "<div class='alert alert-info'>New Major Added Successfully</div>";
                }else
                echo '<div class="alert alert-warning">There is an error</div>';
                header("Location:majors.php");
            }
        }
    }

    include'template\footer.php' ;
?>