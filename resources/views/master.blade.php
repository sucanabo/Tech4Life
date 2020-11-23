<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('layouts/components/head')
<body>
  @include('layouts/components/preloader')

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('layouts/components/header')
        @include('layouts/components/sidebar')
        <div class="page-wrapper">
            @include('layouts/components/breadcrumb')
            <div class="container-fluid">
                @yield('content')
            </div>
           @include('layouts/components/footer')
        </div>
    </div>
    @include('layouts/components/scripts')
</body>

</html>