@extends('layout2.master')

@section('content')
    
  <h1>หน้าลูกค้า</h1>

  <div class="py-12">
    
    <button type="button" onclick="add();" class="btn btn-primary">
      เพิ่มข้อมูล
    </button>

  <div class="container">
    <div class="row">
      <table id='myTable' class="table table-striped table-hover">
        <thead>
          <tr>
            <th>อันดับ</th>
            <th>รหัสลูกค้า</th>
            <th>ชื่อ</th>
            <th>ที่อยู่</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->customer_code}}</td>
            <td>{{$item->customer_name}}</td>
            <td>{{$item->address}}</td>
            <td><a href="javascript:edit({{$item->id}});" class="btn btn-primary">แก้ไข</a></td>
            <td><a href="javascript:confirm_deldata({{$item->id}});" class="btn btn-danger">ลบข้อมูล</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @include('kook.customer.form')

@endsection


@section('page-script')

  <script>

    $(document).ready(function() {
      $('#myTable').DataTable();
    });
    
    function add() {

      $('#edit_mode').val('insert');

      blankform();
      $('#exampleModalLabel').text('เพิ่มข้อมูลลูกค้า');
      $('#exampleModal').modal('show');

    }
    
    function edit(id) {


      $('#edit_mode').val('edit');
      $('#edit_id').val(id);

      $('#load').css('visibility', 'show');
      $('#save').hide();

      blankform();

      $('#exampleModalLabel').text('แก้ไขข้อมูลลูกค้า');
      $('#exampleModal').modal('show');

      $.ajax({
        type: "GET",
        dataType: 'json',
        url: "{{URL::to('/kook/customer/get')}}" + "/" + id,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(callback) {
          
          // $('#load').hide();
          $('#load').css('visibility', 'hidden');

          console.log(callback.data.customer_code);
          console.log(callback.data.customer_name);
          
          $('#code').val(callback.data.customer_code);
          $('#name').val(callback.data.customer_name);
          $('#address').val(callback.data.address);

          $('#save').show();

    
        },
      });


    }

    function confirm_deldata(id) {

      swal({
        title: "Are you sure",
        text: "ยืนยันการลบข้อมูล ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            //swal("Poof! Your imaginary file has been deleted!", {icon: "success",});
            deldata(id);
        } else {
          //swal("Your imaginary file is safe!");
        }
      });

    }

    function deldata(id) {
      
      $.ajax({
        type: "GET",
        dataType: 'json',
        url: "{{URL::to('/kook/customer/delete')}}" + "/" + id,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(callback) {
          console.log(callback);
          location.reload();
        },
      });

    }
    
    function blankform() {
      $('#code').val('');
      $('#name').val('');
      $('#address').val('');
    }

  </script>

@endsection
