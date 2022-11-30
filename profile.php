<?php
$title = 'profile';
include 'template\header.php';
include 'config.php';
$id= $_SESSION['user_id'];
if (!$id) {
echo '<div class="alert alert-danger text-center"> user id is null</div>';
  
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get reference to uploaded image
  $image_file = $_FILES["imageFile"];
  
  // Image not defined, let's exit
  if (!isset($image_file)) {
      die('No file uploaded.');
  }

  if (is_uploaded_file($_FILES["imageFile"]["tmp_name"])) {
   
    move_uploaded_file($_FILES["imageFile"]["tmp_name"],"UserImage/".$_FILES["imageFile"]["name"]);
  
  $image_name ="UserImage/".$_FILES["imageFile"]["name"];

  $query = mysqli_query($conn, "UPDATE users SET  image ='{$image_name}' WHERE id='{$id}'");
  } 
 
  


}

$phone = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone'])) {
  $phone =  $_POST['phone'];
  $email= $_POST['email'];
  $first= $_POST['first_name'];
  $last= $_POST['last_name'];
  $pass= $_POST['password'];
  $gender= $_POST['gender'];

  if(empty($_POST['password'])){
    $query = mysqli_query($conn, "UPDATE users SET firstName='{$first}', phone='{$phone}',lastName='{$last}',email='{$email}',gender='{$gender}' WHERE id='{$id}'");


  }else{

    $pass = md5($pass);
    $query = mysqli_query($conn, "UPDATE users SET  password ='{$pass}',firstName='{$first}', phone='{$phone}',lastName='{$last}',email='{$email}',gender='{$gender}' WHERE id='{$id}'");


  }



  
}
$newuser;
$users = mysqli_query($conn, " SELECT * FROM users WHERE id=$id ");

foreach($users as $user){
  $newuser= $user;

}
?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
            <h2>User Profile</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
				</ol>
			</div>
		</div>
	</div>
</section>
<br>
<div class="container bootstrap snippet">
 
    <div class="row">
  		<div class="col-sm-5"><!--left col-->
              

      <div class="text-center">

        <img src="<?php echo $newuser["image"]  ?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <br>
        <br>
        <a  class="btn btn-outline-secondary" href="user_fav_majors.php" style="color:#D81B60;padding:8px" ><i class="fa-solid fa-heart"></i> My Favavourites Majors</a>

      </div><br>  

        </div><!--/col-3-->
    	<div class="col-sm-7">
          

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>

                  <form class="form" action="" method="POST" enctype="multipart/form-data" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" value="<?php echo $newuser["firstName"];?>" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" value="<?php echo $newuser["lastName"];?>" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $newuser["phone"];?>" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
                      
          
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" value="<?php echo $newuser["email"]; ?>" title="enter your email.">
                          </div>
                      </div>
                           <div class="form-group">
                          <div class="col-xs-6">
                             <label for="specialty"><h4>Gender</h4></label>
                             <select name="gender" class="form-control" style="height: 30px;" height="30px" id="">

                           

                              <option  value="Male"   <?php 
                             if($newuser["gender"]=="Male" ){echo "selected"; } ?>  >Male</option>
                           
                           

                              <option    <?php 
                             if($newuser["gender"]=="Female" ){echo "selected"; } ?> value="Female">Female</option>
                          
                            
                               
                         
                             </select>
                          </div>
                      </div>
                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                          
                          <label ><h4>Photo</h4></label>
                            <input type="file"  name="imageFile"  class="form-control file-upload">
                          </div>
                      </div>
                       <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                      <div class="text-center">
       
       
              	</form>
              
              
             </div><!--/tab-pane-->
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
<br>
<?php
include'template\footer.php';?>