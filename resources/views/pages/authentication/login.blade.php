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
                    <h4 class="mt-0">Sign In</h4>
                    <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                    <!-- form -->
                    <form action="POST">
                        @csrf
                        <div class="form-group">
                            <label for="emailaddress">Email address</label>
                            <input class="form-control" type="email" id="emailaddress" required=""
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <a href="auth-recoverpw-2.html" class="text-muted float-right"><small>Forgot your
                                    password?</small></a>
                            <label for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group mb-0 text-center">
                            <a href="{{ url('home') }}">
                                <button class="btn btn-primary btn-block" type="button" id="submit">Log In </button>
                            </a>
                            {{-- <button class="btn btn-primary btn-block" type="submit">Log In </button> --}}
                        </div>



                    </form>
                    <!-- end form-->

                    <!-- Footer-->

                        <br><br><br>
                        <div class="row ">


                            <div class="text-center d-sm-none   d-md-none  d-lg-none">
                                <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light"> <i class="fas fa-book-open mr-1"></i> Open an account</button>
                                &nbsp;
                                <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light"> <i class="fas fa-headset mr-1"></i>  FAQs</button>

                            </div>


                        </div>
                        <br>
                        <div class="row ">


                            <div class="text-center d-sm-none  d-md-none  d-lg-none">
                                <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light"> <i class="fas fa-desktop mr-1"></i> Make Enquiry</button>
                               &nbsp;
                                <button type="button" class="btn btn-outline-success btn-rounded waves-effect waves-light"> <i class="fas fa-map-marked-alt mr-1"></i>  Branches</button>

                            </div>

                        </div>


                    <footer class="footer footer-alt">

                            <p class="text-muted">Dont have an account? <a href="auth-register-2.html" class="text-muted ml-1"><b>Sign Up</b></a></p>
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
                                <h4 class="mt-3 font-16"><a href="{{ url('account-creation') }}" class="text-dark">Open An Account</a>
                                </h4>

                                <a href="{{ url('account-creation') }}" class="p-text">
                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
                                </a>

                            </div> <!-- end .padding -->
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="pt-2 pb-2">
                                <i class=" fas fa-desktop text-primary font-22" style="font-size: 100px;"></i>
                                <h4 class="mt-3 font-16"><a href="{{ url('enquiry') }}" class="text-dark">Enquiries/Complaints</a>
                                </h4>
                                <a href="{{ url('enquiry') }}" class="p-text">
                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
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

                                <h4 class="mt-3 font-16"><a href="{{ url('faq') }}" class="text-dark">FAQ</a></h4>

                                <a href="{{ url('faq') }}" class="p-text">
                                    <button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Here</button>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        {{--  $(document).ready(function(){
            $('#submit').click(function(e){
                e.preventDefault();
                var email = $("#emailaddress").val();
                var password = $('#password').val();

                {{--  console.log(email,password);  --}}

                $.ajax({
                    "type": "POST",
                    "url" : "api/login",
                    "data": {
                        "email" : email,
                        "password" : password,
                    },
                    success:function(){
                        {{--  alert("success")  --}}
                    }
                })
            })
        })
          --}}
    </script>

@endsection
