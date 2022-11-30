<?php
$title = 'Control Panel';
include'template\header.php';?>
    <section class="single-page-header" style="background-image: url(images/banner.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Controll Panel</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center" >
					<li class="breadcrumb-item"><a href="index.php" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Controll Panel</li>
				</ol>
			</div>
		</div>
	</div>
</section>    

<body id="body" >
    <br><br>
                <div class="container jumbotron row justify-content-center" style="margin-bottom: 120px;" >
					<a type="button" style="margin:5px" href="users.php" class="btn btn-success" >USERS</a>
					<a type="button" style="margin:5px" href="universities.php" class="btn btn-info" >Universites</a>
					<a type="button" style="margin:5px" href="majors.php" class="btn btn-warning" >Majors</a>
					
				</div>
</body>

<?php
include'template\footer.php';?>