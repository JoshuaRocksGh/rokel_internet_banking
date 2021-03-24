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
                                    <img src="{{ asset('assets/images/logo-dark.png') }} " alt="" height="22">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }} " alt="" height="22">
                                </span>
                            </a>
                        </div>
                    </div>

                    <!-- title-->
                    <h4 class="mt-0"><b>Change Password</b></h4>
                    <p class="text-muted mb-4">Enter your email for the reset password link</p>

                    <!-- form -->
                    <form action="#">
                        <div class="form-group">
                            <label for="pass_email">Email</label><div class="input-group input-group-merge">
                                <input type="email" id="pass_email" class="form-control" placeholder="name@email.com">
                            </div>
                        </div>


                        <div class="form-group mb-0 text-center">
                            <a href="{{ url('reset-success') }}">
                                <button class="btn btn-primary btn-block" type="button">Send</button>
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
