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



    @yield('styles')


</head>

<body style="zoom: 0.9; background-color: white;">

    <!-- Pre-loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">Loading...</div>
        </div>
    </div>
    <!-- End Preloader-->

    <!-- Begin page -->
   
    <div class="container-fluid">
        <div class="row" >
     
      

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
