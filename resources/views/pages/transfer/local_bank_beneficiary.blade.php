@extends('layouts.master')

@section('content')


<div class="container-fluid">
    <br>
    <!-- start page title -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-primary">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                OTHER LOCAL BANK BENEFICIARY

            </h4>
        </div>

        <div class="col-md-6 text-right">
            <h6>

                <span class="flaot-right">
                    <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-primary"> Add Beneficiary </b> &nbsp; > &nbsp; <b class="text-danger">Other Local Bank Beneficiary</b>


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
            <div class="">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-10 m-2"
                            style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">


                            <br><br><br>
                            <div class="row m-2" id="transaction_form">


                                <div class="col-md-6">

                                    <form action="#" id="local_bank_beneficiary_details" autocomplete="off"
                                        aria-autocomplete="off">

                                        <h4 class="text-primary"> Bank Details</h4>
                                        <hr>


                                        <div class="form-group row">
                                            <b class="col-4 text-primary">Select Bank &nbsp;<span class="text-danger">*</span></b>
                                            <div class="col-7">
                                                <select class="custom-select " id="select_bank" required>
                                                    <option value="">Select Bank</option>

                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <b class="col-4 text-primary">Bank Swift Code &nbsp;<span class="text-danger">*</span></b>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="swift_code"
                                                    placeholder="Bank Swift Code" required>
                                            </div>

                                        </div>

                                        <h4 class="text-primary"> Account Details</h4>
                                        <hr>


                                        <div class="form-group row">
                                            <b class="col-4 text-primary">Account Number &nbsp;<span class="text-danger">*</span></b>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="account_number"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                    placeholder="Account Number" required>
                                            </div>

                                            {{-- <span class="text-danger" id="account_number_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-4 text-primary">Account Name &nbsp; <span class="text-danger">*</span></label>
                                            <div class="col-7">
                                                <input type="text" class="form-control" id="account_name"
                                                    placeholder="Account Name" required>
                                            </div>

                                            {{-- <span class="text-danger" id="account_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                        </div>
                                        <div class="form-group row">
                                            <b class="col-4 text-primary">Account Currency &nbsp; <span class="text-danger">*</span></b>
                                            <div class="col-7">
                                                <select class="custom-select" id="select_currency" required>
                                                    <option value="">Select Currency</option>

                                                </select>
                                            </div>

                                        </div>

                                        <br>
                                </div>
                                <div class="col-md-6">

                                    <h4 class="text-primary"> Beneficiary Details</h4>
                                    <hr>

                                    <div class="form-group row">
                                        <b class="col-4 text-primary"> Name &nbsp;<span class="text-danger">*</span></b>
                                        <div class="col-7">
                                            <input type="text" class="form-control" id="beneficiary_name"
                                                placeholder="Beneficiary Name" required>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4 text-primary"> Address &nbsp; <span class="text-danger">*</span></label>
                                        <div class="col-7">
                                            <input type="text" class="form-control" id="beneficiary_address"
                                                placeholder="Beneficiary Address" required>
                                        </div>

                                    </div>
                                    {{--  <div class="form-group row">
                                        <label class="col-4"> Phone : <span class="text-danger">*</span></label>
                                        <div class="col-7">
                                            <input type="number" class="form-control" id="beneficiary_number"
                                                placeholder="Beneficiary Phone Number" required>
                                        </div>

                                    </div>  --}}

                                    <div class="form-group row">
                                        <label class="col-4 text-primary"> Email &nbsp; <span class="text-danger">*</span></label>
                                        <div class="col-7">
                                            <input type="email" class="form-control" id="beneficiary_email"
                                                placeholder="Beneficiary Email" required>
                                        </div>

                                    </div>

                                    <div class="form-group">

                                    </div>

                                    <div class="form-group">

                                        <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                            <input id="checkbox2" type="checkbox">
                                            <label class="custom-control-label" for="checkbox2">
                                                Email beneficiary when a transfer is made
                                            </label>
                                        </div>

                                    </div>

                                    <p class="sub-header font-13">
                                        Providing beneficiary email and checking
                                        the box, enables us to send an alert mail to
                                        the beneficiary each time a transfer is made
                                    </p>


                                    <div class="form-group error_div">
                                        <div class="alert alert-warning" role="alert">
                                            <i class="mdi mdi-alert-outline mr-2"></i> <strong>warning</strong>
                                            <span class="error_message"></span>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-rounded waves-effect waves-light float-right" type="submit"
                                        id="save_beneficiary_next">&nbsp; Next &nbsp;<i class="fe-arrow-right"></i> </button>
                                    </form>


                                    <form action="#" method="POST" id="local_bank_beneficiary_summary" autocomplete="off"
                                        aria-autocomplete="off">
                                        <div class="card-box">
                                            @csrf
                                            <div class="form-group">
                                                <label class="purple-color"> Bank Details Summary</label>
                                            </div>
                                            <div class="form-group">
                                                <label> Select Bank:&emsp;</label>
                                                <span class="font-weight-light mr-2" id="display_selected_bank">
                                                    &nbsp</span>
                                            </div>
                                            <br>
                                            {{-- <label class="purple-color">  Account Details</label> --}}
                                            <div class="form-group">
                                                <label>Account Number:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_number"> &nbsp</span>
                                                {{-- <input type="number" class="form-control" id="account_number" placeholder="Account Number" required> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Account Name:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_name"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_name" placeholder="Account Name"> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Account Currency:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_currency"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_name" placeholder="Account Name"> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Bank Swift Code:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_swift_code"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_name" placeholder="Account Name"> --}}


                                            </div>

                                            <br>


                                            {{-- <label class="purple-color"> Personal Details</label> --}}
                                            <div class="form-group">
                                                <label>Beneficiary Name:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_beneficiary_name"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name"> --}}


                                            </div>

                                            <div class="form-group">
                                                <label>Beneficiary Address:&emsp;</label><span
                                                    class="font-weight-light mr-2" id="display_beneficiary_address">
                                                    &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name"> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Phone Number:&emsp;</label><span
                                                    class="font-weight-light mr-2" id="display_beneficiary_phone">
                                                    &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name"> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Email:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_beneficiary_email"> &nbsp</span>
                                                {{-- <input type="email" class="form-control" id="beneficiary_email" placeholder="Beneficiary Name"> --}}


                                            </div>

                                            <div class="form-group">

                                            </div><br>

                                            <div class="form-group">

                                                <div class="">
                                                    {{-- <input id="checkbox2" type="checkbox"> --}}
                                                    <label>Email beneficiary when a transfer is made:&emsp;</label><span
                                                        class="font-weight-light mr-2" id="display_transfer_email">
                                                        &nbsp</span>

                                                </div>

                                            </div>


                                            <button type="submit"
                                                class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                id="save_beneficiary_back">Back</button>&emsp;&emsp;

                                            <button class="btn btn-primary btn-rounded waves-effect waves-light"
                                                type="submit" id="save_beneficiary">Save Beneficiary</button>
                                        </div>
                                    </form>



                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

                        </div>

                        <div class="col-md-1"></div>

                    </div> <!-- end card-body -->


                    <!-- Modal -->
                    <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                                    <div class="modal-header">
                                        <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                            Details</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>

                                    <div class="modal-body">

                                        From: <span class="font-13 text-primary" id="display_from_account"> &nbsp
                                        </span><br><br>
                                        To: <span class="font-13 text-muted" id="display_to_account"> &nbsp </span><br><br>
                                        Schedule Payments: <span class="font-13 text-muted" id="display_payments"> &nbsp
                                        </span><br><br>
                                        Amount: <span class="font-13 text-muted" id="display_amount"> &nbsp </span><br><br>
                                        Naration: <span class="font-13 text-muted" id="display_naration"> &nbsp
                                        </span><br><br>
                                        Transaction fee: <span class="font-13 text-muted" id="display_trasaction_fee">
                                        </span><br><br>
                                        Total: <span class="font-13 text-muted" id="display_total"> &nbsp </span><br><br>

                                        <div class="form-group">
                                            <label class="font-16 purple-color">Enter Pin</label>
                                            <input type="text" class="form-control" id="pin" data-toggle="input-mask"
                                                placeholder="enter pin" required
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                        </div>

                                    </div>



                                    <div class="modal-footer">
                                        <button type="send" id="send" class="btn btn-primary" data-target="#multiple-two"
                                            data-toggle="modal" data-dismiss="modal">Send</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->




                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            function bank_list() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-bank-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#select_bank').append($('<option>', {
                                value: data[index].bankCode + '~' + data[index].bankDescription
                            }).text(data[index].bankDescription));

                        });

                    },

                })
            };

            function get_currency() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-currency-list-api',
                    "datatype": "application/json",
                    success: function(response) {
                        {{-- console.log(response.data); --}}
                        let data = response.data
                        $.each(data, function(index) {

                            $('#select_currency').append($('<option>', {
                                value: data[index].currCode + '~' + data[index].isoCode + '~' + data[index].description
                            }).text(data[index].isoCode + '~' + data[index].description));

                        });

                    },

                })
            };


            function validate_account_number(account_no) {
                $.ajax({
                    "type": "POST",
                    "url": "validate-account-no",
                    "datatype": "application/json",
                    "data": {
                        "authToken": "string",
                        "accountNumber": account_no
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function(response) {

                        console.log(response.responseCode)
                        console.log(response.data.flag)
                        if (response.responseCode == "000" && response.data.flag == 'Y') {
                            console.log(response.data)
                            toaster("valid account number entered", 'success', 10000);
                            $('.error_div').hide()

                            {{--  $('#save_beneficiary_next').show()  --}}

                        } else {
                            toaster("Invalid account number entered", 'error', 10000);
                            $('.error_message').text("Invalid account number entered")
                            $('.error_div').show()

                            $('#account_name').val('')
                            $('#select_currency_i').val('')
                            $('#select_currency').val('')
                            {{--  $('#save_beneficiary_next').hide()  --}}
                            {{--  return false  --}}

                        }
                    }

                })
            };


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
            };



            {{-- var bene_id = @json($bene_id);
            console.log(bene_id);

            function get_beneficiary_details(){
                $.ajax({
                    'type' : 'POST',
                    "datatype": "application/json",
                    'url' : 'edit-local-bank-api',
                    'data' : {
                        'bene_id' : bene_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:
                    function(response){
                        console.log(response);
                        if(response.responseCode == '000'){

                        let beneficiary_details = response.data;
                        console.log(beneficiary_details)
                        }
                    }
                })
            }; --}}

            $(document).ready(function() {

                {{--  $('#save_beneficiary_next').hide()  --}}
                $('.error_div').hide()

                setTimeout(function() {
                    get_currency();
                    bank_list();
                }, 2000);

                $('#local_bank_beneficiary_summary').hide();
                $('#select_bank_error').hide();
                $('#account_number_error').hide();
                $('#account_name_error').hide();
                $('#beneficiary_name_error').hide();
                $('#beneficiary_email_error').hide();

                $("#select_bank").change(function(){
                    var bank_name = $(this).val().split("~");
                    console.log(bank_name);
                })

                $("#select_currency").change(function(){
                    var currency = $(this).val().split("~");
                    console.log(currency);

                })

                $("#account_number").keyup(function() {
                    let account_no = $(this).val();
                    if (account_no.length > 10) {
                        validate_account_number(account_no)
                    }


                })


                $('#local_bank_beneficiary_details').submit(function(e) {
                    e.preventDefault();

                    var select_bank = $('#select_bank').val();
                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name = $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    var currency = $('#select_currency').val().split('~');
                    var swift_code = $('#swift_code').val();
                    var beneficiary_address = $('#beneficiary_address').val();
                    var beneficiary_phone = $('#beneficiary_number').val();

                    var select_bank = $('#select_bank').val().split("~");
                    $('#display_selected_bank').text(select_bank[1]);

                    var account_number = $('#account_number').val();
                    $('#display_account_number').text(account_number);

                    var account_name = $('#account_name').val();
                    $('#display_account_name').text(account_name);

                    var beneficiary_name = $('#beneficiary_name').val();
                    $('#display_beneficiary_name').text(beneficiary_name);

                    var beneficiary_email = $('#beneficiary_email').val();
                    $('#display_beneficiary_email').text(beneficiary_email);

                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    {{-- console.log(transfer_email); --}}
                    if (transfer_email == 'on') {
                        $('#display_transfer_email').text('Yes');
                    } else {
                        $('#display_transfer_email').text('No');
                    };

                    var currency = $('#select_currency').val().split('~');
                    var currency_ = currency[1];
                    $('#display_account_currency').text(currency_);

                    var swift_code = $('#swift_code').val();
                    $('#display_swift_code').text(swift_code);

                    var beneficiary_address = $('#beneficiary_address').val();
                    $('#display_beneficiary_address').text(beneficiary_address);

                    var beneficiary_phone = $('#beneficiary_number').val();
                    $('#display_beneficiary_phone').text(beneficiary_phone);

                    if (select_bank.trim() != '' && account_number.trim() != '' && account_name.trim() !=
                        '' && beneficiary_name.trim() != '') {
                        $('#local_bank_beneficiary_details').hide();
                        $("#local_bank_beneficiary_summary").toggle('500');

                    }


                })

                // GO BACK TO ENTER BENEFICIARY FORM
                $('#save_beneficiary_back').click(function(e) {
                    e.preventDefault();

                    $('#local_bank_beneficiary_summary').hide();
                    $('#local_bank_beneficiary_details').toggle('500');

                })


                // SEND TO API
                $('#local_bank_beneficiary_summary').submit(function(e) {
                    e.preventDefault();


                    var select_bank_ = $('#select_bank').val().split('~');
                    var select_bank = select_bank_[1];
                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name = $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var send_email = $("#transfer_email input[type='checkbox']:checked").val();
                    {{-- console.log(send_email); --}}
                    if (send_email == 'on') {
                        var transfer_email = ('Yes');
                    } else {
                        var transfer_email = ('No');
                    }
                    var currency = $('#select_currency').val().split('~');
                    var currency_ = currency[1];
                    var beneficiary_number = $('#beneficiary_number').val();
                    var beneficiary_address = $('#beneficiary_address').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var swift_code = $('#swift_code').val();
                    {{-- console.log(currency); --}}

                    {{-- console.log(select_bank)
                    return false; --}}

                    $.ajax({
                        'type': 'POST',
                        'url': 'add-local-bank-beneficiary-api',
                        "datatype": "application/json",
                        'data': {
                            'bank_name': select_bank,
                            'account_number': account_number,
                            'account_name': account_name,
                            'beneficiary_name': beneficiary_name,
                            'beneficiary_email': beneficiary_email,
                            'send_mail': transfer_email,
                            "account_currency": currency_,
                            "number": beneficiary_number,
                            "beneficiary_address": beneficiary_address,
                            "bank_swift_code": swift_code
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {

                            console.log(response.responseCode);
                            if (response.responseCode == "000") {
                                toaster(response.message, 'success', 10000);

                            } else {
                                toaster(response.message, 'error', 10000);

                            }
                        }

                    })
                })

            });

        </script>
    @endsection
