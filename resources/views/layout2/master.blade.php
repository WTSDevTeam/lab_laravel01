<!DOCTYPE html>
<html lang="en">
@include('layout2.header')
<body>

    @include('layout2.menu')

    @yield('section1')
    
    @yield('section2')

    @include('layout2.footer')

    @include('layout2.pagescript')


</body>
</html>