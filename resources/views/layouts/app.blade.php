<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        @include('snippets.style')

    </head>

    <body class="loading auth-fluid-pages pb-0">


        @yield('content')

        {{--  @include('snippets.footer')  --}}

        @include('snippets.script')
    </body>
</html>
