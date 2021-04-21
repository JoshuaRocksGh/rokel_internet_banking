@extends('layouts.master')

@section('content')


    <div class="container">

        <div class=" card card-body">

            <div class="row ">

                <div class="col-md-2"></div>

                <div class="col-md-8">




                    <div class="row">
                        <div class="col-md-2"> </div>

                        <div class="col-md-12 disappear-after-success">
                            <div class="">


                                <ul class="nav nav-tabs nav-bordered nav-justified">
                                    <li class="nav-item">
                                        <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <i class="mdi mdi-security"></i>&nbsp; Change Pin
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                            <i class="fas fa-lock"></i>&nbsp; Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b3" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                            <i class="fas fa-unlock-alt"></i>&nbsp; Forgot Pin
                                        </a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home-b2">
                                        <p>
                                        <h4 class="text-primary text-center">Change your pin</h4>
                                        <hr>
                                        </p>

                                        <p>
                                        <p class="text" style="text-align: center">
                                            Your new Pin must be different from
                                            the previous one
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <form autocomplete="off" aria-autocomplete="off" id="forgot_pin_form">

                                                    <div class="form-group">
                                                        <label for="simpleinput">Enter old pin</label>
                                                        <input type="text" id="old_pin_txtBx" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                    </div>

                                                    <div class="form-group">
                                                        <label for="simpleinput">Enter new pin</label>
                                                        <input type="text" id="new_pin_txtBx" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="simpleinput">Confirm pin</label>
                                                        <input type="text" id="confirm_pin_txtBx" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="new_password">Security Question</label>
                                                        <div class="input-group input-group-merge">
                                                            <select class="form-control" id="security_questions">
                                                                <option value="">Select Security Queston</option>
                                                            </select>

                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="security_answer">Security Answer</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="security_answer_txtBx" class="form-control"
                                                                placeholder="Security Answer">
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary btn-rounded" type="button"
                                                            id="btn_change_pin">
                                                        <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner" aria-hidden="true"></span>
                                                        <span id="spinner-text">Loading...</span>
                                                            &nbsp; <span id="submit-text">Submit</span> &nbsp;
                                                        </button>
                                                    </div>

                                                </form>

                                            </div>

                                            <div class="col-md-6">
                                                <img src="{{ asset('assets/images/change_pin.jpg') }}" class="img-fluid"
                                                    alt="">
                                            </div>

                                        </div> <!-- end col -->
                                        </p>

                                    </div>
                                    <div class="tab-pane " id="profile-b2">

                                        <p>
                                        <h4 class="text-primary text-center">Change your password</h4>
                                        <hr>
                                        </p>

                                        <p>
                                        <p class="text" style="text-align: center">
                                            Your new Password must be different from
                                            the previous one
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">

                                                <form autocomplete="off" aria-autocomplete="off" id="forgot_password">

                                                    <div class="form-group">
                                                        <label for="simpleinput">Enter old password</label>
                                                        <input type="text" id="old_password_txtBx" class="form-control">

                                                    </div>



                                                    <div class="form-group">
                                                        <label for="simpleinput">Enter new password</label>
                                                        <input type="text" id="new_password_txtBx" class="form-control">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="simpleinput">Confirm password</label>
                                                        <input type="text" id="confirm_password_txtBx" class="form-control">
                                                    </div>

                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary btn-rounded" type="button"
                                                            id="next_button">
                                                            &nbsp; Submit &nbsp;</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div> <!-- end col -->
                                        </p>


                                    </div>

                                    <div class="tab-pane " id="profile-b3">

                                        <p>
                                        <h4 class="text-primary text-center">Reset your pin</h4>
                                        <hr>
                                        </p>

                                        <p>
                                        <p class="text" style="text-align: center">
                                            Enter your email address and we will send you an email with instructions to
                                            reset your pin.
                                        </p>
                                        <div class=" ">
                                            <div class="col-md-12">
                                                <form action="" autocomplete="off" aria-autocomplete="off" id="reset_pin_form">

                                                    <div class="form-group">
                                                        <label for="simpleinput">Email Address</label>
                                                        <input type="text" id="email_address_txtBx" class="form-control">

                                                    </div>
                                                    <div class="form-group text-center">
                                                        <button class="btn btn-primary " type="button" id=" ">
                                                            &nbsp; Reset Pin &nbsp;</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div> <!-- end col -->
                                        </p>


                                    </div>

                                </div>

                        </div> <!-- end col -->

                        <div class="col-md-2"> </div>
                    </div>


                </div>

                <div class="col-md-2"></div>

            </div>

        </div>

    </div>



@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function get_security_question() {
            $.ajax({
                'type': 'GET',
                'url': 'get-security-question-api',
                "datatype": "application/json",
                success: function(response) {
                    console.log(response.data);
                    let data = response.data
                    $.each(data, function(index) {

                        $('#security_questions').append($('<option>', {
                            value: data[index].Q_CODE
                        }).text(data[index].Q_DESCRIPTION));

                    });

                },

            })
        }

        //code for sweet alert
        function toaster(message, icon, timer)
            {
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



        $(document).ready(function() {

            setTimeout(function() {
                get_security_question();
            }, 2000);


        //hide the spinner on show
        $('#spinner').hide()
        $('#spinner-text').hide()

         $("#old_pin_txtBx").change(function(){
             let old_pin = $("#old_pin_txtBx").val();
            console.log(old_pin);
         });

         $("#new_pin_txtBx").change(function(){
            let new_pin = $(this).val();
            console.log(new_pin);
         });

         $("#confirm_pin_txtBx").change(function(){
             let confirm_pin = $(this).val();
             console.log(confirm_pin);
         });

         $("#security_questions").change(function(){
            let security_question = $(this).val();
            console.log(security_question);
         });

         $("#btn_change_pin").click(function(){
            // toaster("good", "error", 6000);
            let security_answer = $("#security_answer_txtBx").val();
            let new_pin = $("#new_pin_txtBx").val();
            let confirm_pin = $("#confirm_pin_txtBx").val();
            let old_pin = $("#old_pin_txtBx").val();
            let security_question = $("#security_questions").val();

        if(security_answer =="" || new_pin =="" || confirm_pin == "" || old_pin =="" || security_question==""){
            toaster("Please fill all required fields","error", 6000);
            }
        else{
            if(new_pin != confirm_pin){
                    // alert(" New pin and confirm must be the same ");
                    toaster("new pin and confirm pin must be the same", "error", 6000 );
                }

            else{

                // let security_answer = $("#security_ans")
                var pin_correct = confirm_pin;

                $('#spinner').show()
                $('#spinner-text').show()
                $('#submit-text').hide()
                $.ajax({
                            'type' : 'POST',
                            'url' : 'change-pin-api',
                            "datatype" : "application/json",
                            'data' : {
                                'security_answer' : security_answer.trim(),
                                'old_pin' : old_pin,
                                'new_pin' : new_pin,
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success:
                            function(response){

                                console.log(response)

                                if(response.responseCode != '000'){
                                    toaster(response.message, 'success',20000 )
                                    // $("#request_form_div").hide();
                                    // $(".disappear-after-success").hide();
                                    // $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />')
                                    // $("request_detail_div").show();
                                    $("#old_pin_txtBx").empty("");
                                    }
                                    else
                                    {

                                    toaster(response.message, 'error', 9000 );
                                    $("#spinner").hide();
                                    $("#spinner-text").hide();
                                    $("#submit-text").show();

                                    }
                            }
            });

            }
        }



            });

        });

    </script>
@endsection
