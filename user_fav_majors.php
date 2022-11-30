<?php
$title = 'User Favourites Majer';

include 'config.php';
include'template\header.php';
?> 
<section class="single-page-header" style="background-image: url(images/banner.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Majors</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center" >
					<li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Majors</li>
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

if(isset($_SESSION['user_id']))
    $usr_id=$_SESSION["user_id"];
$favorites=[];
	if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] ==true)
	{
		$rows = mysqli_query($conn, "SELECT major_id FROM favourites WHERE  user_id='$usr_id' ");
		while ($row = mysqli_fetch_assoc($rows)){
			array_push($favorites,$row['major_id']);
			
		};
		
		
	}
if($favorites){
echo '<br><br><br>';
$majors = mysqli_query($conn, " SELECT * FROM majors WHERE id IN(".implode(',',$favorites).")");
if(mysqli_num_rows($majors)){
    echo '<div class="row" style="padding:3%">';
    while($major = mysqli_fetch_assoc($majors)):
        echo '
        <div class= "col-md-3 col-lg-3"> 
       <div class=" card text-dark shadow mt-2 " style="height: 25rem;text-align: center; border-radius: 20px;margin: 10px;">
        <div class="card-body">
        <img src="'.$major['major_image'].'" witdh="100px" height="100px">
		<h3 style="margin-top:10px" class="card-title"> '.$major['avg'].'%</h3 >
		<br><br>
		<a style="color:#D81B60;" ><i class="fa-solid fa-2x fa-heart"></i></a>
        <h2 style="margin-top:20px" class="card-title"> '.$major['name'].'</h2 >
		<br>
		
		';
		if(!isset($_SESSION['admin']))
			{echo '
				<a class= "btn btn-outline-info" style="width:70%;hieght:38px"  href="sub_majors.php?id=';echo $major['id'] .'">Display</a>';
			}
		
	echo'	
		</div>
		</div>
      </div>';         
   
     endwhile;
echo '</div>';


}else{
echo '<div class="alert alert-danger text-center"> No thiing</div>';
}



echo '<br><br>';

}else{
	echo '<div class="alert alert-danger text-center"> No thiing</div>';
	}

if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
echo '<section class="w3l-mockup-form " style="background-image: url(images/banner.png);">
<div class=" container " >
	
	
		   
			<div class="content-wthree" style="margin: 2% 25% 2% 25%; ">
				<h2>Add New Major</h2>
				
				<form action="" method="post">
					<input type="text" class="name" name="name" placeholder="Enter Major Name"  required>
					<input type="number" class="number" name="avg" placeholder="Enter at least Average"  required>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<button name="submit" class="btn" type="submit">Add</button>
				</form>
			   
			</div>
	
	
</div>
</section>';
	if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $avg = mysqli_real_escape_string($conn, $_POST['avg']);

        if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1){
            $sql = "INSERT INTO majors (name,avg) VALUES ('{$name}','{$avg}')";
            $result = mysqli_query($conn, $sql);
			if ($result){
				echo "<section ><div class='alert alert-info'>New Major Added Successfully</div> </section>";
			}else
			echo '<section > <div class="alert alert-warning">There is an error</div> </section>';
			header("Location:majors.php");
        }
    }

include'template\footer.php' ;?> 


