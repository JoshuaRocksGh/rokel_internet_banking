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
                                    <img src="{{ asset('assets/images/rokel_logo.png') }} " alt="" height="50">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/rokel_logo.png') }} " alt="" height="50">
                                </span>
                            </a>
                        </div>
                    </div>


                    <!-- title-->
                    <p class="text-muted mb-4">
                    <h2 class="text-primary"> Internet Banking </h2>
                    </p>
                    <br><br>
                    <h4 class="mt-0">Sign In</h4>


                    <!-- form -->
                    <form action="POST" id="login_post_form" autocomplete="off" aria-autocomplete="off">
                        @csrf

                        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                            role="alert" id="failed_login">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                {{-- <span aria-hidden="true">&times;</span> --}}
                            </button>
                            <i class="mdi mdi-block-helper mr-2"></i>
                            <span id="error_message"></span>
                        </div>

                        <div class="form-group">

                            <label for="user_id">User ID<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="user_id" required placeholder="Enter your email"
                                parsley-trigger="change" autocomplete="none" required>

                        </div>



                        <div class="form-group">
                            <a href="{{ url('forgot-password') }}" class="text-muted float-right"><small>Forgot your
                                    password?</small></a>
                            <label for="password">Password<span class="text-danger">*</span></label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" placeholder="Enter your password"
                                    required autocomplete="none">
                                <div class="input-group-append" data-password="false">
                                    <div class="input-group-text">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="form-group mb-0 text-center">

                            <button class="btn btn-primary btn-block" type="submit" id="submit"><span id="log_in">Log
                                    In</span>
                                <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner"
                                    aria-hidden="true"></span>
                                <span id="spinner-text">Loading...</span>
                            </button>
                            <br><br>

                            {{-- <button class="btn btn-primary btn-block" type="submit">Log In </button> --}}


                            <p class=""><a href="auth-register-2.html" class="text-primary ml-1"><b>Self Enroll
                                        Here!</b></a></p>
                        </div>



                    </form>
                    <!-- end form-->

                    <!-- Footer-->

                    <br><br><br>
                    <div class="row ">


                        <div class="text-center d-sm-none   d-md-none  d-lg-none">
                            <a href="{{ url('account-creation') }}"
                                class="btn btn-outline-primary btn-rounded waves-effect waves-light"> <i
                                    class="fas fa-book-open mr-1"></i> Open an account</a>
                            &nbsp;
                            <a href="{{ url('faq') }}"
                                class="btn btn-outline-primary btn-rounded waves-effect waves-light"> <i
                                    class="fas fa-headset mr-1"></i> FAQs</a>

                        </div>


                    </div>
                    <br>
                    <div class="row ">


                        <div class="text-center d-sm-none  d-md-none  d-lg-none">
                            <a href="{{ url('enquiry') }}"
                                class="btn btn-outline-primary btn-rounded waves-effect waves-light"> <i
                                    class="fas fa-desktop mr-1"></i> Make Enquiry</a>
                            &nbsp;
                            <a href="{{ url('branches') }}"
                                class="btn btn-outline-primary btn-rounded waves-effect waves-light"> <i
                                    class="fas fa-map-marked-alt mr-1"></i> Branches</a>

                        </div>

                    </div>





                </div> <!-- end .card-body -->
            </div> <!-- end .align-items-center.d-flex.h-100-->
        </div>
        <!-- end auth-fluid-form-box-->

        <!-- Auth fluid right content -->
        <div class="auth-fluid-right text-center bg-auth">
            <div class="auth-user-testimonial">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="pt-2 pb-2">
                                {{-- <img src="../assets/images/users/user-3.jpg" class="rounded-circle img-thumbnail avatar-xl" alt="profile-image"> --}}


                                <i class="fas fa-book-open text-primary font-22" style="font-size: 100px;"></i>
                                <h4 class="mt-3 font-16"><a href="{{ url('account-creation') }}" class="text-dark">Open An
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

                                <h4 class="mt-3 font-16"><a href="{{ url('faq') }}" class="text-dark">FAQ</a></h4>

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

                                {{-- <a href="{{ url('branches') }}" class="text-dark">
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
        function login(email, password) {
            $.ajax({
                type: "POST",
                url: "login",
                datatype: "application/json",
                data: {
                    "user_id": email,
                    "password": password,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success: function(response) {
                    console.log(response);
                    var res = response.data
                    $('#submit').attr('disabled', false);

                    if (response.responseCode == "000") {
                        if (response.data.firstTimeLogin == true) {
                            window.location = 'change-password';
                        } else {
                            window.location = 'home';
                        }


                    } else {
                        $('#spinner').hide()
                        $('#spinner-text').hide()

                        $('#log_in').show()
                        $('#error_message').text(response.message)
                        $('#failed_login').show()

                    }
                },
                error: function(xhr, status, error) {
                    $('#submit').attr('disabled', false);
                    $('#spinner').hide()
                    $('#spinner-text').hide()

                    $('#log_in').show()
                    $('#error_message').text("Connection Error")
                    $('#failed_login').show()

                    console.log('Ajax request failed...');
                    //setTimeout ( function(){ login(email, password) }, $.ajaxSetup().retryAfter )
                }
            })
        }

        $(document).ready(function() {

            $('#failed_login').hide(),
                $('#spinner').hide(),
                $('#spinner-text').hide(),



                $('#login_post_form').submit(function(e) {
                    e.preventDefault();
                    var email = $("#user_id").val();
                    var password = $('#password').val();
                    $('#spinner').show(),
                        $('#spinner-text').show(),

                        $('#log_in').hide(),
                        $('#submit').attr('disabled', true);

                    //var show_error = $('#failed_login').show();

                    login(email, password)

                })


        })
    </script>


@endsection
