@extends('layout2.master')
<h1>หน้าแก้ไขข้อมูล</h1>
<div class="py-12">
    <form action="{{URL::to('/product/update/'.$id')}}" method="POST">
      @csrf
      <div class="form-group">
      <label for="">รหัสสินค้า</label>
      <input type="text" name="code" id="code" value="">
      <br>
      <label for="">ชื่อสินค้า</label>
      <input type="text" name="name" id="name" value="">
      </div>
      <br>
      <button>แก้ไข้</button>
    </form> 
  </div>
  