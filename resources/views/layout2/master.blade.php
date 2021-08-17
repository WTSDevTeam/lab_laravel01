<!DOCTYPE html>
<html lang="en">
@include('layout2.header')

<body>  
    @include('layout2.menu')
    
    @yield('content')

    @include('layout2.footer')

    <div id="load" class="spinner-border text-primary" role="status" style="visibility: hidden">
        <span class="sr-only"></span>
    </div>

    @include('layout2.pagescript')

</body>
</html>