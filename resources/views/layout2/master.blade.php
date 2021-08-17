<!DOCTYPE html>
<html lang="en">
@include('layout2.header')

<body>  
    @include('layout2.menu')
    
    @yield('content')

    @include('layout2.footer')

    @include('layout2.pagescript')
</body>
</html>