@extends('layouts.master')

@section('section1')

    <h1>{{ $title_name }}</h1>
    @if (1==1)
        <h1>{{ $title_name }}</h1>
    @endif

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
    </form>

    <h3>contact email : test@gmail.com</h3>

@endsection
