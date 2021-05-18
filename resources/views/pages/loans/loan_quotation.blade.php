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
                        LOAN QUOTATION

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
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10" style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230)); ">

                            <div class="row" >


                                <div class="col-md-7 disappear-after-success" id="loan_request_div">

                                    <div class="">

                                        <table class="table mb-0 table-striped table-bordered">

                                            <tbody>
                                                <tr class="bg-blue text-white">
                                                    <td>Loan Quotation Form</td>
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
                                                            <input type="text" class="form-control" id="loan_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="tenure_in_months" class="col-6 col-form-label">
                                                            <label>Tenure in months:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <input type="number" class="form-control" id="tenure_in_months" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
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
                                                    <div class="form-group row">
                                                        <div for="interestRatePerMonthOrAnnum" class="col-6 form-label">
                                                            <label>Interest Rate</label>
                                                            <span class="text-danger">*</span>
                                                        </div>
                                                        <div class="btn-group col-6">
                                                            <input type="text" id="interest_rate_per_month" class="form-control" disabled="true" placeholder="Rate per month"/>
                                                            <input type="text" id="interest_rate_per_annum" class="form-control" disabled="true" placeholder="Rate per annum"/>

                                                        </div>
                                                    </div>


                                            </form>

                                        </p>


                                    </div>

                                </div> <!-- end card-box -->

                                <div class="col-md-5 " id="loan_request_detail_div">

                                    <table class="table mb-0 table-striped table-bordered">

                                        <tbody>
                                            <tr class="bg-blue text-white">
                                                <td>Loan Quotation Summary</td>
                                            </tr>
                                            <tr class="">

                                                <td>
                                                    <span class="text-right   font-weight-semibold">
                                                        <span class="  display_loan_product"></span>
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
                                                        <span class="display_tenure_in_months"></span>
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
                                            <tr class="">
                                                <td>

                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_interest_rate"></span>
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

                                <div class="col-md-5 text-center">

                                    <p class="display-4 text-center text-success success-message ">
                                        <img src="{{ asset("land_asset/images/statement_success.gif") }}" />
                                    </p>
                                </div>



                                <div id="collapseOne" class="collapse show col-md-12" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-8 offset-4 text-right">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm btn-rounded waves-effect waves-light "
                                                            id="btn_submit_new_loan_request">
                                                            New Loan Request
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="table-responsive table-bordered">
                                                <table  class="table mb-0 loan_payment_schedule">
                                                    <thead>
                                                        <tr class="bg-blue text-white ">
                                                            <td> <b> NO </b> </td>
                                                            <td> <b> REPAYMENT DATE </b> </td>
                                                            <td> <b> PRINCIPAL REPAYMENT AMOUNT </b> </td>
                                                            <td> <b> INTEREST REPAYMENT AMOUNT </b> </td>
                                                            <td> <b> TOTAL REPAYMENT AMOUNT </b> </td>
                                                        </tr>
                                                    </thead>

                                                </table>
                                            </div>
                                            <!-- end table-responsive -->


                                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
            {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
            <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script>

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

            $("#loan_amount").change(function(){
                var loan_amount = $("#loan_amount").val();
                $(".display_loan_amount").text("Loan Amount: SLL "+loan_amount);
                console.log(loan_amount);
            })

            $("#tenure_in_months").change(function(){
                var tenure_in_months = $("#tenure_in_months").val();
                $(".display_tenure_in_months").text("Tenure In Months: "+tenure_in_months);
                console.log(tenure_in_months);
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
            // $("#pin").keyup(function(){
            //     var pin = $("#pin").val();
            //     console.log(pin);
            // })


            $('#btn_submit_loan_request').click(function(){

                    //collect loan details
                    let loan_product = $('#loan_product').val();
                    let loan_amount = $('#loan_amount').val();
                    let tenure_in_months = $('#tenure_in_months').val();
                    let interest_rate_type = $('#interest_rate_type').val();
                    let principal_repay_freq = $('#principal_repay_freq').val();
                    let interest_repay_freq = $('#interest_repay_freq').val();

                    var table = $('.loan_payment_schedule').DataTable();
                    var nodes = table.rows().nodes();

                    console.log('loan product: '+loan_product);
                    console.log('loan amount: '+loan_amount);
                    console.log('interest rate type: '+interest_rate_type);
                    console.log('principal repay frequency: '+principal_repay_freq);
                    console.log('Interest repay frequency '+interest_repay_freq);


                    if(loan_product =="" || loan_amount =="" || tenure_in_months == "" || interest_rate_type =="" || principal_repay_freq == "" || interest_repay_freq ==""){
                        toaster("Please fill all required fields","error", 6000);
                    }
                    else{
                    $(".submit-text").hide();
                    $(".spinner-border").show();
                    $("#spinner-text").show();



                    $.ajax({

                        'type' : 'POST',
                        'url' : 'loan-quotation-details',
                        "datatype" : "application/json",
                        'data' : {
                            'loan_product' : loan_product,
                            'loan_amount' : loan_amount,
                            'tenure_in_months' : tenure_in_months,
                            'interest_rate_type' : interest_rate_type,
                            'principal_repay_freq' : principal_repay_freq,
                            'interest_repay_freq' : interest_repay_freq
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:
                        function(response){
                            var data = response.data.loanSchedule
                            console.log(response)

                            if(response.responseCode == '000'){
                                toaster(response.message, 'success', 20000 )
                                $("#request_form_div").hide();
                                $(".disappear-after-success").hide();
                                // $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />');
                                // $(".success-message").hide(30000);
                                $("#loan_request_detail_div").show();
                                $(".success-message").show();
                                $("#loan_request_detail_div").hide();
                                $(".success-message").hide();
                                $(".appear-button").show();




                                // // console.log(data); return false;
                                // let data = data.loanSchedule;

                                var count = count +1;
                                $.each(data, function(index) {
                                console.log(data[index]);

                                // count++;


                                model_data = data[index]

                                table.row.add([
                                    index+1,
                                    data[index].repaymentDate,
                                    data[index].principalRepayment,
                                    data[index].interestRepayment,
                                    data[index].totalRepayment


                                ]).draw(false)

                            })
                                }
                                else
                                {

                                toaster(response.message, 'error', 9000 );
                                toaster('resubmit your loan request','error', 9000);
                                $('#spinner').hide()
                                $('#spinner-text').hide()

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
