<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('user/layouts/components/head')
<head>    
<body>
    @include('user/layouts/components/header')
            @yield('content')
        @include('user/layouts/components/footer')
    @include('user/layouts/components/scripts')
</body>

</html>