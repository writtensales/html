<div class="guide-content">
	<?php for($d = 1; $d < 5 ; $d++): ?>
		<aside class="guide-wrap radius-3 trans-3">
			<form action="#">
				<div class="form-group">
					<label for="guide1">Guide</label>
					<textarea  class="form-control radius-3" rows="3" id="guide1" placeholder="Answer to Inquiry"></textarea>
				</div>
				<div class="form-group">
					<label for="research1">Research</label>
					<select  class="form-control radius-3" id="research1" >
						<option value="">Select (optional, but highly recommended)</option>
						<option>Opcion 1</option> 
						<option>Opcion 1</option> 
						<option>Opcion 1</option> 
						<option>Opcion 1</option> 
					</select>
				</div>

			</form>
		</aside>
		<!-- end guide --> 
	<?php endfor; ?>

</div>
