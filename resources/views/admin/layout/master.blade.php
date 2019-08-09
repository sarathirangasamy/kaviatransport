<!DOCTYPE html>
<html>
@include('admin.layout.headerScript')
<body class="hold-transition sidebar-mini skin-black-light">
<div class="wrapper">
    <!-- header -->
@include('admin.layout.header')
<!-- color for side bar -->

    <!-- Nav Bar -->
@include('admin.layout.navbar')
<!-- Content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')

        </section>
    </div>
    <!-- End Content -->
    <!-- Footer -->
@include('admin.layout.footer')
<!-- End Footer -->
</div>
</body>
</html>