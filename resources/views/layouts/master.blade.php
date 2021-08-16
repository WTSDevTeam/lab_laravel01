<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body>

    @include('layouts.menu')
    
    @yield('section1')
    
    @yield('section2')

    @include('layouts.footer')

    @include('layouts.pagescript')

</body>
</html>
