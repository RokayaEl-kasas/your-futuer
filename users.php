<?php
$title = 'Users';
include'template\header.php';?>
    <section class="single-page-header" style="background-image: url(images/banner.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Users</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center" >
					<li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Users</li>
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
 

echo '<br><br><br>';
$users = mysqli_query($conn, " SELECT * FROM users ");
if(mysqli_num_rows($users)){
    echo '
    <div class="jumbotron container " style="padding:0%">
        <div class="row d-flex justify-content-center" >
            
            <div class= "col-md-4 "> 
            <div class="row d-flex justify-content-center" >
                <h4 style="margin-top:10px" class="card-title">Name </h >
            </div>
            </div>
            <div class= "col-md-4 "> 
            <div class="row d-flex justify-content-center" >

                <h4 style="margin-top:10px" class="card-title">Email </h >
                
            </div>
            </div>
            <div class= "col-md-2 "> 
            <div class="row d-flex justify-content-center" >

                <h4 style="margin-top:10px" class="card-title">Phone </h >
            </div>
            </div>
            <div class= "col-md-2  "> 
            <div class="row " >

                <h4 style="margin-top:10px" class="card-title">Action </h >
            </div>
            </div>

        </div>
        <hr>

        <div class="row justify-content-center" style="padding:3%">';
    while($user = mysqli_fetch_assoc($users)):
        echo '
        <div class= "col-md-4 bg-light"> 
                    
		        <h5 style="margin-top:10px" class="card-title"> '.$user['name'].'</h >
    
        </div>
        <div class= "col-md-4 bg-light"> 
        

		        <h5 style="margin-top:10px" class="card-title"> '.$user['email'].'</h >
        
        </div>
        <div class= "col-md-2 bg-light"> 
        

		        <h5 style="margin-top:10px" class="card-title"> '.$user['phone'].'</h >
       
        </div>
       
		';
		
		if(isset($_SESSION['admin']) and $_SESSION['admin'] ==1)
			{echo '
                <div class= "col-md-2"> 
                        <div class="row d-flex justify-content-center" >
                           <a  type="button" class= "btn btn-danger" href="delete_user.php?user_id=';echo $user['id'] .'">Delete</a>
                        </div>
                 </div>
		   ';
			}
     endwhile;
echo '
</div>
</div>';


}else{
echo '<div class="alert alert-danger text-center"> No thiing</div>';
}

echo '<br><br>';

include'template\footer.php';?>