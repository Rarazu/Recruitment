<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <base href="./">
    @include('components.meta')
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    @include('components.css')
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');

    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('components.header')
    <div class="app-body">
        @include('components.sidebar')
        <main class="main">
            @include('components.breadcrumbs')
            <div class="container-fluid">
                <div class="animated fadeIn">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
    <footer class="app-footer">
        <div>
            <a href="https://coreui.io">CoreUI</a>
            <span>&copy; 2018 creativeLabs.</span>
        </div>
        <div class="ml-auto">
            <span>Powered by</span>
            <a href="https://coreui.io">CoreUI</a>
        </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('coreui-v2/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('coreui-v2/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('coreui-v2/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('coreui-v2/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('coreui-v2/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('coreui-v2/vendors/@coreui/coreui/js/coreui.min.js') }}"></script>
</body>

</html>
