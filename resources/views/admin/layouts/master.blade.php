<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('admin/layouts/components/head')
<body>
  @include('admin/layouts/components/preloader')

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('admin/layouts/components/header')
        @include('admin/layouts/components/sidebar')
        <div class="page-wrapper">
            @include('admin/layouts/components/breadcrumb')
            <div class="container-fluid">
                @yield('content')
            </div>
           @include('admin/layouts/components/footer')
        </div>
    </div>
    @include('admin/layouts/components/scripts')
</body>

</html>