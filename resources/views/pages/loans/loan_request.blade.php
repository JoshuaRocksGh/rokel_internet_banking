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
                <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        <div class=" col-md-7 m-2" id="request_form_div"
                                            style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                            <br><br><br>

                                            <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                                aria-autocomplete="none">
                                                @csrf
                                                <div class="row container">
                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-9">

                                                        {{-- <br><br><br> --}}
                                                        <div class="row">
                                                            {{-- <div class="col-md-1"></div> --}}

                                                            <div class="col-md-12">

                                                                <div class="form-group row mb-3">
                                                                    <b class="col-md-6 text-primary">Loan Product &nbsp; <span
                                                                            class="text-danger">*</span> </b>


                                                                    <select class="form-control col-md-6 " id="loan_product"
                                                                        required>
                                                                        <option value="">Select Loan Product</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary" for="loan_amount" >
                                                                        Amount
                                                                        <span class="text-danger">*</span></b>
                                                                        <input type="text" class="form-control col-md-6" id="loan_amount"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">


                                                                </div>

                                                                <div class="form-group row mb-3" id="pay_from_account">

                                                                    <b class="col-md-6 text-primary">Interest Rate Type &nbsp;
                                                                        <span class="text-danger">*</span></b>

                                                                    <select class="form-control col-md-6" id="interest_rate_type" required>
                                                                        <option value="">Select Interest Rate Type</option>
                                                                    </select>

                                                                </div>



                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary"> Principal Repay Frequency &nbsp; <span
                                                                            class="text-danger">*</span></b>


                                                                            <select class="form-control col-md-6 loan_frequencies" id="principal_repay_freq" placeholder="Select Pick Up Branch" required>
                                                                                <option value="">Select Principal Repay Frequency</option>
                                                                            </select>

                                                                </div>

                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary"> Interest Repay Frequency &nbsp; <span
                                                                            class="text-danger">*</span></b>


                                                                            <select class="form-control col-md-6 loan_frequencies" id="interest_repay_freq" placeholder="Select Pick Up Branch" required>
                                                                                <option value="">Select Interest Repay Frequency</option>
                                                                            </select>

                                                                </div>
                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary" for="loan_duration" >
                                                                        Loan duration
                                                                        <span class="text-danger">*</span></b>
                                                                        <input type="text" class="form-control col-md-6" id="loan_duration"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                                            <br>
                                                                        </div>
                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary" for="loan_purpose" >
                                                                        Loan Purpose
                                                                        <span class="text-danger">*</span></b>
                                                                        <select class="form-control col-md-6 loan_frequencies" id="loan_purpose" placeholder="Select Pick Up Branch" required>
                                                                            <option value="">Select Interest Repay Frequency</option>
                                                                        </select>
                                                                </div>



                                                                <div class="form-group text-right yes_beneficiary">
                                                                    <button type="button"
                                                                    class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success"
                                                                    id="btn_submit_loan_request">
                                                                    <span class="submit-text">Submit</span>
                                                                    <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner" aria-hidden="true"></span>
                                                                    <span id="spinner-text">Loading...</span>
                                                                </button>
                                                                </div>


                                                            </div>

                                                            {{-- <div class="col-md-1"></div> --}}
                                                        </div>









                                                    </div>
                                                    <div class="col-md-1"></div>

                                                </div>











                                            </form>


                        </div> <!-- end col -->

                        <div class="col-md-4 m-2" id="atm_request_summary"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <br><br>
                                    <div class="card card-body">
                                        {{-- <br><br> --}}
                                        <div class="row">
                                            <span class="col-md-12 success-message"></span>
                                            <h6 class="col-md-5">Loan Product:</h6>
                                            <span class="text-primary display_loan_product col-md-7"></span>
                                            <br> <br>
                                            <h6 class="col-md-5">Amount(SLL):</h6>
                                            <span class="text-primary display_loan_amount col-md-7"></span>

                                            <h6 class="col-md-5">Interest Rate Type:</h6>
                                            <span class="text-primary display_interest_rate_type col-md-7"></span>

                                            <h6 class="col-md-5">Principal Repay Frequency:</h6>
                                            <span class="text-primary display_principal_repay_freq col-md-5"></span>

                                            <h6 class="col-md-5">Interest Repay Frequency:</h6>
                                            <span class="text-success display_interest_repay_freq col-md-5"></span>

                                            <h6 class="col-md-5">Loan Duration:</h6>
                                            <span class="text-success display_loan_duration col-md-7"></span>

                                            <h6 class="col-md-5">Loan Purpose:</h6>
                                            <span class="text-success display_loan_purpose col-md-7"></span>

                                        </div>
                                    </div>

                                    <div class="form-group text-center display_button">

                                        <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                id="back_button" onclick="window.location.reload()">Back</button> &nbsp; </span>
                                        <span>&nbsp;
                                        <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                type="button" id="print_receipt" onclick="window.print()">Print
                                                Receipt
                                            </button></span>
                                    </div>
                        </div>

                        <div class="col-md-5 text-center card-body success-message" style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">

                            <p class="display-4 text-center text-success">
                                <img width="305px" height="505px" src="{{ asset("land_asset/images/rcb_cashless.jpeg") }}" />
                            </p>
                        </div>

                    </div>

                </div> <!-- end card-body -->
                </div>
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
        function loan_purpose() {
                            $.ajax({
                                'type': 'GET',
                                'url': 'get-loan-purpose-api',
                                "datatype": "application/json",
                                success: function(response) {
                                    console.log(response.data);
                                    let data = response.data
                                    $.each(data, function(index) {

                                        $('#loan_purpose').append($('<option>', {
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
                loan_purpose()

            }, 1000)

            $(".success-message").hide();
            $(".appear-button").hide();
            $(".display_button").hide();

            $("#loan_product").change(function(){
                var loan_product = $("#loan_product").val();
                var optionText = $("#loan_product option:selected").text();
                $(".display_loan_product").text(optionText);
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
                $(".display_loan_amount").text(loan_amount);
                console.log(loan_amount);
            })

            $("#loan_duration").change(function(){
                var loan_duration = $("#loan_duration").val();
                $(".display_loan_duration").text(loan_duration);
                console.log(loan_duration);
            })
            $("#interest_rate_type").change(function(){
                var interest_rate_type = $("#interest_rate_type").val();
                var optionText = $("#interest_rate_type option:selected").text();
                $(".display_interest_rate_type").text(optionText);
                console.log(interest_rate_type);
            })

            $("#principal_repay_freq").change(function(){
                var principal_repay_freq = $("#principal_repay_freq").val();
                var optionText = $("#principal_repay_freq option:selected").text();
                $(".display_principal_repay_freq").text(optionText);
                console.log(principal_repay_freq);
            })


            $("#interest_repay_freq").change(function(){
                var interest_repay_freq = $("#interest_repay_freq").val();
                var optionText = $("#principal_repay_freq option:selected").text();
                $(".display_interest_repay_freq").text(optionText);
                console.log(interest_repay_freq);
            })

            // $("#loan_purpose").change(function(){
            //     var loan_purpose = $("#loan_purpose").val();
            //     $(".display_loan_purpose").text(loan_purpose);
            //     console.log(loan_purpose);
            // })

            $("#loan_purpose").change(function(){
                var loan_purpose = $("#loan_purpose").val();
                var optionText = $("#loan_purpose option:selected").text();
                $(".display_loan_purpose").text(optionText);
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
                                $(".display_button").show();
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
