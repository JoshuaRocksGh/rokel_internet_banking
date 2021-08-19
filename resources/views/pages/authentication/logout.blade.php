@extends('layouts.app')

@section('content')


<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box" style="background-image: url({{ asset('assets/images/login-bg.jpg') }});background-repeat: no-repeat;
                background-size: cover;
            ">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-left">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/rokel_logo.png') }} " alt=""
                                    height="50">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/rokel_logo.png') }} " alt=""
                                    height="50">
                            </span>
                        </a>
                    </div>
                </div>


                <div class="text-center">
                    <div class="mt-4">
                        <div class="logout-checkmark">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                <circle class="path circle" fill="none" stroke="#ffffff" stroke-width="6"
                                    stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                                <polyline class="path check" fill="none" stroke="#ffffff" stroke-width="6"
                                    stroke-linecap="round" stroke-miterlimit="10"
                                    points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                            </svg>
                        </div>
                    </div>

                    <h4>See you again !</h4>

                    <p class="text-muted"> You are now successfully sign out. <br /> redirecting to login </p>
                </div>

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Back to <a href="{{ url('login') }}"
                            class="text-muted ml-1"><b>Sign
                                In</b></a></p>
                </footer>



            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="pt-2 pb-2">
                            {{-- <img src="../assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image"> --}}


                            <i class="fas fa-book-open text-primary font-22" style="font-size: 100px;"></i>
                            <h4 class="mt-3 font-16"><a href="{{ url('account-creation') }}"
                                    class="text-dark">Open An
                                    Account</a>
                            </h4>

                            <a href="{{ url('account-creation') }}" class="p-text">
                                <button type="button"
                                    class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
                            </a>

                        </div> <!-- end .padding -->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="pt-2 pb-2">
                            <i class=" fas fa-desktop text-primary font-22" style="font-size: 100px;"></i>
                            <h4 class="mt-3 font-16"><a href="{{ url('enquiry') }}"
                                    class="text-dark">Enquiries/Complaints</a>
                            </h4>
                            <a href="{{ url('enquiry') }}" class="p-text">
                                <button type="button"
                                    class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
                            </a>

                        </div> <!-- end .padding -->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-lg-2"></div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="pt-2 pb-2">

                            <i class="fas fa-headset text-primary font-22" style="font-size: 100px;"></i>

                            <h4 class="mt-3 font-16"><a href="{{ url('faq') }}"
                                    class="text-dark">FAQ</a></h4>

                            <a href="{{ url('faq') }}" class="p-text">
                                <button type="button"
                                    class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
                            </a>

                        </div> <!-- end .padding -->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="pt-2 pb-2">

                            <i class=" fas fa-map-marked-alt text-primary font-22" style="font-size: 100px;"></i>

                            <h4 class="mt-3 font-16">Branches</h4>
                            <a href="{{ url('branches') }}" class="text-dark">
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                    Here</button>
                            </a>

                            {{-- <a href="{{ url('branches') }}"
                            class="text-dark">
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">
                                Here</button>
                            </a> --}}

                        </div> <!-- end .padding -->
                    </div> <!-- end card-box-->
                </div> <!-- end col -->

                <div class="col-lg-2"></div>
            </div>
            <!-- end row -->

        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->


</div>
<!-- end auth-fluid-->

@endsection


@section('scripts')
<script>
    $(document).ready(function () {
        setTimeout(() => {
            window.location = 'login'
        }, 2000)
    })

</script>

@endsection
