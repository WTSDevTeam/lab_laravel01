@extends('layout2.master')
<h1>BBMY   Digital Marketing</h1>

<div class="py-12">
  <div class="container">
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <th>...</th>
            <th>อันดับ</th>
            <th>รหัส</th>
            <th>สินค้า</th>
          </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
          <tr>
            <td><a href="{{URL::to('/kook/product/edit/'.$item->id)}}">แก้ไข</a></td>
            <td>{{$item->id}}</></td>
            <td>{{$item->product_code}}</></td>
            <td>{{$item->product_name}}</></td>
          </tr>
        @endforeach
        </tbody>
      </table>
      </div>
  </div>
</div>

@include('kook.product.form')