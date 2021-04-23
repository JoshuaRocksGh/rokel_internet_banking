@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">REQUEST A LOAN</h2>

                            <p class="text-muted font-14 m-b-20">
                                You can request for your loan now.
                            </p>

                            <hr>


                            <div class="row" >


                                <div class="col-md-7 disappear-after-success" id="loan_request_div">

                                    <div class="">

                                        <table class="table mb-0 table-striped table-bordered">

                                            <tbody>
                                                <tr class="bg-secondary text-white">
                                                    <td>Loan Request</td>
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
                                                                    <option value="Car Loan">Car Loan</option>
                                                                    <option value="Home Equity Loan">Home Equity Loan</option>
                                                                    <option value="Business Loan">Business Loan</option>
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
                                                            <input type="number" class="form-control" id="loan_period" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="interest_rate_type" class="col-6 col-form-label">
                                                            <label>Interest Rate Type:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select" id="interest_rate_type" required>
                                                                <option value="">---Select Interest Rate Type---</option>
                                                                <option value="1">STRAIGHT LINE</option>
                                                                <option value="2">REDUCING BALANCE</option>
                                                                <option value="3">AMORTIZATION METHOD</option>
                                                                <option value="4">REDUCING (FIXED INST'L)</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="principal_repay_freq" class="col-6 col-form-label">
                                                            <label>Principal Repay Frequency:</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <select class="custom-select" id="principal_repay_freq" required>
                                                                <option value="">-Select Principal Repay Frequency-</option>
                                                                <option value="1">WEEKLY</option>
                                                                <option value="2">BI-WEEKLY</option>
                                                                <option value="3">MONTHLY</option>
                                                                <option value="4">QUARTERLY</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-6 col-form-label">
                                                            Interest Repay Frequency:
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-6">
                                                            <input type="text" class="form-control" id="interest_repay_freq" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

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
                                            <tr class="bg-secondary text-white">
                                                <td>Request Details</td>
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
                                                        <span class="display_amount"></span>
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
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success" id="btn_submit_request_statement">
                                                Submit
                                            </button>

                                        </div>
                                    </div>


                                </div> <!-- end col -->

                                <div class="col-md-5 text-center">

                                    <p class="display-4 text-center text-success success-message ">

                                    </p>
                                </div>

                                <div id="collapseOne" class="collapse show col-md-12" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">

                                            <div class="table-responsive table-bordered">
                                                <table id="" class="table mb-0 ">
                                                    <thead>
                                                        <tr class="bg-secondary text-white ">
                                                            <td> <b> NO </b> </td>
                                                            <td> <b> REPAYMENT DATE </b> </td>
                                                            <td> <b> PRINCIPAL REPAYMENT AMOUNT </b> </td>
                                                            <td> <b> INTEREST REPAYMENT AMOUNT </b> </td>
                                                            <td> <b> TOTAL REPAYMENT AMOUNT </b> </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="casa_list_display">


                                                    </tbody>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>

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

            setTimeout(function(){
                branches()
                my_account()
            }, 1000)

            $("#loan_product").change(function(){
                var loan_product = $("#loan_product").val();
                $(".display_loan_product").text(loan_product);
                console.log(loan_product);
            });

            $("#statementType").change(function(){
                var statementType = $("#statementType").val();
                $(".display_type_of_statement").text(statementType);
                console.log(statementType);
            })

            $("#pUBranch").change(function(){
                $('.display_pick_up_branch').text("");
                var pickUpBranch = $(this).val();
                if(pickUpBranch != ""){

                    let branch_info = pickUpBranch.split("~")
                    $(".display_pick_up_branch").text(branch_info[1]);
                    console.log(branch_info[1]);
                    console.log(pickUpBranch);
                    console.log(branch_info[1]);
               }

            })

            $("#startDate").change(function(){
                var startDate = $("#startDate").val();
                $(".display_trans_startDate").text("Start Date: "+startDate);
                console.log(startDate);
            })

            $("#endDate").change(function(){
                var endDate = $("#endDate").val();
                $(".display_trans_endDate").text("End Date: "+endDate);
                console.log(endDate);
            })

            // $("#pin").keyup(function(){
            //     var pin = $("#pin").val();
            //     console.log(pin);
            // })


            $('#btn_submit_request_statement').click(function(){
                // toaster("Please fill all required fields","error", 6000);
                // return false;


                    //statement request details/get values.
                    let my_account = $('#my_account').val();
                    let type_of_statement = $('#statementType').val();
                    let pUBranch = $('#pUBranch').val();
                    let transStartDate = $('#startDate').val();
                    let transEndDate = $('#endDate').val();
                    let pin = $('#pin').val();
                    console.log(pin);


                    if(pUBranch =="" || my_account =="" || type_of_statement == "" || transStartDate =="" || transEndDate == "" || pin ==""){
                        toaster("Please fill all required fields","error", 6000);
                    }
                    else{

                        let branch_info = pUBranch.split("~");
                        let branchCode = branch_info[0];

                        my_account_info = my_account.split("~");
                        let accountNumber = my_account_info[2].trim();



                    $.ajax({

                        'type' : 'POST',
                        'url' : 'statement-request-api',
                        "datatype" : "application/json",
                        'data' : {
                            'account_no' : accountNumber.trim(),
                            'type_of_statement' : type_of_statement,
                            'pick_up_branch' : branchCode.trim(),
                            'transStartDate' : transStartDate.trim(),
                            'transEndDate' : transEndDate.trim(),
                            'pin': pin
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:
                        function(response){

                            console.log(response)

                            if(response.responseCode == '000'){
                                toaster(response.message, 'success', 20000 )
                                $("#request_form_div").hide();
                                $(".disappear-after-success").hide();
                                $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />')
                                $("loan_request_detail_div").show();
                                }
                                else
                                {

                                toaster(response.message, 'error', 9000 );

                                }
                        }
                        });

                    }


                });

        });
    </script>

@endsection
