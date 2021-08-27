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
                            <a href="{{ url('/') }}" class="logo logo-dark text-center">
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
                    <div id="login_form" class="form-center">

                        <h4 class="mt-0">Sign In</h4>

                        <br />
                        <!-- form -->
                        <form action="POST" id="login_post_form" autocomplete="off" aria-autocomplete="off">
                            @csrf

                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                role="alert" id="failed_login" style="display: none">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    {{-- <span aria-hidden="true">&times;</span> --}}
                                </button>
                                <i class="mdi mdi-block-helper mr-2"></i>
                                <span id="error_message"></span>
                            </div>

                            <div class="form-group">

                                <label for="user_id">User ID<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="user_id" placeholder="Enter your email"
                                    parsley-trigger="change" autocomplete="off" aria-autocomplete="off">

                            </div>



                            <div class="form-group">
                                <a href="{{ url('forgot-password') }}" class="text-muted float-right"><small>Forgot your
                                        password?</small></a>
                                <label for="password">Password<span class="text-danger">*</span></label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control"
                                        placeholder="Enter your password" autocomplete="off" aria-autocomplete="off">
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
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" style="display: none"
                                        id="spinner" aria-hidden="true"></span>
                                    <span id="spinner-text" style="display: none">Loading...</span>
                                </button>
                                <br><br>

                                {{-- <button class="btn btn-primary btn-block" type="submit">Log In </button> --}}


                                <p class=""><a href="#" id="self_enroll" class="text-primary ml-1"><b>Self Enroll
                                            Here!</b></a></p>
                            </div>

                    </div>
                    <div id="self_enroll_form" class=" form-center" style="display: none">
                        <h4 class="mt-0">Self Enroll</h4>
                        <br />

                        <div id="self_enroll_form1" class="form-group">

                            <label for="customer_number_input"> Account Number <span class="text-danger">*</span></label>
                            <input class="form-control mb-0" type="number" id="customer_number_input"
                                placeholder="Enter your account number" pattern="[0-9]*" inputmode="numeric"
                                parsley-trigger="change" autocomplete="none">
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
                            <label for="phone_number_input"> Phone Number<span class="text-danger">*</span></label>

                            <input class="form-control mb-0" type="number" id="phone_number_input"
                                placeholder="Enter your phone number" parsley-trigger="change" autocomplete="none" />
                            <br />
                            <label for="id_number_input"> ID Number<span class="text-danger">*</span></label>

                            <input class="form-control mb-0" type="text" id="id_number_input"
                                placeholder="Enter your id number" parsley-trigger="change" autocomplete="none" />
                            <br />
                            <label for="date_of_birth_input"> Date of birth<span class="text-danger">*</span></label>

                            <input type="text" id="date_of_birth_input" placeholder="Enter your date of birth"
                                class="form-control mb-0" parsley-trigger="change" autocomplete="none"
                                data-provide="datepicker" data-date-autoclose="true">

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

                            <label for="one_time_pin_input"> Enter one time pin<span class="text-danger">*</span></label>
                            <input class="form-control mb-0" type="text" id="one_time_pin_input"
                                placeholder="Enter one time pin" parsley-trigger="change" autocomplete="none" />
                            <br />
                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" id="b_next3" type="submit"><span
                                        id="s_next3">register</span>
                                    <span id="s_loading3">
                                        <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner3"
                                            aria-hidden="true"></span>
                                        <span id="spinner-text3">Loading...</span>
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

        <!-- Success Alert Modal -->
        <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-success">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="dripicons-checkmark h1 text-white"></i>
                            <h4 class="mt-2 text-white">Self Enrollment Successful!</h4>
                            <p class="mt-3 text-white" id="success_modal_text"></p>
                            <button type="button" class="btn btn-light my-2" data-dismiss="modal">Continue</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

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

                success: function(response) {
                    console.log(response);
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


        function validateCustomer(userData) {
            $.ajax({
                type: "POST",
                url: "../validate-customer",
                datatype: "application/json",
                data: {
                    'customerNumber': userData.customerNumber
                },
                headers: {
                    'X-CSRF-TOKEN': $(
                            'meta[name="csrf-token"]')
                        .attr(
                            'content')
                },
            }).done(response => {
                if (response.responseCode === '000') {
                    $('#self_enroll_form1').hide()
                    $('#self_enroll_form2').toggle(500)
                    console.log("customer number ajax success")
                    userData.authToken = response.data.authToken;
                } else {
                    toaster(response.message,
                        'error',
                        3000);
                    $('#s_loading1').toggle()
                    $('#s_next1').show()
                    $('#b_next1').attr('disabled', false);
                    return false;
                }

            }).fail(() => {
                $('#s_loading1').toggle()
                $('#s_next1').show()
                $('#b_next1').attr('disabled', false);
                $('#error_message').text("Connection Error")
                $('#failed_login').show()
            })
        }

        function confirmCustomer(userData) {
            $.ajax({
                type: "POST",
                url: "../confirm-customer",
                datatype: "application/json",
                data: userData,
                headers: {
                    'X-CSRF-TOKEN': $(
                            'meta[name="csrf-token"]')
                        .attr(
                            'content')
                },
            }).done(response => {
                if (response.responseCode === '000') {
                    console.log("confirmation successful")
                    $('#self_enroll_form2').hide()
                    $('#s_loading2').toggle()
                    $('#self_enroll_form3').toggle(500)

                } else {
                    toaster(response.message,
                        'error',
                        3000);
                    $('#s_loading2').toggle()
                    $('#s_next2').show()
                    $('#b_next2').attr('disabled', false);
                    return false
                }
            }).fail(() => {
                $('#s_loading2').toggle()
                $('#s_next2').show()
                $('#b_next2').attr('disabled', false);
                $('#error_message').text("Connection Error")
                $('#failed_login').show()
            })
        }

        function registerCustomer(userData) {
            $.ajax({
                type: "POST",
                url: "../register-customer",
                datatype: "application/json",
                data: userData,
                headers: {
                    'X-CSRF-TOKEN': $(
                            'meta[name="csrf-token"]')
                        .attr(
                            'content')
                },
            }).done(response => {
                if (response.responseCode === '000') {
                    $('#success_modal_text').text(response.message)
                    $('#success-alert-modal').modal('show');
                    $("#success-alert-modal").on("hidden.bs.modal", () => {
                        window.location = 'login'
                    });
                    $('#s_loading3').toggle()
                    $('#s_next3').show()


                } else {
                    toaster(response.message,
                        'error',
                        3000);
                    $('#s_next3').show()
                    $('#s_loading3').toggle()
                    $('#b_next3').attr('disabled', false);
                    return false;
                }

            }).fail(() => {
                $('#s_loading1').toggle()
                $('#s_next1').show()
                $('#b_next1').attr('disabled', false);
                $('#error_message').text("Connection Error")
                $('#failed_login').show()
            })
        }
        $(document).ready(function() {

            let userData = new Object();
            // $('#self_enroll_form').hide(),
            // $('#failed_login').hide(),
            // $('#spinner').hide(),
            // $('#spinner-text').hide()

            $('#submit').on("click", function(e) {
                e.preventDefault();
                var email = $("#user_id").val();
                var password = $('#password').val();

                if (email === "" || email === undefined) {
                    toaster("Please enter email", "error", 3000)
                } else if (password === "" || password === undefined) {
                    toaster("Please enter password", "error", 3000)
                } else {
                    $('#spinner').show()
                    $('#spinner-text').show()
                    $('#log_in').hide()
                    $('#submit').attr('disabled', true);

                    login(email, password)
                }
            })

            $('#self_enroll').on("click", function(e) {
                console.log("enroll")
                e.preventDefault();
                $('#login_form').hide()
                $('#login_page_extras').toggle(300)
                $('#self_enroll_form2').hide()
                $('#self_enroll_form3').hide()
                $('#s_loading1').hide()
                $('#s_loading2').hide()
                $('#s_loading3').hide()
                $('#self_enroll_form').toggle(300)
                return false;

            })

            $('#login_instead').on("click", function(e) {
                e.preventDefault();

                $('#self_enroll_form').hide()
                $('#login_form').toggle(300)
                $('#login_page_extras').toggle(300)
                return false;

            })
            $('#b_next1').on("click", function(e) {
                e.preventDefault

                userData.customerNumber = $("#customer_number_input").val()
                if (userData.customerNumber === undefined || userData.customerNumber === "") {
                    toaster("Customer Number is required",
                        'error',
                        3000
                    );
                    return false
                } else if (userData.customerNumber.length !== 6) {
                    toaster("invalid customer number", "error", 3000);
                    return false
                } else {
                    $('#s_next1').hide()
                    $('#s_loading1').toggle()
                    $('#b_next1').attr('disabled', true);
                    validateCustomer(userData)
                }
            })

            $('#b_next2').on("click", function(e) {
                console.log(userData)
                e.preventDefault
                // $('#self_enroll_form2').hide()
                // $('#s_next2').hide()
                let dob = $('#date_of_birth_input').val()
                if (dob === "" || dob === undefined) {
                    toaster("Please enter date of birth", "error", 3000)
                    return false
                }
                dob = $("#date_of_birth_input").val().split('/')
                userData.dateOfBirth = `${dob[2]}-${dob[0]}-${dob[1]}`
                userData.idNumber = $("#id_number_input").val()
                userData.phoneNumber = $("#phone_number_input").val()

                if (userData.idNumber === "" || userData.idNumber === undefined) {
                    toaster("Please enter id number", "error", 3000)
                    return false
                } else if (userData.phoneNumber === "" || userData.phoneNumber === undefined) {
                    toaster("Please enter phone number", "error", 3000)
                    return false
                } else {
                    $('#s_next2').hide()
                    $('#s_loading2').toggle()
                    $('#b_next2').attr('disabled', true);
                    confirmCustomer(userData)
                    return false
                }
            })

            $('#b_next3').on("click", function(e) {
                e.preventDefault

                userData.oneTimePin = $("#one_time_pin_input").val()
                if (userData.oneTimePin === undefined || userData.oneTimePin === "") {
                    toaster("one time pin is required",
                        'error',
                        3000
                    );
                    return false
                } else if (userData.oneTimePin.length !== 4) {
                    toaster("invalid code", "error", 3000);
                    return false
                } else {
                    $('#s_next3').hide()
                    $('#s_loading3').toggle()
                    $('#b_next3').attr('disabled', true);
                    registerCustomer(userData)
                }
            })

        })
    </script>


@endsection
