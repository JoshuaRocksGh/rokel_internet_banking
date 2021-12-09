<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8" />
    <title>RC BANKING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Internet Banking Application" name="Internet Banking Portal for Rokel Commercial Bank." />
    <meta content="Banking Application" name="Union Systems Global" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">



    @include('snippets.style')

    <script src="https://code.jquery.com/jquery-3.5.1.js">
        $.ajaxSetup({
            timeout: 3000,
            retryAfter: 5000
        });
    </script>

    @yield('styles')


</head>

<body style="zoom: 0.9; background-color: white;">

    <!-- Pre-loader -->
    <div id="preloader" class="preloader">
        <div id="status" class="preloader">
            <img class="pulse" style="width: 100px; top: -50px;" src="assets/images/logoRKB.png" />
        </div>
    </div> <!-- End Preloader-->

    <!-- Begin page -->

    <div class="container-fluid">
        <div class="row">



            <div class="col-md-12">
                <div class="content" style="zoom: 0.9 ;">
                    @yield('content')
                </div>

            </div>



        </div>
    </div>

    @include('snippets.script')


    @yield('scripts')


</body>


</html>
