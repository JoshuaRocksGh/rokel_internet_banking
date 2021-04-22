@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">REQUEST A STATEMENT</h2>

                            <p class="text-muted font-14 m-b-20">
                                You can request for your statement now.
                            </p>

                            <hr>


                            <div class="row" >


                                <div class="col-md-7 disappear-after-success" id="request_statement_div">

                                    <div class="">

                                        <table class="table mb-0 table-striped table-bordered">

                                            <tbody>
                                                <tr class="bg-secondary text-white">
                                                    <td>Request Details</td>
                                                </tr>

                                                <tr>
                                                </tr>

                                            </tbody>


                                        </table>

                                        <p>


                                            <form role="form" class="parsley-examples">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-5 col-form-label">Account Number<span
                                                                class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select class="custom-select " id="my_account" required>
                                                                <option value="">Select Account</option>
                                                                    {{-- <option value="001023468976001">001023468976001</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="statementType" class="col-5 col-form-label">
                                                            Type of Statement
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select class="custom-select " id="statementType" required>
                                                                <option value="">Select Type of Statement</option>
                                                                <option value="VISA">VISA</option>
                                                                <option value="ELECTRONIC">ELECTRONIC</option>
                                                                <option value="ORDINARY">ORDINARY</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="pUBranch" class="col-5 col-form-label">
                                                            <label>Pick Up Branch</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select ect class="custom-select " id="pUBranch" required>
                                                                <option value="">-----Not Selected-----</option>
                                                                {{-- <option value="Accra">Accra</option>
                                                                <option value="ADONKIA BRANCH">ADONKIA BRANCH</option>
                                                                <option value="WILBERFORCE BRANCH">WILBERFORCE BRANCH</option>
                                                                <option value="PORT LOKKO BRANCH">PORT LOKKO BRANCH</option> --}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div for="duration" class="col-12 form-label">
                                                            <label>Transaction Period</label>
                                                            <span class="text-danger">*</span>
                                                        </div>
                                                        <div class="btn-group col-12">

                                                            <input type="date" id="startDate" class="form-control"/>
                                                            <input type="date" id="endDate" class="form-control"/>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-5 col-form-label">
                                                            Enter Your Pin
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <input type="password" class="form-control" id="pin" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                                        </div>
                                                    </div>


                                            </form>

                                        </p>
                                    </div>

                                </div> <!-- end card-box -->

                                <div class="col-md-5 " id="request_detail_div">

                                    <table class="table mb-0 table-striped table-bordered">

                                        <tbody>
                                            <tr class="bg-secondary text-white">
                                                <td>Request Details</td>
                                            </tr>
                                            <tr class="">

                                                <td>
                                                    <a
                                                        class="text-body font-weight-semibold   display_my_account_name"></a>
                                                    <small class="d-block   display_my_account_no"></small>
                                                    <span class="text-right   font-weight-semibold">
                                                        <span class="display_my_account_currency"></span>
                                                        <span class="  display_my_account_amount"></span>
                                                    </span>
                                                </td>



                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_type_of_statement"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_pick_up_branch"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_trans_startDate"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>

                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_trans_endDate"></span>
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

        function my_account(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-my-account',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#my_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));

                        });
                    },

                })
            }

            function branches(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-bank-branches-list-api',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#pUBranch').append($('<option>', { value : data[index].branchCode+'~'+data[index].branchDescription}).text(data[index].branchDescription));

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

            setTimeout(function(){
                branches()
                my_account()
            }, 1000)

            $("#my_account").change(function(){
                var my_account = $(this).val();
                console.log(my_account_info);
                var my_account_info = my_account.split("~");
                $(".display_my_account_no").text(my_account_info[0].trim());
                $(".display_my_account_name").text(my_account_info[1].trim());
                $(".display_my_account_no").text(my_account_info[2].trim());
                $(".display_my_account_currency").text(my_account_info[3].trim());
                $(".display_my_account_amount").text(formatToCurrency(Number(my_account_info[4].trim())))
                console.log(my_account);
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
                                $("request_detail_div").show();
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
