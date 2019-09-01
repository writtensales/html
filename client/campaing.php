 
<!-- section -->
<section class="versions wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-title col-md-12 order-md-1  order-lg-1 col-lg-3   d-flex align-items-center">
						<h2 class="h1">
							Name of version
						</h2>
						<div class="heading-actions ml-3">
							<a href="#" title="Edit" data-toggle="tooltip" data-placement="bottom" class="trans-3 mr-2"><i class="icon-edit"></i></a>
							<a href="#" title="Remove" data-toggle="modal" data-target="#deleteModal"  class="trans-3"><i class="icon-trash" data-toggle="tooltip" data-placement="bottom"></i></a>

						</div>

					</div>
					<div class="col-video  col order-md-3 order-md-2 order-lg-2">

						
						<!-- Video Collapse -->
						<div class="wrap-video-dropdown solaped">
							<a href="javascript:;"  class="btn-video rounded trans-3">
								<span class="title">Watch the tutorial</span>
								<i class="icon-play trans-3"></i>
							</a>
							<div class="video trans-5">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe src="https://player.vimeo.com/video/259411563" class="embed-responsive-item"   frameborder="0" title="Aqui un buen titulo" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
								</div>
							</div>
						</div>
						<!-- end Video Collapse -->

					</div>
					<div class="col-actions col-md-8 col-lg-5  order-lg-3 order-md-3 d-flex align-items-center justify-content-end top-links">
						<a href="#" data-toggle="modal" data-target="#researchModal" class="rounded btn-fill blue trans-3" ><i class="icon-search"></i> Show Research</a>
						<div class="rounded btn-outline trans-3" >Versions: &nbsp;<strong>25</strong></div>
						<a href="#" class="rounded violet full btn-fill trans-3" ><i class="icon-duplicate"></i> Grab Original</a>
						<?php include('../partials/filter.php') ?>
					</div>
				</div>
			</div>
		</header>	


		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">					
					<div class="col-xl-12 d-flex flex-wrap justify-content-between"> 
						<?php

						$cls = array('active',' ') ;
						for($i=1;$i<=30;$i++):
							shuffle($cls);
							?>
							
							<?php include('../partials/card-project-two.php'); ?>
							

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

