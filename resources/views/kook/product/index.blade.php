@extends('layout2.master')

<h1>หน้าสินค้า</h1>

<div class="py-12">
  <div class="container">
    <div class="row">
    <table class="table table-dark table-hover">
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
        @foreach($data as $item)
          <tr>
            <td>{{$item->id}}</></td>
            <td>{{$item->product_code}}</></td>
            <td>{{$item->product_name}}</></td>
            <td><a href="{{URL::to('/kook/product/edit/'.$item->id)}}" class="btn btn-primary">แก้ไข</a></td>
            <td><a href="{{URL::to('/kook/product/edit/'.$item->id)}}" class="btn btn-danger">ลบข้อมูล</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      </div>
  </div>
</div>

@include('kook.product.form')