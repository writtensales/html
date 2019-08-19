<?php include('header.php') ?>
<!-- section -->
<section class="campaign wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-creation">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center">
					<div class="col-md-4 d-flex align-items-center">
						<h1 class="h1">
							Lasted Bundles
						</h1>

					</div>
					<div class="col">

						<!-- Search Wrap -->
						<form action="">	
							<div class="form-group form-search">
								<i class="icon-search"></i>
								<input type="search" placeholder="Search a campaing" name="" id="" class="form-control">
							</div>			
						</form>
						<!-- end Search Wrap -->

					</div>
					<div class="col-md-4 d-flex align-items-center justify-content-end top-links">

						<a href="#" class="radius-3 btn-fill violet full trans-3" ><i class="icon-add-button"></i> Add</a>			 

					</div>
				</div>
			</div>
		</header>	

		<div class="bundle-list">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
						
			<table width="100%" cellspacing="20">

				<tbody>
					<?php for($a=0;$a<=12;$a++): ?>
<tr style="border:2px solid red;margin:2rem 0;">
						<td class="icon">i.iocn-instagram</td>
						<td class="icon"><h4 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, veritatis!</h4></td>
						<td class="icon"><div class="created">John Smith</div></td>
						<td class="icon"><time datetime="2011-01-12">January 12th, 2011</time></td>
						<td class="action-edit">
							<a href="#" class="btn-fill radius-3"><i class="icon-edit"></i>	Edit</a>
						</td>
						<td class="action-delete">
							<a href="#"><i class="icon-delete"></i></a>
						</td>
					</tr>
					<?php endfor; ?>
				</tbody>
			</table>
				</div>
			</div>
		</div>


		</div>
		
	</div>

	<!-- end Campaings -->

</section>
<!-- end section -->
</div>

<?php include('footer.php') ?>