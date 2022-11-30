<?php
$title = 'architecture';
include'template\header.php';?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<h2>architecture</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">

				</ol>
			</div>
		</div>
	</div>
</section>

			
<?php

echo'
<div class="portfolio-filter">
	<button type="button"  class="btn btn-danger" data-filter="all">All</button>
	<button type="button"  class="btn btn-danger" data-filter="Riyadh">Riyadh</button>
	<button type="button"  class="btn btn-danger" data-filter="Qassim">Qassim</button>
	<button type="button"  class="btn btn-danger" data-filter="Al-Taif">Al-Taif</button>
	<button type="button"  class="btn btn-danger" data-filter="Makkah">Makkah</button>
	<button type="button"  class="btn btn-danger" data-filter="Jeddah">Jeddah</button>
</div>

<div class="row">
	<div class="col-12">
		<div class="filtr-container">

			<div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix,  Riyadh">
				<div class="portfolio-block">
					<img class="img-fluid" src="./universty/qusema.webp" alt="">
					<div class="caption">
						<h4><a href="https://cap.qu.edu.sa/" target="_blank">Qassim <br> <br>public</a></h4>
					</div>
				</div>
				<a class="btn btn-outline-danger" href="#">Add favorites</a>
			</div>
		</div>

	</div>
</div>';
include'template\footer.php';?>

