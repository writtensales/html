<!-- Dashboard -->
<section class="dashboard wrap-cotent">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="h2">
					Features <span class="number">(3)</span>
				</h2>
				<div class="features-slider">
					<!-- Slider main container -->
					<div class="swiper-container"> 
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<aside>
									<div class="wrap-img">
										<i class="icon-instagram"></i>
									</div>
									<div class="wrap-info">
										<h4>Panda Google anounce new features!</h4>
										<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor maiores ipsam distinctio reiciendis ullam consequatur alias perferendis nihil dicta.</div>
										<time datetime="2011-01-12">January 12th, 2011</time>
									</div>
								</aside>
							</div> 
							<div class="swiper-slide">
								<aside>
									<div class="wrap-img">
										<i class="icon-instagram"></i>
									</div>
									<div class="wrap-info">
										<h4>Wp NEW Ecommerce 2.0</h4>
										<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor maiores ipsam distinctio reiciendis ullam consequatur alias perferendis nihil dicta.</div>
										<time datetime="2011-01-12">January 12th, 2011</time>
									</div>
								</aside>
							</div> 
							<div class="swiper-slide">
								<aside>
									<div class="wrap-img">
										<i class="icon-instagram"></i>
									</div>
									<div class="wrap-info">
										<h4>Woocommerce Release 3.5</h4>
										<div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor maiores ipsam distinctio reiciendis ullam consequatur alias perferendis nihil dicta.</div>
										<time datetime="2011-01-12">January 12th, 2011</time>
									</div>
								</aside>
							</div> 

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<aside class="dash-video">
					<h2>Lorem ipsum dolor sit amet,<strong> consectetur adipisicing</strong> elit. Reiciendis, assumenda.</h2>
					<iframe src="https://player.vimeo.com/video/259411563" width="100%" height="300" frameborder="0" title="Aqui un buen titulo" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>	
				</aside>
			</div>
		</div>
	</div>


	<!-- Campaings -->
	<div class="campaings">
		<div class="container-fluid">
			<div class="row d-flex align-items-center">
				<div class="col-md-2">
					<h2 class="h2">
						My Campaings <span class="number">(18)</span>
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
					
					<?php include('partials/filter.php') ?>

				</div>
			</div>
		</div>
		<div class="campaing-list">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<!-- Slider main container -->
						<div class="swiper-container"> 
							<div class="swiper-wrapper">
								<!-- Slides -->
								<?php 
								for($a=1;$a<=20;$a++): 
									include('partials/card-project.php');
								endfor; ?>

							</div>

						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<!-- end swiper -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Campaings -->

</section>
<!-- end Dashboard -->
