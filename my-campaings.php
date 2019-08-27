 
<!-- section -->
<section class="versions wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-title col-md-12 order-md-1  order-lg-1 col-lg-3   d-flex align-items-center">
						<h2 class="h1">
							My Campaings <strong>(30)</strong> 
						</h2> 

					</div>
					<div class="col-video  col order-md-3 order-md-2 order-lg-2">

						<!-- Video Collapse -->
						<a href="https://www.youtube.com/watch?v=m0ieF9Nnl20" data-lity class="btn-video radius-3 trans-3">
							<span class="title">Watch the tutorial</span>
							<i class="icon-play"></i>
						</a>
						<!-- end Video Collapse -->

					</div>
					<div class="col-actions col-md-8 col-lg-5  order-lg-3 order-md-3 d-flex align-items-center justify-content-end top-links">
						<a href="#" data-toggle="modal" data-target="#researchModal" class="radius-3 btn-fill blue trans-3" ><i class="icon-search"></i> Show Research</a>
						<div class="radius-3 btn-outline trans-3" >Versions: &nbsp;<strong>25</strong></div>
						<a href="#" class="radius-3 violet full btn-fill trans-3" ><i class="icon-duplicate"></i> Grab Original</a>
						<?php include('partials/filter.php') ?>
					</div>
				</div>
			</div>
		</header>	


		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">					
					<div class="col-xl-12 d-flex flex-wrap justify-content-between"> 
						<?php 
						for($i=1;$i<=30;$i++): ?>
							
							<?php include('partials/card-project.php'); ?>
							

						<?php endfor; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- end Campaings -->

</section>
<!-- end section -->
</div>

