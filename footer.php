<footer>
	<div class="copyright">
		CopyRight 2019
	</div>
	<div class="footer-menu">
		<a href="#" class="trans-3 underline">Uno dos</a>
		<a href="#" class="trans-3 underline">Uno dos</a>
		<a href="#" class="trans-3 underline">Uno dos</a>
		<a href="#" class="trans-3 underline">Uno dos</a>
	</div>
</footer>
</main>

<!-- Modal Confirm Delete -->
<div class="modal fade deleteModal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
   
      <div class="modal-body"><br><h2 class="title">Do you want to delete this?</h2> </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-fill violet rounded trans-3" data-dismiss="modal">Cancel</button>
        <a href="#delete" id="delete" class="btn btn-fill red rounded trans-3">Delete</a> </div>
      </div>
    </div>
  </div>


  <!-- Modal Confirm Delete -->
  <div class="modal fade deleteModalBundle" id="deleteModalBundle" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content">
        <div class="modal-header"> 
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
          <div class="warning-message text-center">
           <h2 class="title">You can not remove this category <br>because has Bundles assigned</h2> 
         </div>

       </div>

     </div>
   </div>
 </div>


 <!-- Modal Create category -->
 <div class="modal fade createCategoryModal modal-one bg-violet" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <form action="#" accept-charset="utf-8">
          <div class="row">
            <div class="col-md-8">
              <label for="category">Name of category</label>
            </div>
          </div>
          <div class="row">
           <div class="col-md-12">
             <div class="form-group">
              <input type="text" name="name"  class="form-control rounded" />
              <input type="hidden" name="icon"   class="form-control" />

            </div>
           </div>
           <div class="col-md-12"> 
             <div class="form-group"> 
              <a href="#" data-toggle="modal" data-target="#iconsModal"  class="btn btn-fill select-icon white rounded trans-3">
                <i class="current-icon">&#xf150</i> Select Icon</a>
            </div>
           </div> 

         </div>
         <div class="row d-flex justify-content-end">
          <div class="col">

          </div>
          <div class="col-md-12 d-flex justify-content-center mt-4">
           <a href="#" class="btn btn-md readius-3 btn-fill btn-modal-cancel violet rounded trans-3 mr-md-3">Cancel</a>   
           <a href="#" class="btn btn-md readius-3 btn-fill green rounded trans-3">Create</a>  
         </div>

       </div>

     </form>
   </div>

 </div>
</div>
</div>


<!-- end modal category -->


<div class="modal fade researchModal" id="researchModal" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">

        <?php include('../partials/guides.php') ?>
      </div>

    </div>
  </div>
</div>


<!-- Modal research -->


<div class="modal fade iconsModal modal-dialog-scrollable" id="iconsModal" tabindex="-1" role="dialog" aria-labelledby="labelModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header"> 
        <h3 class="h2">Select a icon</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

      </div>
      <div class="modal-body">
        <div class="grid-icons"> 
          <?php 
          $font_icons = jt_get_font_icons();
          $active = 'active';
          foreach($font_icons as $k=>$v): ?>
            <a href="#<?php echo $v ?>" class=<?php echo $active ?> single-icon trans-3"><i class="icon">&#x<?php echo $v ?></i></a>
          <?php $active = '' ; endforeach; ?>
        </div>

      </div>
    </div>
  </div>


  <!-- Modal research -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="../js/popper.min.js" type="text/javascript"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script  src="../js/swiper.min.js"></script>  
  <script src="../js/lity.js" type="text/javascript"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
  <script   src="../js/main.js"></script> 

</body>
</html>