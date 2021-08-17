
<!-- Modal -->
<form action="{{URL::to('/product/add')}}" method="POST">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <div class="py-12">
              @csrf
              <label for="">รหัสสินค้า</label>
              <input type="text" name="code" id="code" value="">
              <br>
              <label for="">ชื่อสินค้า</label>
              <input type="text" name="name" id="name" value="">

              <input type="hidden" name="edit_id" id="edit_id" value="">
              <input type="hidden" name="edit_mode" id="edit_mode" value="">

          </div>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id='save' class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form> 
