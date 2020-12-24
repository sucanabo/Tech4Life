<!DOCTYPE html>
<html lang="en">
@include('user/layouts/head')
</head>
<body>

    <div id="wrapper">
    @include('user/layouts/header')
        @yield('content')
    @include('user/layouts/footer')
        <div class="dmtop">Scroll to Top</div>
    </div>
    @include('user/layouts/css')
    <!-- end wrapper -->    
</body>
</html>