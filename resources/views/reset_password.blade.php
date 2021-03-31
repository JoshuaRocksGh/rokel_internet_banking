@extends('layouts.app')

@section('content')


<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">


                <!-- Logo -->
                <div class="auth-brand text-center text-lg-left">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="{{  asset("assets/images/" . env('APPLICATION_INFO_LOGO_DARK') )}} " alt="" height="22">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="{{  asset("assets/images/" . env('APPLICATION_INFO_LOGO_DARK') )}} " alt="" height="22">
                            </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0">Reset Password</h4><br>
                {{--  <p class="text-muted mb-4">Dont have an account? Create your account, it takes less than a minute</p>  --}}

                <!-- form -->
                <form action="#"  autocomplete="off" aria-autocomplete="off">
                    <div class="form-group">
                        <label for="fullname">Username</label>
                        <input class="form-control" type="text" id="fullname" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="emailaddress">Password</label>
                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" placeholder="Confirm password">
                            <div class="input-group-append" data-password="false">
                                {{--  <div class="input-group-text">
                                    <span class="password-eye"></span>
                                </div>
                                  --}}
                            </div>
                        </div>
                    </div>
                    {{--  <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                            <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                        </div>
                    </div>  --}}


                    <div class="form-group mb-0 text-center">
                        <button class="btn btn-primary waves-effect waves-light btn-block" type="submit"> Reset </button>
                    </div>
                    <!-- social-->
                    {{--  <div class="text-center mt-4">
                        <p class="text-muted font-14">Sign in with</p>
                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>  --}}


                </form>
                <!-- end form-->

                <!-- Footer-->
                {{--  <footer class="footer footer-alt">
                    <p class="text-muted">Already have account? <a href="auth-login-2.html" class="text-muted ml-1"><b>Log In</b></a></p>
                </footer>  --}}

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3 text-white">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> I have been using your theme from the previous developer for our web app, once I knew new version is out, I immediately bought with no hesitation. Great themes, good documentation with lots of customization available and sample app that really fit our need. <i class="mdi mdi-format-quote-close"></i>
            </p>
            <h5 class="text-white">
                - Fadlisaad (Ubold Admin User)
            </h5>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->



@endsection
