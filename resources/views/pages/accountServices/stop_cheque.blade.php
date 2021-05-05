@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">STOP CHEQUE REQUEST</h2>

                        <p class="text-muted font-14 m-b-20">
                            A cheque stop payment letter is a letter that is written by a person who has issued a cheque and intends to stop payment on that cheque, to their bank.
                        </p>
                        <hr>


                        <div class="row" >

                            <div class="col-md-7" id="request_form_div">

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


                                    <form role="form" class="parsley-examples" autocomplete="off" aria-autocomplete="off">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-4 col-form-label">MY Account<span
                                                    class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <select class="custom-select " id="my_account" required>
                                                    <option value="">Select Account</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">
                                                Cheque Number: FROM
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                            <input type="text" class="form-control" id="cheque_no_from" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="webSite" class="col-4 col-form-label">
                                                <label> Cheque Number: TO</label>
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="cheque_no_to" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">
                                                Date Issued
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="date" class="form-control" id="date_issued" required>

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">
                                                Amount on Cheque
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-4 col-form-label">
                                                Enter Your Pin
                                                <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="pin" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                            </div>
                                        </div>



                                </form>

                                </p>


                            </div> <!-- end card-box -->


                        </div>


                        <div class="col-md-5 disappear-after-success" id="request_detail_div">

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
                                              Cheque Number  FROM: &nbsp;
                                                <span class="display_cheque_no_from"></span>
                                                &nbsp; TO: &nbsp;
                                                <span class="display_cheque_no_to"></span>

                                            </span>
                                        </td>

                                    </tr>
                                    <tr class="">
                                        <td>
                                            <span class="text-right font-weight-semibold">
                                                <span class="display_date_issued"></span>
                                            </span>
                                        </td>

                                    </tr>
                                     <tr class="">
                                        <td>
                                            <span class="text-right font-weight-semibold">
                                                <span class="display_currency"></span>
                                                <span class="display_amount"></span>
                                            </span>
                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                            <br>

                            <div class="form-group row">
                                <div class="col-8 offset-4 text-right">
                                    <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success" id="submit_cheque_request">
                                        Submit
                                    </button>

                                </div>
                            </div>


                        </div> <!-- end col -->

                        <div class="col-md-5 text-center">

                        <p class="display-4 text-center text-success success-message ">

                        </p>
                    </div>


                        <!-- end row -->



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





            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            };


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

            setTimeout(function(){
                my_account()
            }, 1000)



            $("#my_account").change(function() {
                var my_account = $(this).val()

                    my_account_info = my_account.split("~")
                    // set summary values for display
                    $(".display_my_account_type").text(my_account_info[0].trim())
                    $(".display_my_account_name").text(my_account_info[1].trim())
                    $(".display_my_account_no").text(my_account_info[2].trim())
                    $(".display_my_account_currency").text(my_account_info[3].trim())

                    $(".display_currency").text(my_account_info[3].trim()) // set summary currency

                    $(".display_my_account_amount").text(formatToCurrency(Number(my_account_info[4]
                        .trim())))

                        console.log

                    $(".my_account_display_info").show()

            });


                $("#cheque_no_to").keyup(function() {
                    var cheque_no_to = $('#cheque_no_to').val()


                    if (cheque_no_to.trim() == '' ) {
                         toaster("Please cheque number can not be empty", "error", 6000);
                        $(this).val('')
                        return false;
                    } else {
                        $(".display_cheque_no_to").text(cheque_no_to);
                    }

                });


                $("#cheque_no_from").keyup(function() {
                    var cheque_no_from = $('#cheque_no_from').val()


                    if (cheque_no_from.trim() == '' ) {
                        toaster("Please cheque number can not be empty", "error", 6000);
                        $(this).val('')
                        return false;
                    } else {
                        $(".display_cheque_no_from").text(cheque_no_from);
                    }

                });


                $("#amount").keyup(function() {
                    var amount = $('#amount').val()
                    var my_account = $('#my_account').val()
                    console.log(amount)


                    {{-- if (my_account.trim() == '' ) {
                        toaster("Please select source accounts", "error", 6000);
                        $(this).val('')
                        return false;
                    } else {
                        $(".display_amount").text(formatToCurrency(Number(amount)));
                    } --}}

                    //delete after use
                      $(".display_amount").text(formatToCurrency(Number(amount)));

                });



            $("#date_issued").change(function() {
                $('.display_date_issued').text("")
                var date_issued = $(this).val()
                if(date_issued != ""){
                    console.log(date_issued)
                    $('.display_date_issued').text("Date Issued:   " + date_issued)
                }
            })

            $("#submit_cheque_request").click(function(){

                //MY ACCOUNT
                let my_account = $('#my_account').val()

                //date_issued
                let date_issued = $('#date_issued').val()
                //cheque_no_from
                let cheque_no_from = $('#cheque_no_from').val()
                //cheque_no_to
                let cheque_no_to = $('#cheque_no_to').val()

                let amount = $('#amount').val()

                //delete after use
                amount = '67.0'

                let pin = $('#pin').val()

                console.log(my_account)
                console.log(cheque_no_from)
                console.log(cheque_no_to)
                console.log(date_issued)
                console.log(amount)
                console.log(pin)


                {{-- if(cheque_no_to == "" || cheque_no_from == "" || my_account == "" || date_issued == "" || amount == "" || pin == ""){ --}}
                if(cheque_no_to == "" || cheque_no_from == "" || date_issued == "" || amount == "" || pin == ""){
                    toaster("Please fill all required fieilds", "error", 6000);
                }else{

                    {{-- my_account_info = my_account.split("~")
                let accountNumber = my_account_info[2].trim() --}}

                let accountNumber = '67890-09876';


                    $.ajax({

                        'type' : 'POST',
                        'url' : 'submit-stop-cheque-book-request',
                        "datatype" : "application/json",
                        'data' : {
                            'accountNumber' : accountNumber.trim() ,
                            'cheque_no_from' : cheque_no_from.trim() ,
                            'cheque_no_to' : cheque_no_to.trim(),
                            'date_issued' : date_issued.trim() ,
                            'amount' : amount.trim() ,
                            'pinCode' : pin.trim()
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:
                        function(response){

                             console.log(response)

                            if(response.responseCode == '000'){
                                toaster(response.message, 'success', 200000 )
                                $("#request_form_div").hide()
                                $(".disappear-after-success").hide()
                                $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />')

                                $("#request_detail_div").show()


                            }else{

                                toaster(response.message, 'error', 9000 );


                        }
                    }

                    })


                }
            })


        });

    </script>
