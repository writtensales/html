<?php include('header.php') ?>
<!-- Dashboard -->
<section class="dashboard wrap-cotent">


	<!-- Campaings -->
	<div class="section-campaing-list">
		<div class="container-fluid">
			<div class="row d-flex align-items-center">
				<div class="col-md-2">
					<h2 class="h1">
						Name of campaing <span class="number">(18)</span>
					</h2>
				</div>
				<div class="col-md-4">
					
					<form action="">	
						<div class="form-group form-search">
							<i class="icon-search"></i>
							<input type="search" placeholder="Search a campaing" name="" id="" class="form-control">
						</div>			
					</form>
				</div>
				<div class="col-md-2 wrap-filter-sect d-flex justify-content-end">
					<div class="wrap-filter">
						<a href="#" class="btn-filter trans-3 radius-3" title="Filter for"><i class="icon-facebook"></i></a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">					

					<!-- Slides -->
					<?php 
					for($i=1;$i<=30;$i++): ?>
						<div class="col-md-3 col-lg-2">
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