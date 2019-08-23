 
<!-- section -->
<section class="campaign wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-creation">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center justify-content-between">
					<div class="col-md-4 d-flex align-items-center">
						<h1 class="h1">
							Copy Templates
						</h1>

					</div>
					<!-- <div class="col">
 
						<form action="">	
							<div class="form-group form-search">
								<i class="icon-search"></i>
								<input type="search" placeholder="Search a campaing" name="" id="" class="form-control">
							</div>			
						</form>
			 

					</div> -->
					<div class="col-md-4 d-flex align-items-center justify-content-end top-links">

						<a href="index.php?tpl=create-bundle" class="radius-3 btn-fill violet full trans-3" ><i class="icon-add-button"></i> Add</a>	<a href="index.php?tpl=create-bundle" class="radius-3 btn-fill green full trans-3" ><i class="icon-send"></i> Publish</a>			 

					</div>
				</div>
			</div>
		</header>	

		<div class="bundle-list">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						
						<table width="100%" cellspacing="20" class="table-filter">
							<thead>
								<th>Icon</th>
								<th>Title</th>
								<th>Created by</th>
								<th>Date Created</th>
								<th>Edit</th>
								<th>Delete</th>
							</thead>
							<tbody>
								<?php for($a=0;$a<=12;$a++): ?>
									<tr class="wrap-tr">
										<td class="icon"><i class="icon-bundles-summary circle-icon"></i></td>
										<td class="title"><h4><?php echo $a ?> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, veritatis!</h4></td>
										<td class="createdby">John Smith</td>
										<td class="date-created"><time datetime="2011-01-12">January 12th, 2011</time></td>
										<td class="action-edit">
											<a href="#" class="btn-outline fill radius-3"><i class="icon-edit"></i>	Edit</a>
										</td>
										<td class="action-delete">
											<a href="#" data-toggle="modal" data-target="#deleteModal" ><i class="icon-trash"></i></a>
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

 