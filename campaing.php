<?php include('header.php') ?>
<!-- Dashboard -->
<section class="dashboard wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-md-3 d-flex align-items-center">
						<h2 class="h1">
							Name of campaing  
						</h2>
						<div class="heading-actions">
							<a href="#" title="Edit" data-toggle="tooltip" data-placement="bottom" class="trans-3"><i class="icon-edit"></i></a>
							<a href="#" title="Remove" data-toggle="tooltip" data-placement="bottom" class="trans-3"><i class="icon-trash"></i></a>

						</div>

					</div>
					<div class="col-md-4">

						<!-- Video Collapse -->
						<a href="https://www.youtube.com/watch?v=m0ieF9Nnl20" data-lity class="btn-video radius-3 trans-3">
							<span class="title">Watch the tutorial</span>
							<i class="icon-play"></i>
						</a>
						<!-- end Video Collapse -->

					</div>
					<div class="col-md-5 d-flex align-items-center">
						<a href="#" class="radius-3 btn-fill trans-3" ><i class="icon-instagram"></i> Show Research</a>
						<div class="radius-3 btn-fill trans-3" >Versions: <strong>25</strong></div>
						<a href="#" class="radius-3 btn-fill trans-3" ><i class="icon-instagram"></i> Grab Original</a>
						<div class="wrap-filter">
							<a href="#" class="radius-3 btn-filter trans-3 radius-3" data-toggle="tooltip" data-placement="right" title="Filter for"><i class="icon-duplicate"></i></a>
							<ul class="list">
								<li>Item One</li>
								<li>Item Two</li>
								<li>Item Three</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>	


		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">					

					<!-- Slides -->
					<?php 
					for($i=1;$i<=30;$i++): ?>
						<div class="col-md-4 col-lg-2">
							<?php include('partials/card-project-two.php'); ?>
						</div>

					<?php endfor; ?>


				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Campaings -->

</section>
<!-- end Dashboard -->


<?php include('footer.php') ?>