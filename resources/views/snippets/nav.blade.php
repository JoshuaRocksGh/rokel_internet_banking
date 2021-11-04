<!-- Topbar Start -->
<div class=" container-fluid navbar-custom" style="zoom: 0.9;">


    <!-- LOGO -->
    <div class="logo-box" style="display: flex; align-items: center;">
        <a href="/" class="logo logo-light text-center" style="padding-left:2rem">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/favicon.ico') }}" alt="company logo" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/rokel_logo.png') }} " alt="company logo" height="40">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="fe-menu"></i>
            </button>
        </li>


        {{-- <li class="notification-list .d-sm-none mt-3 ml-2">
            <span class="fs-6" style="color:white">
                {{ session()->get('userAlias') }}
        </span>

        </li> --}}


    </ul>
    <div class="ml-auto justify-content-end mr-lg-4" style="display: flex; align-items: center;">

        <ul class="list-unstyled topnav-menu float-right mb-0">
            {{-- <li class="dropdown notification-list topbar-dropdown"> --}}
            <a class="nav-link  nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                <span class=" ml-1 text-black-50">
                    <b> {{ session()->get('userAlias') }} </b>
                </span>
            </a>
        </ul>
    </div>
    {{-- <div class="clearfix"></div> --}}
</div>
<!-- end Topbar -->
