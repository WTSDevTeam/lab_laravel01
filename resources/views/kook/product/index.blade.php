@extends('layout2.master')

@section('content')
    
  <h1>หน้าสินค้า</h1>

  <button type="button" id="add" class="btn btn-primary">
    เพิ่มข้อมูล
  </button>

  <div class="container">
    <div class="row">
      <table id='myTable' class="table table-striped table-hover">
        <thead>
          <tr>
            <th>อันดับ</th>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->product_code}}</td>
            <td>{{$item->product_name}}</td>
            <td><a href="javascript:edit({{$item->id}});" class="btn btn-primary">แก้ไข</a></td>
            <td><a href="javascript:confirm_deldata({{$item->id}});" class="btn btn-danger">ลบข้อมูล</a></td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>

  @include('kook.product.form')

@endsection


@section('page-script')

  <script type="text/javascript" src="{{asset('/asset/js/product.js')}}"></script>

@endsection


