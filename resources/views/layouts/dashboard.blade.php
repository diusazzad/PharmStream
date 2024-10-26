<!DOCTYPE html>
<html class="loading " lang="" data-layout="dark-layout" data-textdirection="ltr">

<head>
    @include('partials.meta_tags')
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    <!-- Header -->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light  container-xxl navBar"
        id="desktopmenu">
        <div class="navbar-container d-flex content align-items-center  ">

            <x-dashboard.header />
        </div>
    </nav>

    <!-- END: Header-->


    <!--Mobile Menu-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light  container-xxl navBar"
        id="mobilemenu">
        <x-dashboard.mobile-menu.index />
    </nav>


    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <x-dashboard.side-menu.index />

    </div>
    <!-- End Sidebar -->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="content-wrapper container-xxl p-0">
            {{--
            <x-dashboard.modal.index /> --}}

            @yield('content')

            <x-dashboard.footer.index />
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    @include('partials.js')
</body>

</html>
