
<!-- Modal -->
<form id="Form1" action="{{URL::to('/kook/customer/add')}}" method="POST">
  @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="info" class="alert alert-warning" role="alert">
            จำนวนที่จอง ต้องมากกว่า 0
          </div>

          <div class="row">
            <div class="col-6">
              <label  for="inputAddress2" class="form-label">รหัสลูกค้า</label>
              <input type="text" class="form-control" name="code" id="code" value="" placeholder="กรอกรหัสลูกค้า">
            </div>
            <div class="col-6">
              <label  for="inputAddress2" class="form-label">ชื่อลูกค้า</label>
              <input type="text" class="form-control" name="name" id="name" value="" placeholder="กรอกชื่อลูกค้า">
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <label for="inputAddress2" class="form-label">ที่อยู่</label>
              <textarea rows="4" class="form-control" name="address" id="address" placeholder="กรอกที่อยู่ลูกค้า"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <label class="form-label">จำนวนที่จอง</label>
              <input type="number" class="form-control" name="qty" id="qty" value=0>
            </div>
          </div>

          <div>
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

