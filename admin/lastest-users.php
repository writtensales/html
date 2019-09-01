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
							</thead>
							<tbody>
								<?php 
								$cls = array('status-active','status-blocked','status-inactive');
								for($a=0;$a<=12;$a++): 
									shuffle($cls);
									?>
									<tr class="wrap-tr" >
										<td class="icon"><i class="icon-user2 circle-icon"></i></td>
										<td class="title"><h4>John Smith</h4></td>
										<td class="email"><a href="mailto:name@mail.com"  class="trans-3"  >name@mail.com</a></td>
										<td class="bundle-number">Bundles (30)</td>
										<td class="status"><time datetime="2011-01-12"><div class="<?php echo $cls[0] ?>">Active</div></time></td>
										<td class="action-edit">
											<a href="#" class="btn-outline fill rounded"><i class="icon-edit"></i>	Edit</a>
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

 