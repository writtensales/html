<?php $_rand = rand(0, count($arr_alerts) - 1); /*edit in header.php*/?>
<!-- Card project -->
<a href="#" class="card-doc-one radius-3 trans-3">
		<div class="top-actions">
				<span class="copy trans-3" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="icon-edit"></i></span> &nbsp;
				<span class="delete trans-3" data-toggle="modal" data-target="#deleteModal" title="Remove"><i class="icon-trash"  data-toggle="tooltip" data-placement="bottom" title="Delete"></i></span> 
			</div>
	<span class="status <?php echo $arr_alerts[$_rand]; ?>"><strong><?php echo $arr_alerts_txt[$_rand]; ?></strong></span>
	<h6 class="title trans-3">Lorem ipsum dolor sit amet.</h6>
	<time class="date trans-3">25 Jul, 2018</time>
	<div class="version trans-3 radius-3">
		Versions &nbsp;<strong>(3)</strong>
	</div>
</a> 
<!-- end Card prpject -->