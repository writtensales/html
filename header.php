<?php  
$arr_alerts = array(
	'text-warning', 'text-success', 'text-danger' 
); 
$arr_alerts_txt = array(
	 'In Progress', 'Complete', 'Disabled'
); 

?>
<!doctype html>
<html lang="es" >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<title>Written Sales</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/png" />

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css"  href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="css/lity.css">  
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
	<script src="https://kit.fontawesome.com/767eb3f465.js"></script>
</head>
<body>
	<!-- ADd class "menu-collapse" in body open tag for showing the menu collapse -->

	<main>
		<div class="sidebar-menu">
			<div class="logo">
				<a href="index.php" >
					<img src="images/icon-written-sales.svg" class="mobile" width="38" alt="">
					<img src="images/logo-written-sales.svg" class="web" width="190" alt="">
				</a>
			</div>
			<nav id="sidebar" class="sidebar-wrapper">
				<ul class="menu-wrap">
					<li><a href="index.php?tpl=campaing" class="trans-3"><i class="icon-instagram"></i> <span>Campaigns</span></a></li>
					<li><a href="index.php?tpl=campaing" class="trans-3"><i class="icon-instagram"></i> <span>My Campaigns</span></a></li>
					<li><a href="index.php?tpl=name-of-your-campaign" class="trans-3"><i class="icon-instagram"></i> <span>Name of your campaign</span></a></li>
					
					<li class="sidebar-dropdown">
						<a href="index.php?tpl=lastest-users">
							<i class="icon-user2"></i>
							<span>Users</span> &nbsp;
							<span class="badge badge-pill badge-warning">New</span>
						</a>
						<div class="sidebar-submenu">
							<ul>
								<li>
									<a href="#" class="trans-3">
										
									</a>
								</li>
								<li>
									<a href="#" class="trans-3">Dashboard 2</a>
								</li>
								<li>
									<a href="#" class="trans-3">Dashboard 3</a>
								</li>
							</ul>
						</div>
					</li>
					<li><a href="index.php?tpl=user" class="trans-3"><i class="icon-instagram"></i> <span>User Profile</span></a></li>
					<li><a href="index.php?tpl=create-campaign" class="trans-3"><i class="icon-instagram"></i> <span>Create a project</span></a></li>
					<li><a href="index.php?tpl=lastest-bundles" class="trans-3"><i class="icon-submissions"></i> <span>Lastest Bundles</span></a></li>
					<li><a href="index.php?tpl=create-bundle" class="trans-3"><i class="icon-instagram"></i> <span>Create Bundle</span></a></li>
					<li><a href="index.php?tpl=version" class="trans-3"><i class="icon-instagram"></i> <span>Version</span></a></li>
					<li><a href="index.php?tpl=copy-templates" class="trans-3"><i class="icon-instagram"></i> <span>Copy Templates</span></a></li>
					<li><a href="index.php?tpl=researching" class="trans-3"><i class="icon-instagram"></i> <span>Researching</span></a></li>
					 <li><a href="index.php?tpl=menu" class="trans-3 active"><i class="icon-menu-sidebar"></i> <span>Menu</span></a></li>

					
					
				</ul>
				<ul class="wrap-hide-menu">
			<li><a href="#" class="trans-3 collapse-menu" data-collapse="Show menu" data-visible="Hide menu"><i class="icon-circle-right"></i> <span>Hide menu</span></a></li>
				</ul>
			</nav>
		</div> 

		<div class="section-content">
			<header class="header">
				<div class="container-fluid">
					<div class="row align-items-center d-flex">
						<div class="col-5">
							<!-- create project -->
							<div class="wrap-create-btn d-flex align-items-center">

								<div class="btn-group">
									<a href="index.php?tpl=name-of-your-campaign" class="btn btn-create btn-sm"  >
										Create Project
									</a>	
									<button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Sales Letter</a>
										<a class="dropdown-item" href="#">AOrganic Social</a>
										<a class="dropdown-item" href="#">Something else here</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Separated link</a>
									</div>
								</div> 
								
								<!-- search top -->
								<form action="#"   class="ml-4 search-animated" accept-charset="utf-8">

									<button class="search-btn trans-3"><i class="icon-search"></i></button>
									<input type="search" class="search-field form-control trans-3" placeholder="Search for..." />
								</form>

								<!-- end search top -->



							</div>
						</div>
						<div class="col d-flex align-items-center justify-content-end ">
							

							<!-- end create project -->
							<div class="wrap-links">
								<a href="version" class="wrap-link underline">
									<i class="icon-my-campaigns"></i> My Campaigns
								</a>
								<a href="#" class="wrap-link underline">
									<i class="icon-facebook-group"></i> Facebook Group
								</a>

							</div>
							<!-- end wrap links -->
							<div class="wrap-right">
								<aside class="user-wrap">
									<div class="top-profile">
										<div class="img"></div>
										<div class="right">
											<div class="name">Andres Peguero</div>
											<div class="job">Administrador</div>
											<!-- <div class="actions">
												<a href="#" class="action trans-3 underline">
													<i class="icon-setting"></i> Settings
												</a>
												<a href="#" class="action trans-3 underline">
													<i class="icon-sign-out"></i> Sign out
												</a>

											</div> -->
										</div>
									</div>
								</aside>
							</div>
							<!-- end wrap right -->
						</div>
					</div>
				</div>

			</header>