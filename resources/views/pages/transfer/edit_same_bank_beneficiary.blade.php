@extends('layouts.master')

@section('content')

    <div></div>
    <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body card-background-image">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color" style="cursor: pointer;"
                                onclick="window.history.back()">
                                <i class="fe-arrow-left"></i> MANAGE SAME BANK BENEFICIARY
                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-12">
                                    <form action="#" id="same_bank_beneficiary_form" autocomplete="off"
                                    aria-autocomplete="off">
                                    {{-- @csrf --}}
                                    <div class="row">




                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {{-- <label class="purple-color"> Beneficiary Account Details</label><br> --}}
                                                <label>Account Number</label>
                                                <input class="form-control" type="number" class="form-control"
                                                    id="account_number" placeholder="Account Number" required>
                                                {{-- <span class="text-danger" id="account_number_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}


                                            </div>
                                            <div class="form-group">
                                                <label>Account Name</label>
                                                <input type="text" class="form-control" id="account_name"
                                                    parsley-trigger="change" placeholder="Account Name" readonly required>
                                                {{-- <span class="text-danger" id="account_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Account Currency</label>
                                                <input type="hidden" class="form-control" readonly value="" id="select_currency">
                                                <input type="text" class="form-control" readonly value="" id="select_currency_i">

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                {{-- <label class="purple-color">Beneficiary Personal Details</label><br> --}}
                                                <label>Beneficiary Name</label>
                                                <input type="text" class="form-control" id="beneficiary_name"
                                                    parsley-trigger="change" placeholder="Beneficiary Name" required>
                                                {{-- <span class="text-danger" id="beneficiary_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Mobile Number</label>
                                                <input type="number" class="form-control" id="beneficiary_mobile_number"
                                                    parsley-trigger="change" placeholder="Beneficiary Mobile Number" required>
                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Address</label>
                                                <input type="text" class="form-control" id="beneficiary_address"
                                                    parsley-trigger="change" placeholder="Beneficiary Address" required>
                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Email</label>
                                                <input type="email" class="form-control" id="beneficiary_email"
                                                    parsley-trigger="change" placeholder="Beneficiary Email" required>
                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                            </div>




                                            <div class="form-group">

                                                <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2">
                                                        Email beneficiary when a transfer is made
                                                    </label>
                                                </div>

                                            </div>

                                            <p class="sub-header font-13">
                                                Providing beneficairy email and checking

                                            </p>

                                            <button class="btn btn-primary waves-effect waves-light btn-rounded" type="submit"
                                                id="save_beneficiary">Next</button>
                                            {{-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#centermodal" id="center_modal">Center modal</button> --}}


                                        </div>

                                        <br>



                                    </div>

                                </form>




                                    <form action="#" method="POST" id="same_bank_beneficiary_form_summary"
                                        autocomplete="off" aria-autocomplete="off">
                                        <div class="card-box">
                                            @csrf

                                            <div class="form-group">
                                                {{-- <label class="purple-color"> Beneficiary Account Summary</label><br> --}}
                                                <label>Account Number:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_number"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_number" data-toggle="input-mask" data-mask-format="" placeholder="Account Number" required> --}}
                                            </div>
                                            <div class="form-group">
                                                <label>Account Name:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_name"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_name" data-toggle="input-mask" data-mask-format="00:00:00" placeholder="Account Name" required> --}}
                                            </div>
                                            <div class="form-group">
                                                <label>Account currency:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_account_currency"> &nbsp</span>
                                                {{-- <input type="text" class="form-control" id="account_name" data-toggle="input-mask" data-mask-format="00:00:00" placeholder="Account Name" required> --}}
                                            </div>
                                            <div class="form-group">
                                                {{-- <label class="purple-color">Beneficiary Personal Details</label><br> --}} <br>
                                                <label>Beneficiary Name:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_beneficiary_name"> &nbsp</span>

                                                {{-- <input type="text" class="form-control" id="beneficiary_name" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00" placeholder="Beneficiary Name" required> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Mobile Number:&emsp;</label><span
                                                    class="font-weight-light mr-2" id="display_beneficiary_mobile_number">
                                                    &nbsp</span><br>

                                                {{-- <input type="text" class="form-control" id="beneficiary_email" data-toggle="input-mask" data-mask-format="00000-000" placeholder="Beneficiary Email" required> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Address:&emsp;</label><span
                                                    class="font-weight-light mr-2" id="display_beneficiary_Address">
                                                    &nbsp</span><br>

                                                {{-- <input type="text" class="form-control" id="beneficiary_email" data-toggle="input-mask" data-mask-format="00000-000" placeholder="Beneficiary Email" required> --}}

                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Email:&emsp;</label><span class="font-weight-light mr-2"
                                                    id="display_beneficiary_email"> &nbsp</span><br>

                                                {{-- <input type="text" class="form-control" id="beneficiary_email" data-toggle="input-mask" data-mask-format="00000-000" placeholder="Beneficiary Email" required> --}}

                                            </div>



                                            <div class="form-group">

                                                <div class="">
                                                    {{-- <input id="checkbox2" type="checkbox"> --}}
                                                    <label>Email beneficiary when a transfer is made:&emsp;</label><span
                                                        class="font-weight-light mr-2" id="display_transfer_email">
                                                        &nbsp</span>


                                                </div>

                                            </div>

                                            {{-- <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking

                                        </p> --}}

                                            <button type="submit"
                                                class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                id="save_beneficiary_back">Back</button>&emsp;&emsp;
                                            <button class="btn btn-primary btn-rounded waves-effect waves-light"
                                                type="submit" id="save_beneficiary_summary_btn"><span
                                                    id="confirm_save_beneficiary_text">Save Beneficiary</span>
                                                {{-- <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner" aria-hidden="true"></span>
                                            <span id="spinner-text">Loading...</span> --}}
                                            </button>

                                        </div>

                                    </form>

                                </div> <!-- end col -->





                                <!-- end row -->



                            </div>


                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->


                    <!-- /.modal -->



                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>


            var bene_id = @json($bene_id);
            var bene_type = @json($bene_type);
            {{--  console.log(bene_id);
            console.log(bene_type);  --}}

            function get_beneficiary_details(){
                $.ajax({
                    'type' : 'POST' ,
                    datatype: "application/json",
                    'url' : 'edit-same-bank-api',
                    'data' : {
                        'bene_id' : bene_id
                    },headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:
                    function(response){
                        {{--  console.log(response);  --}}

                        if(response.responseCode == '000'){
                            let beneficiary_details = response.data;
                            {{--  console.log(beneficiary_details);  --}}

                        $('#account_number').val(beneficiary_details[0].BEN_ACCOUNT);
                        $('#account_name').val(beneficiary_details[0].NICKNAME);
                        $('#select_currency_i').val(beneficiary_details[0].BEN_ACCOUNT_CURRENCY);
                        $('#beneficiary_name').val(beneficiary_details[0].NICKNAME);
                        $('#beneficiary_address').val(beneficiary_details[0].ADDRESS_1);
                        $('#beneficiary_email').val(beneficiary_details[0].EMAIL);
                        {{--  NICKNAME  --}}

                        $('#save_beneficiary').show('');
                        let account_no = $('#account_number').val(beneficiary_details[0].BEN_ACCOUNT);


                        }
                    }

                })
            }


            $(document).ready(function() {

                setTimeout(function(){
                    get_beneficiary_details();
                },2000);

                $('#save_beneficiary').hide('')

                $('#same_bank_beneficiary_form_summary').hide();
                $('#account_number_error').hide();
                $('#account_name_error').hide();
                $('#beneficiary_name_error').hide();
                $('#beneficiary_email_error').hide();
                {{-- $('#spinner').hide(),
                $('#spinner-text').hide(), --}}


                function toaster(message, icon) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 10000,
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

                function getAccountDescription(account_no) {
                    $.ajax({
                        "type": "POST",
                        "url": "get-account-description",
                        datatype: "application/json",
                        data: {
                            "authToken": "string",
                            "accountNumber": account_no
                          },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {

                            console.log(response.responseCode)
                            if (response.responseCode == "000") {
                                {{--  console.log(response.data)  --}}
                                toaster(response.message, 'success');
                                $('#account_name').val(response.data.accountDescription)
                                $('#select_currency_i').val(response.data.accountCurrencyDescription)
                                $('#select_currency').val(response.data.accountCurrencyCode  + '~' + response.data.accountCurrencyDescription)

                                $('#save_beneficiary').show('')

                            } else {
                                toaster(response.message, 'error');
                                $('#account_name').val('')
                                $('#select_currency_i').val('')
                                $('#select_currency').val('')
                                $('#save_beneficiary').hide('')


                            }
                        }

                    })
                };


                $("#account_number").keyup(function() {
                    let account_no = $(this).val();
                    if(account_no.length > 10){
                        getAccountDescription(account_no)
                    }


                })

                $('#same_bank_beneficiary_form').submit(function(e) {
                    e.preventDefault();


                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name = $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var beneficiary_number = $('#beneficiary_mobile_number').val();
                    var beneficiary_address = $('#beneficiary_address').val();
                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    var currency = $('#select_currency').val().split('~');
                    var currency_ = currency[1];
                    console.log(currency_);

                    var account_number = $('#account_number').val();
                    $('#display_account_number').text(account_number);

                    var account_name = $('#account_name').val();
                    $('#display_account_name').text(account_name);

                    var currency_ = currency[1];
                    $('#display_account_currency').text(currency);

                    var beneficiary_name = $('#beneficiary_name').val();
                    $('#display_beneficiary_name').text(beneficiary_name);

                    var beneficiary_email = $('#beneficiary_email').val();
                    $('#display_beneficiary_email').text(beneficiary_email);

                    var beneficiary_number = $('#beneficiary_mobile_number').val();
                    $('#display_beneficiary_mobile_number').text(beneficiary_number);

                    var beneficiary_address = $('#beneficiary_address').val();
                    $('#display_beneficiary_Address').text(beneficiary_address)

                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    if (transfer_email == 'on') {
                        $('#display_transfer_email').text('Yes');
                    } else {
                        $('#display_transfer_email').text('No');
                    }


                    if (account_number.trim() != '' && account_name.trim() != '' && beneficiary_name
                    .trim() != '' && beneficiary_email.trim() != '' && beneficiary_number.trim() != '' &&
                        beneficiary_address.trim() != '') {
                        $('#same_bank_beneficiary_form').hide();
                        $("#same_bank_beneficiary_form_summary").toggle('500');

                    }

                })


                $('#save_beneficiary_back').click(function(e) {
                    e.preventDefault(e);

                    $("#same_bank_beneficiary_form").toggle('500');
                    $('#same_bank_beneficiary_form_summary').hide();

                })


                $('#same_bank_beneficiary_form_summary').submit(function(e) {
                    e.preventDefault();
                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name = $('#beneficiary_name').val();
                    var currency = $('#select_currency').val().split('~');
                    var currency_ = currency[1];
                    {{--  console.log(currency);  --}}
                    var beneficiary_number = $('#beneficiary_mobile_number').val();
                    var beneficiary_address = $('#beneficiary_address').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var send_email = $("#transfer_email input[type='checkbox']:checked").val();
                    if (send_email == "on") {
                        var transfer_email = ('Y');
                    } else {
                        var transfer_email = ('N');
                    }

                    var bene_id = @json($bene_id);
                    var bene_type = @json($bene_type);

                    {{-- $('#spinner').show();
                    $('#spinner-text').show();
                    $('#confirm_save_beneficiary_text').hide();
                    $('#save_beneficiary_summary_btn').attr('disabled',true); --}}


                    function redirect_page(){
                        window.location.href = "{{ url('beneficiary-list') }}";

                    };

                    console.log(account_number);
                    console.log(beneficiary_name);
                    console.log(currency_);
                    console.log(beneficiary_number);
                    console.log(beneficiary_address);
                    console.log(beneficiary_email);
                    console.log(transfer_email);



                    $.ajax({
                        "type": "PUT",
                        "url": "edit-same-bank-beneficiary-api",
                        datatype: "application/json",
                        data: {
                            "account_number": account_number,
                            "account_name": account_name,
                            "account_currency": currency_,
                            "beneficiary_name": beneficiary_name,
                            "beneficiary_email": beneficiary_email,
                            "send_mail": transfer_email,
                            "number": beneficiary_number,
                            "beneficiary_address": beneficiary_address,
                            "beneID" : bene_id ,
                            "beneficiaryType" : bene_type
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(response) {

                            console.log(response.responseCode)
                            if (response.responseCode == "000") {
                                toaster(response.message, 'success');

                                setTimeout(function(){

                                    redirect_page();
                                },3000);

                                {{-- $('#spinner').hide();
                            $('#spinner-text').hide();

                            $('#confirm_save_beneficiary_text').show();
                            $('#save_beneficiary_summary_btn').attr('disabled',false); --}}

                            } else {
                                toaster(response.message, 'error');
                                {{-- $('#spinner').hide();
                            $('#spinner-text').hide();
                            $('#confirm_save_beneficiary_text').show();
                            $('#save_beneficiary_summary_btn').attr('disabled',false); --}}
                            }
                        }

                    })

                });

                {{--  var bene_id = @json($bene_id) ;
                console.log($bene_id) ;  --}}

            });

        </script>
    @endsection
