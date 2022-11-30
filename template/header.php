<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>your futuer <?=$title?></title>
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/22739583.js"></script>
<!-- End of HubSpot Embed Code -->
      <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="One page parallax responsive HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Bingo HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/33.png" />
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->

  <link rel="stylesheet" href="css/style.css">
 
  <script src="https://kit.fontawesome.com/d4049df774.js" crossorigin="anonymous"></script>

</head>
<body id="body">
<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-0">
      <!-- logo -->
      <h9 class="logo me-auto me-lg-0"><a href="index.php">Universities Admissions </a></h9>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item dropdown active">

			<li class="nav-item ">
				<a class="nav-link" href="index.php">Home</a>
			  </li>
          <li class="nav-item ">
            <a class="nav-link" href="about.php">About </a>
          </li>

          <li class="nav-item dropdown">
		    
            <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              major <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="universities.php">Universities</a></li>
              <li><a class="dropdown-item" href="majors.php">MAJORS</a></li>
              <!-- <li class="dropdown dropdown-submenu dropleft"> -->

                  <?php
                      include 'config.php';
                    $majors = mysqli_query($conn, " SELECT * FROM majors ");
                    if(mysqli_num_rows($majors)){
                        
                        while($major = mysqli_fetch_assoc($majors)):
                          $id=$major['id'];
                            echo '<li>
                                <a class="dropdown-item " href="sub_majors.php ?id=';echo $id .'" id="" role="button" aria-haspopup="true" aria-expanded="false">'.$major['name'].' </a>
                                  
                                </li>';
                                      
                        endwhile;
                    }
                  ?>
                <!-- </li> -->
              </ul>
          </li>
          <?php
          if(!isset($_SESSION['admin'])):?>
          <li class="nav-item ">
            
				<a class="nav-link" href="rate.php">rate</a>
			  </li>
        <?php endif; ?>
        
        <?php if(isset($_SESSION['admin']) and $_SESSION['admin'] ===true):?>
                 
                 <li class="nav-item " style="width: 170px;">
                     <a class="nav-link bg-success"  href="controll_panel.php">Controll Panel </i></a>

                 </li>
                <li class="nav-item ">
                <a  class="nav-link" href="logout.php">Logout</a>
              </li>
                 <?php else: ?>
                  <li class="nav-item " style="width: 160px;">
                     <a class="nav-link" href="admin.php">Login as admin</a>
                 </li>
                  
              <?php endif; ?>
          <?php 
          if(!isset($_SESSION['admin']))
          if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] ===true):?>
            <!-- <li class="nav-item ">
            <a  class="nav-link" href="profile.php">profile</a>
            
          </li>
          <li class="nav-item ">
            <a  class="nav-link" href="logout.php">Logout</a>
          </li> -->
              
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle"  style="color:#E1F5FE;" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <?php
                 echo $_SESSION['user_name']?> <i class="tf-ion-chevron-down"></i>
            </a>
            <ul class="dropdown-menu"  aria-labelledby="navbarDropdown">
                <li>
                      <a  class="nav-link" href="profile.php">Profile</a>

                      <a  class="nav-link" href="logout.php">Logout</a>
                      <a   href="user_fav_majors.php" style="color:#D81B60;padding:8px" ><i class="fa-solid fa-heart"></i> My Favavourites</a>

                </li>
                <!-- </li> -->
              </ul>
          </li>
          <?php else: ?>
              

          <li class="nav-item ">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="register.php">Register</a>
            <?php endif; ?>
          </li>
          
      </div>
    </nav>
    <!-- /main nav -->

  </div>
</header>
<!--
End Fixed Navigation
==================================== -->