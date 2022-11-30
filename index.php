<?php
$title = 'Home';

include'./template/header.php';?>
<body id="body">
<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/Picture1.svg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">University Major
				</h1>
				<?php
					if(!isset($_SESSION['admin']) and isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] ==1){
						echo '
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Enter Your Average to Check out which colleges you can attend </p>

					<br>
					<form action="majors_avg.php" method="get">
						<div class="row justify-content-center">
							<input type="number" style="width:50%;margin-right:1%" class="info text-center" name="avg" placeholder="Enter Your Average"  required>
							
							<button name="submit" class="btn btn-main" type="submit">Check out</button>
						</div>
					</form>';

					}?>
				<br><br>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Find out which colleges you can attend </p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
						href="majors.php">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<?php
if(isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] ===true){?>

<h1 class = "text-center text-primary p-4">Welcome  <?= $_SESSION['user_email'] ?></h1>
<?php }
?>

<section class="service-2 section">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-6">
        <!-- section title -->
        <div class="title text-center">
          <h2>About education in the kingdom</h2>
      

          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>
    </div>
    <div class="row">

      <div class="col-md-4 text-center d-none d-md-block">
        <img loading="lazy" src="images/about/1401017243_2_404.jpg" class="img-fluid inline-block" alt="">
		<img loading="lazy" src="images/about/a1.jpg" class="img-fluid inline-block" alt="">
			</div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
             <h4>Ministry of Education</h4>
              <h9>In 1395 ah, the Ministry of higher education was established to be the body responsible for,organizing higher education and, </h9>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">       
             <h4>Ministry of Education</h4>
              <h9>establishing its rules, and university education before the establishment of its own ministry was subordinate ,</h9>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
               <h4>Ministry of Education</h4>
              <h9> to the Directorate of knowledge. On 9 Rabi al-Thani, 1436 AH,corresponding to 29 February 2015,the Ministry of Education, </h9>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6">
            <div class="service-item">
              <h4>Ministry of Education</h4>
              <h9>which was called the Ministry of knowledge before 1424 Ah, merged with the Ministry of higher education to become one ministry under the name of the Ministry of Education.</h9>
            </div>
          </div><!-- END COL -->
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

<!--Start Blog Section
=========================================== -->
<section class="blog" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2> Major <span class="color">university</span></h2>
			</div>
			<!-- /section title -->
		</div>

		<div class="row">
			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/Engineering.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3>Engineering Major</h3>
						<h6>Engineering is a discipline, art and profession that applies scientific theories to the design, development and analysis of technical solutions.</h6>
						
					</div>
				</div>
			</article>
			<!-- /single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/M1.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3>law</h3>
						<h6>This study will help to control the security situation in the country.
              As well as preventing the commission of crime, and trying to spread peace and security among citizens.
              </h6>
					
					</div>
				</div>
			</article>
			<!-- end single blog post -->

			<!-- single blog post -->
			<article class="col-lg-4 col-md-6">
				<div class="post-item">
					<div class="media-wrapper">
						<img loading="lazy" src="images/blog/M.jpg" alt="amazing caves coverimage" class="img-fluid">
					</div>

					<div class="content">
						<h3>Interior design</h3>
						<h6>Design and layout of spaces, interior spaces that meet people physical, social needs.It also plays the main and fundamental role in maintaining the integrity of the building. </h6>
						
					</div>
				</div>
			</article>
			<!-- end single blog post -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<?php
include'./template/footer.php';?>