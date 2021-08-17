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

                <!-- title-->
                <p class="text-muted mb-4">
                    <h2 class="text-primary"> Internet Banking </h2>
                </p>
                <br><br>
                <div id="login_form" class="form-center">

                    <h4 class="mt-0">Sign In</h4>

                    <br />
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
                            <input class="form-control" type="text" id="user_id" placeholder="Enter your email"
                                parsley-trigger="change" autocomplete="none" required>

                        </div>



                        <div class="form-group">
                            <a href="{{ url('forgot-password') }}"
                                class="text-muted float-right"><small>Forgot your
                                    password?</small></a>
                            <label for="password">Password<span class="text-danger">*</span></label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control"
                                    placeholder="Enter your password" autocomplete="none" required>
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


                            <p class=""><a href="#" id="self_enroll" class="text-primary ml-1"><b>Self Enroll
                                        Here!</b></a></p>
                        </div>

                </div>
                <div id="self_enroll_form" class=" form-center">
                    <h4 class="mt-0">Self Enroll</h4>
                    <br />

                    <div id="self_enroll_form1" class="form-group">

                        <label for="account_number"> Account Number <span class="text-danger">*</span></label>
                        <input class="form-control mb-0" type="number" id="account_number"
                            placeholder="Enter your account number" pattern="[0-9]*" inputmode="numeric"
                            parsley-trigger="change" autocomplete="none" required>
                        <br />
                        <div id="a" class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" id="b_next1" type="submit"><span
                                    id="s_next1">next</span>
                                <span id="s_loading1">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner1"
                                        aria-hidden="true"></span>
                                    <span id="spinner-text1">Loading...</span>
                                </span>
                            </button>
                            <br />
                            <p class=""><a href="#" id="login_instead" class="text-primary ml-1"><b> Login
                                        Instead</b></a>
                            </p>
                        </div>
                    </div>

                    <div id="self_enroll_form2" class="form-group">
                        <label for="i_phone_number"> Phone Number<span class="text-danger">*</span></label>

                        <input class="form-control mb-0" type="number" id="i_phone_number"
                            placeholder="Enter your phone number" parsley-trigger="change" autocomplete="none"
                            required />
                        <br />
                        <label for="i_id_number"> ID Number<span class="text-danger">*</span></label>

                        <input class="form-control mb-0" type="text" id="i_id_number" placeholder="Enter your id number"
                            parsley-trigger="change" autocomplete="none" required />
                        <br />
                        <label for="i_date_of_birth"> Date of birth<span class="text-danger">*</span></label>
                        <input class="form-control mb-0" type="date" id="i_date_of_birth"
                            placeholder="Enter your date of birth" parsley-trigger="change" autocomplete="none"
                            required />
                        <br />


                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" id="b_next2" type="submit"><span
                                    id="s_next2">next</span>
                                <span id="s_loading2">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner2"
                                        aria-hidden="true"></span>
                                    <span id="spinner-text2">Loading...</span>
                                </span>
                            </button>
                            <br />
                        </div>
                    </div>

                    <div id="self_enroll_form3" class="form-group">

                        <label for="i_one_time_pin"> Enter one time pin<span class="text-danger">*</span></label>
                        <input class="form-control mb-0" type="text" id="i_one_time_pin"
                            placeholder="Enter one time pin" parsley-trigger="change" autocomplete="none" required />
                        <br />
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" id="b_next3" type="submit"><span
                                    id="s_next3">register</span>
                                <span id="s_loading3">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner3"
                                        aria-hidden="true"></span>
                                    <span id="spinner-text2">Loading...</span>
                                </span>
                            </button>
                            <br />
                        </div>
                    </div>

                </div>

                </form>
                <!-- end form-->

                <!-- Footer-->

                <br><br><br>
                <div class="text-center  d-lg-none">
                    {{-- <div class="row "> --}}


                    <div>
                        <a href="{{ url('account-creation') }}"
                            class="btn btn-outline-primary btn-rounded waves-effect waves-light mb-1 mx-1"
                            style="min-width: 170px;"> <i class="fas fa-book-open mr-1"></i> Open an account</a>
                        {{-- &nbsp; --}}
                        <a href="{{ url('enquiry') }}"
                            class="btn btn-outline-primary btn-rounded waves-effect waves-light mb-1 mx-1"
                            style="min-width: 170px;"> <i class="fas fa-desktop mr-1"></i> Make Enquiry</a>


                    </div>


                    {{-- </div> --}}
                    {{-- <div class="row "> --}}
                    <div>
                        <a href="{{ url('branches') }}"
                            class="btn btn-outline-primary btn-rounded waves-effect waves-light mb-1 mx-1"
                            style="min-width: 170px;"> <i class="fas fa-map-marked-alt mr-1"></i> Branches</a>
                        {{-- &nbsp; --}}


                        <a href="{{ url('faq') }}"
                            class="btn btn-outline-primary btn-rounded waves-effect waves-light mb-1 mx-1"
                            style="min-width: 170px;"> <i class="fas fa-headset mr-1"></i> FAQs</a>
                    </div>

                    {{-- </div> --}}
                </div>
            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center bg-auth">
        <div class="auth-user-testimonial">
            <div id="login_page_extras">
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

                            </div> <!-- end .padding -->
                        </div> <!-- end card-box-->
                    </div> <!-- end col -->
                </div>
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

            success: function (response) {
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
            error: function (xhr, status, error) {
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

    function validateCustomer(accountNumber) {
        $.ajax({
            type: "POST",
            url: "../validate-customer",
            datatype: "application/json",
            data: {
                'accountNumber': accountNumber
            },
            headers: {
                'X-CSRF-TOKEN': $(
                        'meta[name="csrf-token"]')
                    .attr(
                        'content')
            },
            success: function (response) {
                if (response.responseCode ==
                    '000') {
                    toaster(response.message,
                        'success',
                        10000);
                    console.log("success")
                } else {
                    toaster(response.message,
                        'error',
                        2000);
                    console.log("fail")
                }
            }
        })
    }

    $(document).ready(function () {


        $('#self_enroll_form').hide()

        $('#failed_login').hide(),
            $('#spinner').hide(),
            $('#spinner-text').hide(),


            $('#login_post_form').submit(function (e) {
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

        $('#self_enroll').on("click", function () {
            $('#login_form').hide(),
                $('#login_page_extras').toggle(300),
                $('#self_enroll_form2').hide(),
                $('#self_enroll_form3').hide(),
                $('#s_loading1').hide(),
                $('#s_loading2').hide(),
                $('#s_loading3').hide(),
                $('#self_enroll_form').toggle(300)
            return false;

        })

        $('#login_instead').on("click", function () {
            $('#self_enroll_form').hide()
            $('#login_form').toggle(300)
            $('#login_page_extras').toggle(300)
            return false;

        })

        $('#b_next1').on("click", function (e) {
            e.preventDefault
            let customerNumber = $("#account_number").val()
            validateCustomer(customerNumber)
            console.log('b_next1');
            $('#self_enroll_form1').hide()
            // $('#b_next1').hide()
            $('#s_loading1').toggle()
            $('#self_enroll_form2').toggle(300)
            $('#b_next1').attr('disabled', true);

        })

        $('#b_next2').on("click", function (e) {
            e.preventDefault
            console.log('b_next2');
            $('#self_enroll_form2').hide()
            // $('#b_next1').hide()
            $('#s_loading2').toggle()
            $('#self_enroll_form3').toggle()
            $('#b_next2').attr('disabled', true);

        })

    })

</script>


@endsection
