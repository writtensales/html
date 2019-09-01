<div class="guide-content pr-5">
	<?php for($d = 1; $d < 5 ; $d++): ?>
		<aside class="guide-wrap rounded trans-3 p-4">
			<form action="#">
				<div class="form-group">
					<span class="delete trans-3 float-right" data-toggle="modal" data-target="#deleteModal" title="Remove"><i class="icon-trash" data-toggle="tooltip" data-placement="bottom" ></i></span> 
					<label for="Title">Title</label>
					<input type="text"  class="form-control rounded" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, ut!"  id="Title">

				</div>
				<div class="form-group">
					<label for="Reference">Reference</label>
					<input type="text"  class="form-control rounded" value="www.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, perferendis."  id="Reference">
				</div>
			 	<div class="form-group">
					<label for="Information">Information</label>
					<textarea  class="form-control rounded"  value="" id="Information" rows="3" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
					</textarea>
				</div>
			 

			</form>
		</aside>
		<!-- end guide --> 
	<?php endfor; ?>

</div>
