
@extends('master.layout.main')

@section('content2')
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}<br>
    @endfor
    <a href="/">home</a>
@endsection


@section('content')
    <h1>about</h1>
    <a href="/">home</a>
@endsection
