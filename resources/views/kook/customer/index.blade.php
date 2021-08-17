@extends('layout2.master')

@section('content')
    
  <h1>หน้าลูกค้า</h1>

  <button type="button" id="add" class="btn btn-primary">
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
          {{-- @foreach($data as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->customer_code}}</td>
            <td>{{$item->customer_name}}</td>
            <td>{{$item->address}}</td>
            <td><a href="javascript:edit({{$item->id}});" class="btn btn-primary">แก้ไข</a></td>
            <td><a href="javascript:confirm_deldata({{$item->id}});" class="btn btn-danger">ลบข้อมูล</a></td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>

  @include('kook.customer.form')

@endsection


@section('page-script')

  <script type="text/javascript" src="{{asset('/asset/js/customer.js')}}"></script>

@endsection
