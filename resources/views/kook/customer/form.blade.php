<div class="py-12">
    <form action="{{URL::to('/customer/add')}}" method="POST">
      @csrf
      <label for="">รหัสสินค้า</label>
      <input type="text" name="code" id="code" value="">
      <br>
      <label for="">ชื่อสินค้า</label>
      <input type="text" name="name" id="name" value="">
      <br>
      <button>เพิ่มข้อมูล</button>
    </form> 
  </div>
  