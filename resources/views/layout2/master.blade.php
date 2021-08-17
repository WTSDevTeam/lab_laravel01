<!DOCTYPE html>
<html lang="en">
@include('layout2.header')

<body>  


    @include('layout2.menu')
{{-- 
    <div id="load" class="spinner-border text-primary" role="status" style="visibility: hidden">
        <span class="sr-only"></span>
    </div> --}}

    <div id="wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>
    @include('layout2.footer')

    @include('layout2.pagescript')

</body>
</html>