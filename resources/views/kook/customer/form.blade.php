<!-- Modal -->
<form id="Form1">
  @csrf
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">เพิ่มชื่อลูกค้า</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="info" class="alert alert-warning" role="alert">
          <p id="pinfo">--</p>
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
            <div class="col-8">
              {{-- <label  for="inputAddress2" class="form-label">รหัสสินค้า</label>
              <input type="text" class="form-control" name="p_code" id="p_code" value="" placeholder="รหัสสินค้า"> --}}
              <label for="exampleFormControlSelect1">รหัสสินค้า</label>
              <select class="form-control" id="option_product">
                @if (isset($product_data))
                  @foreach($product_data as $item)
                  <option value="{{$item->product_code}}">{{$item->product_name .' - '.$item->product_code}}</option>
                  @endforeach
                @endif
              </select>
            </div>
            <div class="col-4">
              <label class="form-label">สต๊อค</label>
              <input type="text" class="form-control" name="stock_qty" id="stock_qty" value="" readonly>
            </div>

          </div>
          <div class="row">
            <div class="col-6">
              <label class="form-label">จำนวนที่จอง</label>
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
  </div>
</form>



