@extends('layouts.master')

@section('styles')

<!-- third party css -->
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
type="text/css" />
<!-- third party css end -->
@endsection

@section('content')

    <div class="">

        <div class="container-fluid">
            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                        LOAN REQUEST

                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> LOANS </b> &nbsp; > &nbsp; <b class="text-danger">LOAN REQUEST</b>


                        </span>

                    </h6>

                </div>

                <div class="col-md-12 ">
                    <hr class="text-primary" style="margin: 0px;">
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10" >

                            <div class="row" >


                                <div class="col-md-7 disappear-after-success" id="loan_request_div" >

                                    <div class="">

                                        <table class="table mb-0 table-striped table-bordered">

                                            <tbody>
                                                <tr class="bg-blue text-white">
                                                    <td>Loan Request Form</td>
                                                </tr>

                                                <tr>
                                                </tr>

                                            </tbody>


                                        </table>

                                        <p>


                                            <form role="form" class="parsley-examples">
                                                    <div class="form-group row">
                                                        <label for="loan_product" class="col-6 col-form-label">Select loan product<span
                                                                class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select" id="loan_product" required>
                                                                    <option value="">---Select Loan Product---</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="loan_amount" class="col-6 col-form-label">
                                                            Amount
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" id="loan_amount" placeholder="Enter Amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="interest_rate_type" class="col-6 col-form-label">
                                                            <label>Interest Rate Type:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select" id="interest_rate_type" required>
                                                                <option value="">---Select Interest Rate Type---</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="principal_repay_freq" class="col-6 col-form-label">
                                                            <label>Principal Repay Frequency:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select loan_frequencies" id="principal_repay_freq" required>
                                                                <option value="">-Select Principal Repay Frequency-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-6 col-form-label">
                                                            Interest Repay Frequency:
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select loan_frequencies" id="interest_repay_freq" required>
                                                                <option value="">-Select Principal Repay Frequency-</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="form-group row">
                                                        <label for="inputEmail3" class="col-6 col-form-label">Disbursement Account<span
                                                                class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select" id="my_account" required>
                                                                <option value="">Select Disbursement Account</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}


                                                    <div class="form-group row">
                                                        <label for="loan_duration" class="col-6 col-form-label">
                                                            <label>Loan Duration:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <input type="number" class="form-control" id="loan_duration" placeholder="Enter number of months" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="loan_purpose" class="col-6 col-form-label">
                                                            <label>Loan Purpose:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" id="loan_purpose" placeholder="Enter loan purpose" >
                                                        </div>
                                                    </div>
                                            </form>

                                        </p>


                                    </div>

                                </div> <!-- end card-box -->

                                <div class="col-md-5 " id="loan_request_detail_div" >

                                    <table class="table mb-0 table-striped table-bordered">

                                        <tbody>
                                            <tr class="bg-blue text-white">
                                                <td>Loan Request Summary</td>
                                            </tr>
                                            <tr class="">

                                                <td>
                                                    <span class="text-right   font-weight-semibold">
                                                        <span class="display_loan_product"></span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_loan_amount"></span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_interest_rate_type"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_principal_repay_freq"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>

                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_interest_repay_freq"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            {{-- <tr class="">
                                                <td>
                                                    <a class="text-body font-weight-semibold   display_my_account_name"></a>
                                                    <small class="d-block font-weight-semibold  display_my_account_no"></small>
                                                    <span class="text-right   font-weight-semibold"> --}}
                                                        {{-- <span class="display_my_account_currency"></span>
                                                        <span class="  display_my_account_amount"></span>
                                                    </span>
                                                </td>
                                            </tr> --}}
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_loan_duration"></span>
                                                    </span>
                                                </td>

                                            </tr>


                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_loan_purpose"></span>
                                                    </span>
                                                </td>

                                            </tr>


                                        </tbody>

                                    </table>

                                    <br>

                                    <div class="form-group row">
                                        <div class="col-8 offset-4 text-right">
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success" id="btn_submit_loan_request">
                                                <span class="spinner-border spinner-border-sm mr-1" id="spinner" role="status" aria-hidden="true"></span>
                                                <span id="spinner-text">Loading...</span>
                                                &nbsp; <span class="submit-text">Submit</span>&nbsp;
                                            </button>
                                        </div>
                                    </div>


                                </div> <!-- end col -->

                                <div class="col-md-7 text-center">

                                    <p class="display-4 text-center text-success success-message" style="background-color: wihie;">
                                        <img src="{{ asset("land_asset/images/statement_success.gif") }}" />
                                    </p>
                                </div>

                            </div>


                    </div>





                    <div class="col-md-1"></div>

                </div> <!-- end card-body -->

            </div>
        </div>

    </div>
