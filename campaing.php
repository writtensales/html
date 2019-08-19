<?php include('header.php') ?>
<!-- section -->
<section class="versions wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-md-3 d-flex align-items-center">
						<h2 class="h1">
							Name of campaing  
						</h2>
						<div class="heading-actions">
							<a href="#" title="Edit" data-toggle="tooltip" data-placement="bottom" class="trans-3"><i class="icon-edit"></i></a>
							<a href="#" title="Remove" data-toggle="modal" data-target="#deleteModal"  class="trans-3"><i class="icon-trash" data-toggle="tooltip" data-placement="bottom"></i></a>

						</div>

					</div>
					<div class="col">

						<!-- Video Collapse -->
						<a href="https://www.youtube.com/watch?v=m0ieF9Nnl20" data-lity class="btn-video radius-3 trans-3">
							<span class="title">Watch the tutorial</span>
							<i class="icon-play"></i>
						</a>
						<!-- end Video Collapse -->

					</div>
					<div class="col-md-5 d-flex align-items-center justify-content-end top-links">
						<a href="#" class="radius-3 btn-fill trans-3" ><i class="icon-search"></i> Show Research</a>
						<div class="radius-3 btn-fill trans-3" >Versions: &nbsp;<strong>25</strong></div>
						<a href="#" class="radius-3 violet full btn-fill trans-3" ><i class="icon-duplicate"></i> Grab Original</a>
						<?php include('partials/filter.php') ?>
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

<!-- end Campaings -->

</section>
<!-- end section -->
</div>

<?php include('footer.php') ?>