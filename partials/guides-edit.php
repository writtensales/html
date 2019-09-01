<div class="guide-content p-5 bg-light rounded">
	<?php for($d = 1; $d < 5 ; $d++): ?>
		<aside class="guide-wrap rounded trans-3 p-4">
			<form action="#">
				<div class="form-group">
					<label for="code">{{code}} <span class="copy btn bg-violet-light rounded ml-4 px-4">Copy</span></label>
					<input type="text" placeholder="Brief Description" class="form-control rounded bg-none" id="code" />
				</div>
				<div class="form-group">
					<label for="example">Example</label>
					<textarea id="example" class="form-control rounded" rows="5"></textarea>
				</div>

			</form>
		</aside>
		<!-- end guide --> 
	<?php endfor; ?>

</div>
