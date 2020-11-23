<!DOCTYPE html>
<html dir="ltr">
<head>
    @include('/Head/head_admin2')
</head>
<body>
    @include('/Header/header_admin2')
        @section('sidebar')
            @show
                @yield('content')
    @include('/Footer/footer_admin2')
</body>
</html>    