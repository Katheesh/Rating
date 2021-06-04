<!doctype html>
<html>

<head>
    @include('base.head')
    @if (Auth::user())
        @if (Auth::user()->isDark == 0)
            <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        @else
            <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
        @endif
    @else
        <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" />
    @endif
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/tooltipster/tooltipster.bundle.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        @include('base.topbar')
        @if (Auth::user())
            @include('base.sidebar')
        @endif
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- @include('base.footer') --}}
    </div>

    {{-- <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme.
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

            </div>
        </div> <!-- end slimscroll-menu-->
    </div> --}}

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script src="{{ asset('assets/libs/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('assets/libs/tooltipster/tooltipster.bundle.min.js') }}"></script>

    @livewireScripts
</body>

</html>
