@extends('layouts.master')

@section('section1')

    @foreach($data as $item)
        <p>
            {{$item->id}} : {{$item->product_code}} : {{$item->product_name}}
        </p>
    @endforeach

    {{-- 
    <form action="{{URL::to('getdata')}}" method="POST">
        @csrf
        <label for="">ชื่อ</label>
        <input type="text" name="txtname" id="name" value="{{ $name }}">
        <br>
        <label for="">นามสกุล</label>
        <input type="text" name="surname" id="surname" value="{{ $sur_name }}">
        <br>
        <label for="">อายุ</label>
        <input type="text" name="age" id="age" value="">
        <button type="button" onclick="hello();">button 1</button>
        <button>submit</button>
    </form> --}}

@endsection