@endsection

@section('scripts')

        <!-- link for the jquery side of the page.-->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

        <!-- link for the alerts that prompts users-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>

        // function to get accounts owned by the user
        // function my_account() {
        //     $.ajax({
        //         'type': 'GET',
        //         'url': 'get-my-account',
        //         "datatype": "application/json",
        //         success: function(response) {
        //             console.log(response.data);
        //             let data = response.data
        //             $.each(data, function(index) {

        //                 $('#my_account').append($('<option>', {
        //                     value: data[index].accountType + '~' + data[index].accountDesc +
        //                         '~' + data[index].accountNumber + '~' + data[index]
        //                         .currency + '~' + data[index].availableBalance
        //                 }).text(data[index].accountType + '~' + data[index].accountNumber +
        //                     '~' + data[index].currency + '~' + data[index].availableBalance));

        //             });
        //         },

        //     })
        // }

        function loan_frequencies() {
                            $.ajax({
                                'type': 'GET',
                                'url': 'get-loan-frequencies-api',
                                "datatype": "application/json",
                                success: function(response) {
                                    console.log(response.data);
                                    let data = response.data
                                    $.each(data, function(index) {

                                        $('.loan_frequencies').append($('<option>', {
                                            value: data[index].code}).text(data[index].name));

                                    });
                                },

                            })
                        }

        function interest_repay_frequency() {
                            $.ajax({
                                'type': 'GET',
                                'url': 'get-interest-types-api',
                                "datatype": "application/json",
                                success: function(response) {
                                    console.log(response.data);
                                    let data = response.data
                                    $.each(data, function(index) {

                                        $('#interest_rate_type').append($('<option>', {
                                            value: data[index].code}).text(data[index].name));

                                    });
                                },

                            })
                        }

            //function to get the loan products accessible to the customer of the bank.
            function loan_product() {
                            $.ajax({
                                'type': 'GET',
                                'url': 'get-loan-products-api',
                                "datatype": "application/json",
                                success: function(response) {
                                    console.log(response.data);
                                    let data = response.data
                                    $.each(data, function(index) {

                                        $('#loan_product').append($('<option>', {
                                            value: data[index].code}).text(data[index].name));

                                    });
                                },

                            })
                        }

            // function to set the layout of the prompts that pops up for the user
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

            function formatToCurrency(amount) {
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                }




        $(document).ready(function(){

            $("#spinner-text").hide();
            $("#spinner").hide();
            setTimeout(function(){
                loan_product()
                // my_account()
                loan_frequencies()
                interest_repay_frequency()

            }, 1000)

            $(".success-message").hide();
            $(".appear-button").hide();

            $("#loan_product").change(function(){
                var loan_product = $("#loan_product").val();
                var optionText = $("#loan_product option:selected").text();
                $(".display_loan_product").text("Loan Product: "+optionText);
                console.log(loan_product);
            });

            // $("#my_account").change(function() {
            //     var my_account = $(this).val();
            //     console.log(my_account_info);
            //     var my_account_info = my_account.split("~");
            //     // $(".display_my_account_no").text(my_account_info[0].trim());
            //     $(".display_my_account_name").text("Account Name: "+my_account_info[1].trim());
            //     $(".display_my_account_no").text("Account Number: "+my_account_info[2].trim());
            //     // $(".display_my_account_currency").text(my_account_info[3].trim());
            //     // $(".display_my_account_amount").text(formatToCurrency(Number(my_account_info[4].trim())))
            //     console.log(my_account);
            // });

            $("#loan_amount").change(function(){
                var loan_amount = $("#loan_amount").val();
                $(".display_loan_amount").text("Loan Amount: SLL "+loan_amount);
                console.log(loan_amount);
            })

            $("#loan_duration").change(function(){
                var loan_duration = $("#loan_duration").val();
                $(".display_loan_duration").text("Loan Duration In Months: "+loan_duration);
                console.log(loan_duration);
            })
            $("#interest_rate_type").change(function(){
                var interest_rate_type = $("#interest_rate_type").val();
                var optionText = $("#interest_rate_type option:selected").text();
                $(".display_interest_rate_type").text("Interest Rate Type: "+optionText);
                console.log(interest_rate_type);
            })

            $("#principal_repay_freq").change(function(){
                var principal_repay_freq = $("#principal_repay_freq").val();
                var optionText = $("#principal_repay_freq option:selected").text();
                $(".display_principal_repay_freq").text("Principal Repay Frequency: "+optionText);
                console.log(principal_repay_freq);
            })


            $("#interest_repay_freq").change(function(){
                var interest_repay_freq = $("#interest_repay_freq").val();
                var optionText = $("#principal_repay_freq option:selected").text();
                $(".display_interest_repay_freq").text("Interest Repay Frequency: "+optionText);
                console.log(interest_repay_freq);
            })

            $("#loan_purpose").change(function(){
                var loan_purpose = $("#loan_purpose").val();
                $(".display_loan_purpose").text("Loan Purpose: "+loan_purpose);
                console.log(loan_purpose);
            })

            // $("#principal_repay_freq").change(function(){
            //     var principal_repay_freq = $("#principal_repay_freq").val();
            //     var optionText = $("#principal_repay_freq option:selected").text();
            //     $(".display_principal_repay_freq").text("Principal Repay Frequency: "+optionText);
            //     console.log(principal_repay_freq);
            // })


            // $("#interest_repay_freq").change(function(){
            //     var interest_repay_freq = $("#interest_repay_freq").val();
            //     var optionText = $("#principal_repay_freq option:selected").text();
            //     $(".display_interest_repay_freq").text("Interest Repay Frequency: "+optionText);
            //     console.log(interest_repay_freq);
            // })
            // $("#pin").keyup(function(){
            //     var pin = $("#pin").val();
            //     console.log(pin);
            // })


            $('#btn_submit_loan_request').click(function(){

                    //collect loan details
                    let loan_product = $('#loan_product').val();
                    // let disbursement_account = $("#my_account").val();
                    let loan_amount = $('#loan_amount').val();
                    let loan_duration = $('#loan_duration').val();
                    let interest_rate_type = $('#interest_rate_type').val();
                    let principal_repay_freq = $('#principal_repay_freq').val();
                    let interest_repay_freq = $('#interest_repay_freq').val();
                    let loan_purpose = $('#loan_purpose').val();


                    console.log('loan product: '+loan_product);
                    console.log('loan amount: '+loan_amount);
                    console.log('loan purpose: '+loan_purpose);
                    console.log('loan duration: '+loan_duration);
                    console.log('interest rate type: '+interest_rate_type);
                    console.log('principal repay frequency: '+principal_repay_freq);
                    console.log('Interest repay frequency '+interest_repay_freq);

                    // disbursement_account = "" ||
                    if(loan_product =="" ||  loan_amount =="" || loan_duration == "" || interest_rate_type=="" || principal_repay_freq =="" ||interest_repay_freq=="" || loan_purpose ==""){
                        toaster("Please fill all required fields","error", 6000);
                    }
                    else{
                    $(".submit-text").hide();
                    $(".spinner-border").show();
                    $("#spinner-text").show();

                    // my_account_info = disbursement_account.split("~");
                    // let accountNumber = my_account_info[2].trim();
                    // console.log(accountNumber);



                    $.ajax({

                        'type' : 'POST',
                        'url' : 'loan-request-details',
                        "datatype" : "application/json",
                        'data' : {
                            'loan_product' : loan_product,
                            // 'disbursement_account' : accountNumber,
                            'loan_amount' : loan_amount,
                            'loan_duration' : loan_duration,
                            'interest_rate_type' : interest_rate_type,
                            'principal_repay_freq': principal_repay_freq,
                            'interest_repay_freq' : interest_repay_freq,
                            'loan_purpose' : loan_purpose

                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:function(response) {

                            console.log(response);

                            if(response.responseCode == '000'){
                                toaster("Loan request successful. Approval pending with application number as "+ response.message, 'success', 20000 )
                                $("#request_form_div").hide();
                                $(".disappear-after-success").hide();

                                $("#loan_request_detail_div").show();
                                $(".success-message").show();
                                // $("#loan_request_detail_div").hide();
                                // // $(".success-message").hide();
                                // $(".appear-button").show();

                                }
                                else
                                {

                                toaster(response.message, 'error', 9000 );
                                toaster('kindly check your input and resubmit your loan request','error', 90000);
                                $('#spinner').hide()
                                $('#spinner-text').hide()
                                $(".submit-text").show()

                                }
                        },
                        error: function(xhr, status, error){
                            $('#submit').attr('disabled',false);
                            $('#spinner').hide()
                            $('#spinner-text').hide()

                            $('#log_in').show()
                            $('#error_message').text("Connection Error")
                            $('#failed_login').show()
                        }
                        });

                    }


                });

                $("#btn_submit_new_loan_request").click(function(){
                    $(".disappear-after-success").toggle();

                });



        });
    </script>

@endsection
