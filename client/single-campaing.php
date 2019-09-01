 
<!-- section -->
<section class="versions wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-list">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-title col-md-12 order-md-1  order-lg-1 col-lg-3   d-flex align-items-center">
						<h2 class="h1">
							Name Single Campaing 
						</h2> 
						<div class="heading-actions ml-3">
							<a href="#" title="Edit" data-toggle="tooltip" data-placement="bottom" class="trans-3 mr-2"><i class="icon-edit"></i></a>
							<a href="#" title="Remove" data-toggle="modal" data-target="#deleteModal"  class="trans-3"><i class="icon-trash" data-toggle="tooltip" data-placement="bottom"></i></a>

						</div>

					</div>
				 
					<div class="col-actions col  order-lg-3 order-md-3 d-flex align-items-center justify-content-end top-links">
					 	<a href="#" data-toggle="modal" data-target="#researchModal2" class="rounded btn-fill blue trans-3" ><i class="icon-search"></i> Show Research</a>
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
						for($i=1;$i<=30;$i++): ?>
							
							<?php include('../partials/card-project.php'); ?>
							

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

