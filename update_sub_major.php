<?php
include 'config.php';
include'template\header.php';


$id=$_GET['sub_major_id'];
if(isset($_GET['sub_major_id']) )
   $id=$_GET['sub_major_id'];
else
	header("Location:majors.php");

  
$major = mysqli_query($conn, " SELECT * FROM sub_majors where id='$id' limit 1");

    if($major){
        $major = mysqli_fetch_assoc($major);
        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
        echo '<section class="w3l-mockup-form " style="background-image: url(images/banner.png);">
        <div class=" container " >
                    <div class="content-wthree" style="margin: 20% 25% 2% 25%; ">
                        <h2>Update Major</h2>
                        
                        <form action="" enctype="multipart/form-data" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Major Name" value="'.$major['name'].'"  required> 
                            <input type="file" name="imageFile" id="fileToUpload">
                            <button name="submit" class="btn" type="submit">Update</button>
                        </form>
                    </div>
        </div>
        </section>';

        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){


                if(is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
                    move_uploaded_file($_FILES["imageFile"]["tmp_name"],"images/major-images/".$_FILES["imageFile"]["name"]);
                    
                    $image_name ="images/major-images/".$_FILES["imageFile"]["name"];
                     $sql = "UPDATE  sub_majors  SET name='$name', image='$image_name' WHERE id='$id'";

    
                }else{
                    $sql = "UPDATE  sub_majors  SET name='$name' WHERE id='$id'";

    
                  }

                $result = mysqli_query($conn, $sql);
                if ($result){
                   
                    header("Location:majors.php?msgg=Sub Major Updated Successfully");
                }else
                header("Location:majors.php?msgg=There is an error");

            }
        }
    }

    include'template\footer.php' ;
?>