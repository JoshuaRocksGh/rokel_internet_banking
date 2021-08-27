@extends('layouts.app')

@section('content')


    <div class="auth-fluid">
        <!--Auth fluid left content -->
        <div class="auth-fluid-form-box"
            style="background-image: url({{ asset('assets/images/login-bg.jpg') }});background-repeat: no-repeat;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-size: cover;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ">
            <div class="align-items-center d-flex h-100">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="auth-brand text-center text-lg-left">
                        <div class="auth-logo">
                            <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_DARK')) }} " alt=""
                                        height="50">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light text-center">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_DARK')) }} " alt=""
                                        height="50">
                                </span>
                            </a>
                        </div>
                    </div>


                    <!-- title-->
                    <h4 class="mt-0"><b>Reset Password</b></h4>
                    <p class="text-muted mb-4">Enter the required deatils to reset password</p>

                    <!-- form -->
                    <form action="#" autocomplete="off" aria-autocomplete="off">
                        <div class="alert alert-danger" role="alert" id="error_alert">
                            <i class="mdi mdi-block-helper mr-2"></i><span id="error_message"></span>
                        </div>
                        <div class="alert alert-warning" role="alert" id="no_question">
                            <i class="mdi mdi-alert-outline mr-2"></i><span id="no_question_found"></span>
                        </div>
                        <div class="alert alert-success" role="alert" id="reset_success">
                            <i class="mdi mdi-check-all mr-2"></i><span id="reset_success_message"></span>
                        </div>


                        <div class="form-group" id="user_id">
                            <label for="pass_email">Enter User ID</label>
                            <div class="input-group input-group-merge">
                                <input type="email" id="reset_user_id" name="reset_user_id" class="form-control"
                                    autocomplete="off" aria-autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group" id="security_question_form">
                            <label id="security_question"></label>
                            <br>
                            <div class="input-group input-group-merge">
                                <input type="email" id="security_question_answer" name="security_question_answer"
                                    class="form-control" autocomplete="off" aria-autocomplete="off">

                                <input type="text" id="security_question_code" hidden>
                            </div>

                            <div class="form-group">
                                <label for="pass_email">Enter Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="reset_password" name="reset_password" class="form-control"
                                        autocomplete="off" aria-autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pass_email">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="reset_confirm_password" name="reset_confirm_password"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="button" id="user_id_next_btn">
                                <span class="user_id_next_btn_text">Next</span>
                                <span class="spinner-border spinner-border-sm mr-1 spinner-text" role="status"
                                    aria-hidden="true"></span>
                                {{-- <span class="spinner-text">Loading ...</span> --}}
                            </button>
                            <button class="btn btn-primary btn-block" type="button"
                                id="security_question_submit">Submit</button>
                            {{-- <button class="btn btn-primary btn-block" type="button"
                                id="reset_password_submit_btn">Submit</button> --}}

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

@section('scripts')




    <script>
        $(document).ready(function() {
            {{-- e.preventDefault(); --}}

            $("#password_verification").show()
            $("#security_question_form").hide();
            $("#password_verification").hide();
            $('#security_question_next').hide();
            $("#reset_password_submit").hide();
            $("#security_question_submit").hide();
            $("#reset_password_submit_btn").hide()
            $("#error_alert").hide();
            $('#no_question').hide();
            $("#reset_success").hide();
            $("#reset_success_message").hide()
            $(".spinner-text").hide();




            function toaster(message, icon, timer) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: timer,
                    timerProgressBar: false,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: icon,
                    title: message
                })
            }

            $("#user_id_next_btn").click(function(e) {
                e.preventDefault()
                $("#error_alert").hide();
                $("#no_question").hide()



                var enter_user_id = $("#reset_user_id").val()

                ("#user_id_next_btn").attr('disabled', true)
                $(".spinner-text").show();
                $("#user_id_next_btn_text").hide()

                if (enter_user_id !== '') {

                    $.ajax({
                        type: "GET",
                        url: 'post-security-question-api/' + enter_user_id,
                        datatype: "application/json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                .attr(
                                    'content')
                        },
                        success: function(response) {

                            console.log(response)

                            var error = response.message
                            if (response.responseCode == 000) {


                                {{-- console.log(response.message) --}}

                                var sec_question = response.data[0].description
                                var sec_code = response.data[0].code
                                let sec_question_code = $("#security_question_code").val(
                                    sec_code)
                                $("#security_question").text(sec_question)
                                $("#security_question_form").toggle('500');
                                $("#security_question_submit").show();
                                $("#reset_password_submit_btn").hide()
                                $("#user_id_next_btn").hide();
                                $("#password_verification").hide()
                                $("#user_id").hide()
                                $("#reset_user_id").hide();
                                $("#password_verification").hide();
                            } else {
                                $("#no_question").toggle('500')
                                $("#no_question_found").text(error)
                                    ("#user_id_next_btn").attr('disabled', true)
                                $(".spinner-text").show();
                                $("#user_id_next_btn_text").hide()
                            }


                        }
                    })
                } else {
                    {{-- toaster('Enter User Id', 'error', 10000); --}}
                    $("#error_alert").toggle('500');
                    $("#error_message").text('Enter User Id');
                }

            })

            $("#security_question_submit").click(function(e) {

                e.preventDefault()

                $("#error_alert").hide();
                $("#no_question").hide();

                var enter_user_id = $("#reset_user_id").val()

                var security_question_answer = $("#security_question_answer").val()

                var reset_password = $("#reset_password").val()

                var reset_confirm_password = $("#reset_confirm_password").val();

                var sec_code = $("#security_question_code").val()

                function redirect_page() {
                    window.location.href = "{{ url('/') }}";

                };

                if (reset_password == reset_confirm_password) {

                    {{-- alert('equal'); --}}
                    {{-- return false; --}}

                    $.ajax({
                        type: 'POST',
                        url: 'forgot-password-api',
                        datatype: "application/json",
                        data: {
                            "security_answer": security_question_answer,
                            "password": reset_confirm_password,
                            "security_question": sec_code,
                            "user_id": enter_user_id
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                .attr(
                                    'content')
                        },
                        success: function(response) {
                            console.log(response.message);

                            response.message

                            if (response.responseCode == 000) {
                                $("#reset_success_message").text(response.message)
                                $("#reset_success").show('500');


                                setTimeout(function() {

                                    redirect_page();
                                }, 5000);

                            } else {
                                $("#error_alert").toggle('500')
                                $("#error_message").text(response.message);
                            }
                        }
                    })

                } else {
                    $("#error_alert").toggle('500');
                    $("#error_message").text('Password do not match');
                }
            })
        })
    </script>
@endsection