@endsection





{{--


@extends('layouts.master')

@section('content')

<div> <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card" >

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color">
                                Stop Cheque

                            </p>
                            <hr>

                            <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                    @csrf
                                 <div class="row" id="transaction_form">

                                    <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="h6">Status*</label>
                                                <input type="text" class="form-control" placeholder="Amount" style="color:red"value="NEW REQUEST" disabled/>
                                            </div>

                                            <div class="form-group">
                                                <label class="h6">Select Account</label>
                                                <select class="custom-select " id="from_account" required>
                                                    <option value="">-----Select Account-----</option>
                                                    <option value="CA - PERSONAL ~kwabeane Ampah~001023468976001~GHS~2000">
                                                        Current Account ~ 001023468976001 </option>
                                                </select>


                                                <table
                                                    class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info">
                                                    <tbody class="text-primary">
                                                        <tr class="text-primary">

                                                            <td class="text-primary">
                                                                <a class="text-body font-weight-semibold display_from_account_name text-primary"></a>
                                                                <small class="d-block display_from_account_no text-primary"></small>
                                                            </td>

                                                            <td class="text-right font-weight-semibold text-primary">
                                                                <span class="display_from_account_currency text-primary"></span>
                                                                <span class="display_from_account_amount text-primary"></span>

                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>


                                            </div>

                                            <div class="form-group">
                                                <label>From Cheque No:<b style="color:red">*</b></label>
                                                <input type="text" class="form-control"/>
                                            </div>

                                            <div class="form-group">
                                                <label>To Cheque No:<b style="color:red">*</b></label>
                                                <input type="text" class="form-control"/>
                                            </div>

                                    </div> <!-- end col -->



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date issued:<b style="color:red">*</b></label>
                                            <input type="date" class="form-control"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Beneficiary Name:<b style="color:red">*</b></label>
                                            <input type="text" class="form-control"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Amount on Cheque:<b style="color:red">*</b></label>
                                            <input type="number" class="form-control"/>
                                        </div>



                                        <div class="form-group text-right">
                                            <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                &nbsp; PROCEED &nbsp;</button>
                                        </div>

                                    </div> <!-- end col -->

                               </div>
                               <!-- end row -->

                            </form>

                            <div class="row" id="transaction_summary">


                                <div class="col-md-12">
                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                        <div class="table-responsive">
                                            <table class="table mb-0">

                                                <tbody>
                                                    <tr>
                                                        <td>From Account:</td>
                                                        <td>
                                                            <span
                                                                class="font-13 text-primary text-bold display_from_account_type"
                                                                id="display_from_account_type"></span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_from_account_name"
                                                                id="display_from_account_name"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_from_account_no"
                                                                id="display_from_account_no"></span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>To Account:</td>
                                                        <td>

                                                            <span
                                                                class="font-13 text-primary text-bold display_to_account_type"
                                                                id="display_to_account_type"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="display_to_account_name"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>


                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="online_display_beneficiary_alias_name"> Daniel Hammond</span>

                                                            <span class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                                                id="">0000333030303 </span>
                                                                &nbsp; | &nbsp;
                                                            <span class="font-13 text-primary h3 online_display_beneficiary_account_currency" id=""> GHS
                                                            </span>

                                                            <span
                                                            class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                            id="online_display_beneficiary_email">dan@gmail.com</span>

                                                            <span
                                                            class="d-block font-13 text-primary text-bold online_display_beneficiary_phone"
                                                            id="online_display_beneficiary_phone">0554602954</span>


                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Amount:</td>
                                                        <td>
                                                            <span class="font-15 text-primary h3 display_currency"
                                                                id="display_currency"> </span>
                                                            &nbsp;
                                                            <span class="font-15 text-primary h3 display_transfer_amount"
                                                                id="display_transfer_amount"></span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Category:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_category"
                                                                id="display_category"></span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Purpose:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_purpose"
                                                                id="display_purpose"></span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Schedule Payment:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_schedule_payment"
                                                                id="display_schedule_payment">NO </span>
                                                                &nbsp; | &nbsp;
                                                            <span class="font-13 text-primary h3 display_schedule_payment_date" id="display_schedule_payment_date"> N/A
                                                            </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Transfer Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_transfer_date">{{  date('d F, Y') }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Posted BY: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_posted_by">Kwabena Ampah</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Enter Pin: </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="user_pin" class="form-control"
                                                                    id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                        <br>
                                        <div class="form-group text-center">

                                            <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                    id="back_button">Back</button> &nbsp; </span>
                                            <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                    id="confirm_button">Confirm Transfer </button></span>
                                            <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                    id="confirm_button">Print Receipt </button></span>
                                        </div>
                                    </div>

                                </div> <!-- end col -->





                            </div>



                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->






                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    @endsection --}}
