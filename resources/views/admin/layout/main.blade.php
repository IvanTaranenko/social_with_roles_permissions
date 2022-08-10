<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('admin.layout.head')
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
>


    @include('admin.layout.header')



    @include('admin.layout.aside')


    <div id="page-wrapper">
        <div class="container-fluid">

            @yield('content')

        </div>
        @include('admin.layout.footer')

    </div>


</body>
</html>
