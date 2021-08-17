
<!-- Modal -->
<form action="{{URL::to('/kook/customer/add')}}" method="POST">
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
              <label  for="inputAddress2" class="form-label">รหัสลูกค้า</label>
              <input type="text" class="form-control" name="code" id="code" value="" placeholder="กรอกรหัสลูกค้า">
              <br>
              <label  for="inputAddress2" class="form-label">ชื่อลูกค้า</label>
              <input type="text" class="form-control" name="name" id="name" value="" placeholder="กรอกชื่อลูกค้า">
              <br>
              <div class="col-12">
              <label for="inputAddress2" class="form-label">ที่อยู่</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="กรอกที่อยู่ลูกค้า">
              </div>
              <input type="hidden" name="edit_id" id="edit_id" value="">
              <input type="hidden" name="edit_mode" id="edit_mode" value="">    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id='save' class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form> 
