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
                                    <img src="{{  asset("assets/images/" . env('APPLICATION_INFO_LOGO_DARK') )}} " alt="" height="40">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{  asset("assets/images/" . env('APPLICATION_INFO_LOGO_DARK') )}} " alt="" height="40">
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0"><b>Reset Password</b></h4>
                    <p class="text-muted mb-4">Reset your password to access account.</p>

                    <!-- form -->
                    <form action="#">
                        <div class="form-group">
                            <label for="new_password">Enter New Password</label><div class="input-group input-group-merge">
                                <input type="password" id="new_password" class="form-control" placeholder="New Password">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm New Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group mb-0 text-center">
                            <a href="{{ url('home') }}">
                                <button class="btn btn-primary btn-block" type="button">Reset Password</button>
                            </a>
                            {{-- <button class="btn btn-primary btn-block" type="submit">Log In </button> --}}
                        </div>


                    </form>
                    <!-- end form-->

                    <!-- Footer-->
                    {{-- <footer class="footer footer-alt">
                            <p class="text-muted">Dont have an account? <a href="auth-register-2.html" class="text-muted ml-1"><b>Sign Up</b></a></p>
                        </footer> --}}

                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center">
            <div class="auth-user-testimonial">
            </div> <!-- end auth-user-testimonial-->
        </div>
        <!-- end Auth fluid right content -->


    </div>
    <!-- end auth-fluid-->


@endsection
