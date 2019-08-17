<?php include('header.php') ?>
		<!-- end Wrap Menu -->
		<div class="section-content">
			<header class="header">
				<div class="wrap-create-btn">
					<div class="btn-group">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Create Project
						</button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Separated link</a>
						</div>
					</div>
				</div>
				<div class="wrap-links">
					<div class="wrap-link">
						<i class="icon-instagram"></i> My Campaings
					</div>
					<div class="wrap-link">
						<i class="icon-instagram"></i> Facebook Group
					</div>

				</div>
				<div class="wrap-right">
					<aside class="user-wrap">
						<div class="top-profile">
							<div class="img"></div>
							<div class="right">
								<div class="name">Andres Peguero</div>
								<div class="job">Administrador</div>
								<div class="actions">
									<a href="#" class="action trans-3 underline">
										<i class="icon-instagram"></i> Settings
									</a>
									<a href="#" class="action trans-3 underline">
										<i class="icon-instagram"></i> Sign out
									</a>

								</div>
							</div>
						</div>
					</aside>
				</div>

			</header>
			<!-- Section -->
			<section> 
				
				<header>
					<?php include('partials/breacrumb.php') ?> 
					
				</header>
				<div class="content">

					<?php include('dashboard.php') ?>
				</div>

			</section>
			<!-- end Section -->
		</div>
<?php include('footer.php') ?>