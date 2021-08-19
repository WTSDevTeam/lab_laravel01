<!-- Modal -->
<form id="Form1">
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
          <p id="pinfo">กรุณาจองสินค้ามากกว่า 20 ชิ้น</p>
          </div>

          <div class="row">
            <div class="col-6">
              <label  for="inputAddress2" class="form-label">รหัสสินค้า</label>
              <input type="text" class="form-control" name="p_code" id="p_code" value="" placeholder="กรอกรหัสสินค้า">
            </div>
            <div class="col-6">
              <label  for="inputAddress2" class="form-label">ชื่อสินค้า</label>
              <input type="text" class="form-control" name="name" id="name" value="" placeholder="กรอกชื่อสินค้า">
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <label  for="inputAddress2" class="form-label">สินค้าคงเหลือ</label>
              <input type="number" class="form-control" name="qty" id="qty" value="">
            </div>
          </div>

          <div>
          <input type="hidden" name="edit_id" id="edit_id" value="">
          <input type="hidden" name="edit_mode" id="edit_mode" value="">
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id='save' class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</form>

