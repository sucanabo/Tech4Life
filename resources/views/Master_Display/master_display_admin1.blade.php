<!DOCTYPE html>
<html dir="ltr">
<head>
    @include('/Head/head_admin1')
</head>
<body>
    @include('/Header/header_admin1')
        @section('sidebar')
            @show
                @yield('content')
    @include('/Footer/footer_admin1')
</body>
</html>    