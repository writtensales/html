<?php 

include('header.php');
$tpl = (!empty($_GET['tpl'])) ? $_GET['tpl'] : 'dashboard';
 ?>
				<!-- Section -->
			<section> 
				
				<header  class="heading-breadcrumb">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<?php include('partials/breacrumb.php') ?> 
							</div>
						</div>
					</div>
					
				</header> 

					<?php include($tpl.'.php') ?>
		 

			</section>
			<!-- end Section -->
		</div>
<?php include('footer.php') ?>