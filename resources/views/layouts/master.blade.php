<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>BANKING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">



    @include('snippets.style')


    <style type="text/css">
        .navbar-custom {
            background-color: {{ env('APPLICATION_CUSTOM_COLOR') }};
        }

        .purple-color {
            color: ##0561ad !important;
        }

        .btn-color {
            background-color: #0561ad;
            color: white;
        }



        .btn-primary {
            color: #fff;
            background-color: #0561ad;
            border-color: #0561ad;
            box-shadow: 0 0 0 0 rgb(6 55 195 / 70%);
        }

        .btn-primary:hover {

            background-color: #2793ec;
            border-color: #0561ad;

        }

        .p-text {
            color: white;
        }

        .card-icon {
            color: white;
        }

        .card-background-image {
            background-image: url("{{ asset('assets/images/login-bg.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Works on Firefox */
        * {
            scrollbar-width: thin;
            scrollbar-color: rgb(188, 108, 214) rgb(217, 217, 216);
        }

        /* Works on Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 12px;
        }

        *::-webkit-scrollbar-track {
            background: rgb(217, 217, 216);
        }

        *::-webkit-scrollbar-thumb {
            background-color: rgb(188, 108, 214);
            border-radius: 20px;
            border: 3px solid rgb(217, 217, 216);
        }

        #datatable-buttons_filter {
            float: right;
        }

    </style>


</head>

{{-- <body style="zoom: 0.9;" class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'> --}}

<body
    style="background-image: url('assets/images/background.png'); background-repeat: no-repeat; background-size: cover;"
    class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>


    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- End Preloader-->

    <!-- Begin page -->
    <div id="wrapper" style="zoom: 0.9;">
        @include('sweetalert::alert')

        @include('snippets.nav')

        @include('snippets.side-bar')

        <div class="content-page">
            <div class="content">
                @yield('content')
            </div>

            @include('snippets.footer')
        </div>
    </div>

    @include('snippets.script')


    @yield('scripts')
    {{-- @include('sweetalert::alert') --}}



    <script>
        {{-- $(document).userTimeout({

                // ULR to redirect to, to log user out
                logouturl: 'logout',

                // URL Referer - false, auto or a passed URL
                referer: false,

                // Name of the passed referal in the URL
                refererName: 'refer',

                // Toggle for notification of session ending
                notify: true,

                // Toggle for enabling the countdown timer
                timer: true,

                // 10 Minutes in Milliseconds, then notification of logout
                session: 6000,

                // 5 Minutes in Milliseconds, then logout
                force: 3000,

                // Model Dialog selector (auto, bootstrap, jqueryui)
                ui: 'auto',

                // Shows alerts
                debug: false,

                // <a href="https://www.jqueryscript.net/tags.php?/Modal/">Modal</a> Title
                modalTitle: 'Session Timeout',

                // Modal Body
                modalBody: 'You\'re being timed out due to inactivity. Please choose to stay signed in or to logoff. Otherwise, you will logged off automatically.',

                // Modal log off button text
                modalLogOffBtn: 'Log Off',

                // Modal stay logged in button text
                modalStayLoggedBtn: 'Stay Logged In'

              }); --}}

    </script>

</body>
{{-- <script src="bootstrap.min.js"></script> --}}
{{-- <script src="//code.jquery.com/jquery-1.12.1.min.js"></script> --}}
{{-- <script src="dist/jquery.userTimeout.js"></script> --}}

</html>
