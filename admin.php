<?php
$title = 'admin';
include 'config.php';
include'template\header.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['a_email']);
    $password = $_POST['a_password'];
    
    $login = mysqli_query($conn, "SELECT id FROM `admins` WHERE email='$email' and `password`='$password' LIMIT 1;");
    
    if(mysqli_num_rows($login) ==1){
        
        $_SESSION['admin'] =true;
       
        header('Location:index.php');
    }else{
        echo '<div class="alert alert-warning">Username or password is an error</div>';
  
    }
  
  }
?>

<body>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Admin control</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
				</ol>
			</div>
		</div>
	</div>
</section>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/login/admin.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Admin control</h2>
                        <form action="" method="post">
                            <input type="email" class="email" name="a_email" placeholder="Enter Your Email" value="" required>
                            <input type="password" class="password" name="a_password" placeholder="Enter Your Password" style="margin-bottom: 2px;" required>
                            <button name="submit" name="send" class="btn" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

<br>
<?php

include'template\footer.php';?>