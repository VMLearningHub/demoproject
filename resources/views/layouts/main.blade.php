<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    <div class="wrapper" id="home">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
</body>
@include('includes.script')
</html>