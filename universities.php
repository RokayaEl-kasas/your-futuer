<?php
$title = 'Universities Architecture';
include 'config.php';

include'template\header.php';?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h2>Universities Architecture</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
				</ol>
			</div>
		</div>
	</div>
</section>


<?php


if(isset($_GET['msg'])) {
	$msg = $_GET['msg'];
	echo "<div class='container'>
	<div class='alert alert-danger'>$msg</div>
	</div>";
   
 }
 if(isset($_GET['msgg'])) {
	$msgg = $_GET['msgg'];
	echo "<div class='container'>
	<div class='alert alert-success'>$msgg</div>
	</div>";
 }
$city;
if(isset($_GET['city']) and $_GET['city']!='all' ) {
	$city = $_GET['city'];
	$msg='Universities in '.$city.' City';
	
$universities = mysqli_query($conn, " SELECT * FROM universty WHERE city='$city' ");

 }else{
	$msg='All Universities in  Saudia Arabia';

$universities = mysqli_query($conn, " SELECT * FROM universty ");
	
 }
echo '<br><br><br>';
if(mysqli_num_rows($universities)){
    echo '	
			<div class="container" >
				<div class="Jumbotron bg-secondary shadow rounded" style="padding:1%;margin-bottom: 20px;">
					<div class="row justify-content-center " >
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=all">  All  </a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Riyadh">Riyadh</a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Qassim">Qassim</a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Al-Taif">Al-Taif</a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Makkah">Makkah</a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Jeddah">Jeddah</a>
						<a type="button" style="padding:1%;margin:4px" class="btn btn-info" href="universities.php?city=Madinah">Madinah</a>
					</div>
				</div>

			<h4 style="margin-left:30px;margin-bottom:20px">';echo $msg.'</h4>
				
				<div class="row justify-content-center">
						';
    while($university = mysqli_fetch_assoc($universities)):
        echo '
							<div class="col-md-4 ">
								<div class="portfolio-block">
									<img class="img-fluid" src="';echo $university['image'].'" alt="">
									<div class="caption">
										<h4><a href="';echo $university['adderes'].'" target="_blank">';echo $university['name'].' <br> <br>public</a></h4>
										';
		
											if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
												{echo '
											
													<br><br><br><br><br>
											<a class= "btn btn-outline-danger"   href="delete_university.php?uni_id=';echo $university['id'] .'"><i class="fa-regular fa-trash-can"></i></a>
											<a class= "btn btn-outline-info"   href="update_university.php?uni_id=';echo $university['id'].'"><i class="fa-regular fa-pen-to-square"></i></a>';
												}
										echo'
									</div>
								</div>
							</div>
		';         
   
     endwhile;
	echo ' </div>
	</div> ';

}else{
	echo '<div class="alert alert-danger text-center"> There is no Universities</div>';
	}
	
	echo '<br><br>';


	
if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
echo '<section class="w3l-mockup-form " style="background-image: url(images/banner.png);">
<div class=" container " >
	
	
		   
			<div class="content-wthree" style="margin: 2% 25% 2% 25%; ">
				<h2>Add New university</h2>
				
				<form action="" enctype="multipart/form-data" method="post">
					<input type="text" class="name" name="name" placeholder="Enter university Name"  required>
					<input type="text" class="name" name="city" placeholder="Enter university city"  required>
					<input type="text" class="name" name="address" placeholder="Enter at university address"  required>
					<input type="file" name="imageFile" id="fileToUpload">
					<button name="submit" class="btn" type="submit">Add</button>
				</form>
			   
			</div>
	
	
</div>
</section>';
	if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);

        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){

			if(is_uploaded_file($_FILES["imageFile"]["tmp_name"])){
				move_uploaded_file($_FILES["imageFile"]["tmp_name"],"universty/".$_FILES["imageFile"]["name"]);
				
				$image_name ="universty/".$_FILES["imageFile"]["name"];
				$sql = "INSERT INTO universty (name,city,adderes,image) VALUES ('{$name}','{$city}','{$address}','{$image_name}')";


			}else{
				$sql = "INSERT INTO universty (name,city,adderes) VALUES ('{$name}','{$city}','{$address}')";

			  }


            $result = mysqli_query($conn, $sql);
			if ($result){
					header("Location:universities.php?msgg=New university Added Successfully");
			}else 	
			header("Location:universities.php?msg=There is an error");

        }
    }

include'template\footer.php';?>



<!-- ';echo $university['city'];' -->