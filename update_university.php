<?php
include 'config.php';
include'template\header.php';


// $id=$_GET['uni_id'];
if(isset($_GET['uni_id']) )
   $id=$_GET['uni_id'];
else
	header("Location:universities.php?msg=UNKOWN Uni ID");

  
$university = mysqli_query($conn, " SELECT * FROM universty where id='$id' limit 1");

    if(mysqli_num_rows($university)){
        $university = mysqli_fetch_assoc($university);
        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
        echo '<section class="w3l-mockup-form " style="background-image: url(images/banner.png);">
        <div class=" container " >
                    <div class="content-wthree" style="margin: 20% 25% 2% 25%; ">
                        <h2>Update university</h2>
                        
                        <form action="" enctype="multipart/form-data"  method="post">
                            <input type="text" class="name" name="name" placeholder="Enter university Name" value="'.$university['name'].'"  >
					        <input type="text" class="name" name="city" placeholder="Enter at least city" value="'.$university['city'].'"  >
					        <input type="text" class="name" name="adderes" placeholder="Enter at least address" value="'.$university['adderes'].'"  >
                            <input type="file"  name="imageFile" >
                            <button name="submit" class="btn" type="submit">Update</button>
                        </form>
                    </div>
        </div>
        </section>';

        if (isset($_POST['submit'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $city = mysqli_real_escape_string($conn, $_POST['city']);
            $adderes = mysqli_real_escape_string($conn, $_POST['adderes']);

            if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){

                if(is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
                    move_uploaded_file($_FILES["imageFile"]["tmp_name"],"universty/".$_FILES["imageFile"]["name"]);
                    
                    $image_name ="universty/".$_FILES["imageFile"]["name"];
                    $sql = "UPDATE  universty  SET name='$name',city='$city' ,adderes='$adderes',  image ='{$image_name}' WHERE id='$id'";
                }else{
                    $sql = "UPDATE  universty  SET name='$name',city='$city' ,adderes='$adderes' WHERE id='$id'";
                  }
             
                $result = mysqli_query($conn, $sql);
                if ($result){
                    header("Location:universities.php?msgg=University Updated Successfully");
                }else
                header("Location:universities.php?msg='There is an error'");
            }
        }
    }else{
        header("Location:universities.php?msg='University not found'");
    }


    include'template\footer.php' ;
?>