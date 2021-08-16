
@extends('layouts.master')

@section('section2')
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}<br>
    @endfor
    <a class='footer' href="/">section 2</a>

    
@endsection


@section('section1')
    <h1>section 1</h1>
    <a class='footer' href="/">home</a>
    <br>
    <br>
@endsection
