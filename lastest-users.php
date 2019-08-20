 <?php 
$status = array(
	'active'=>'active',
	'inactive'=>'inactive',
	'blocked'=>'blocked',

)
  ?>
<!-- section -->
<section class="campaign wrap-content">


	<!-- Campaings -->
	<div class="section-campaing-creation">

		<header class="heading-second sticky-top">
			<div class="container-fluid">
				<div class="row d-flex align-items-center justify-content-between">
					<div class="col-md-4 d-flex align-items-center">
						<h1 class="h1">
							Lastest Users
						</h1>

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
								<th>Name</th>
								<th>Email</th>
								<th># Bundles</th>
								<th>Status</th>
								<th>Edit</th>
								<th>Delete</th>
							</thead>
							<tbody>
								<?php for($a=0;$a<=12;$a++): ?>
									<tr class="wrap-tr">
										<td class="icon"><i class="icon-user"></i></td>
										<td class="title"><h4><?php echo $a ?> John Smith</h4></td>
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

 