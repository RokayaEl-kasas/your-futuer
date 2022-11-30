<?php
$title = 'Majer';

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
   echo "<div class='alert alert-danger'>'.$msg.'</div>";
}

$avg=$_GET['avg'];
echo '<br><br><br>';
$majors = mysqli_query($conn, " SELECT * FROM majors where avg <='$avg' ORDER BY  avg  DESC");
if(mysqli_num_rows($majors)){
    echo '<div class="row" style="padding:3%">';
    while($major = mysqli_fetch_assoc($majors)):
        echo '
        <div class= "col-md-3 col-lg-3"> 
       <div class=" card text-dark shadow mt-2" style="height: 28rem;text-align: center; border-radius: 20px;margin: 10px;">
        <div class="card-body">
        <img src="'.$major['major_image'].'" witdh="160px" height="160px">
		<br><br>
        <h3 style="margin-top:10px" class="card-title"> '.$major['avg'].'%</h3 >
        <h2 style="margin-top:70px" class="card-title"> '.$major['name'].'</h2 >
		<br>
		<a class= "btn btn-outline-info" style="width:60%;hieght:38px"  href="sub_majors.php?id=';echo $major['id'] .'">Display</a>
		
		</div>
		</div>
      </div>';         
   
     endwhile;
echo '</div>';


}else{
echo '<div class="alert alert-danger text-center"> No thiing</div>';
}

echo '<br><br>';

include'template\footer.php' ;?> 

