<?php
$title = 'sub_majors';
include'template\header.php';
include 'config.php';?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					
				</ol>
			</div>
		</div>
	</div>
</section>
<?php
$id = $_GET['id'];

$sub_majors = mysqli_query($conn, " SELECT * FROM sub_majors where major_id='$id' ");
if(mysqli_num_rows($sub_majors)){

    echo '<div style="background-image: url(images/banner.png);"><div class="row " style="padding:3%">';
    while($c = mysqli_fetch_assoc($sub_majors)):
		echo '
        <div class= "col-md-3 col-lg-3"> 
       <div class=" card text-dark shadow mt-2"  style="height: 20rem;text-align: center; border-radius: 20px;margin: 10px;">
        <div class="card-body bg-light" style="border-radius: 20px;">
        <img src="'.$c['image'].'" witdh="100px" height="100px">
		
        <h5 style="margin-top:70px" class="card-title"> '.$c['name'].'</h5 >
		<br>
		<a class= "btn btn-outline-primary"  href="universities.php">view</a>
		
		
		';
		
		if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
			{echo '
		<a class= "btn btn-danger"   href="delete_sub_major.php?sub_major_id=';echo $c['id'] .'">Delete</a>
		<a class= "btn btn-warning"   href="update_sub_major.php?sub_major_id=';echo $c['id'].'">Update</a>
		';
		
		
			}
	echo'
          
</div></div>
      </div>';        
   
     endwhile;
echo '</div>';


}else{
echo '<div class="alert alert-danger text-center"> No thing</div>';
}

echo '<br><br></div>';


if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
echo '<section class="w3l-mockup-form " style="background-image: url(images/background.JPG);">
<div class=" container " >
	
	
		   
			<div class="content-wthree" style="margin: 2% 25% 2% 25%; ">
				<h2>Add New Major</h2>
				
				<form action="" enctype="multipart/form-data" method="post">
					<input type="text" class="name" name="name" placeholder="Enter Major Name"  required>
					 <input type="file" name="imageFile" id="fileToUpload"> 
					<button name="submit" class="btn" type="submit">Add</button>
				</form>
			   
			</div>
	
	
</div>
</section>';
	if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){

			if(is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
				move_uploaded_file($_FILES["imageFile"]["tmp_name"],"images/major-images/uploaded/".$_FILES["imageFile"]["name"]);
				
				$image_name ="images/major-images/uploaded/".$_FILES["imageFile"]["name"];
				
				$sql = "INSERT INTO sub_majors (name,major_id,image) VALUES ('{$name}','{$id}','{$image_name}')";


			}else{
				$sql = "INSERT INTO sub_majors (name,major_id) VALUES ('{$name}','{$id}')";


			  }

            $result = mysqli_query($conn, $sql);
			if ($result){
				echo "<div class='alert alert-info'>New Major Added Successfully</div>";
			}else
			echo '<div class="alert alert-warning">There is an error</div>';
			header("Location:sub_majors.php?id=$id");
        }
    }

include'template\footer.php';?>