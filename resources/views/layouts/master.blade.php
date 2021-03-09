<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        @include('snippets.style')


        <style type="text/css">
            .purple-color{
                color: #7e57c2!important;
             }
             .btn-color {
                 background-color: #7e57c2;
                 color: white;
             }
             .p-text {
                 color: white;
             }
             .card-icon{
                 color: white;
             }
        </style>

</head>

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

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
        {{--  @include('sweetalert::alert')  --}}
    </body>
</html>
