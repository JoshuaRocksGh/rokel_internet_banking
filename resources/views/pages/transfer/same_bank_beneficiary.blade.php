@extends('layouts.master')

@section('content')

<div ></div>   <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body card-background-image">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color" style="cursor: pointer;" onclick="window.history.back()">
                                <i class="fe-arrow-left"></i>  SAME BANK BENEFICIARY
                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7">

                                    <form action="#" id="same_bank_beneficiary_form">
                                        {{-- @csrf --}}
                                        <div class="form-group">
                                            <label class="purple-color"> Beneficiary Account Details</label><br>
                                            <label >Account Number</label>
                                            <input class="form-control" type="number" class="form-control" id="account_number" placeholder="Account Number" required>
                                            <span class="text-danger" id="account_number_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>


                                        </div>
                                        <div class="form-group">
                                            <label >Account Name</label>
                                            <input type="text" class="form-control" id="account_name" parsley-trigger="change"  placeholder="Account Name" required>
                                            <span class="text-danger" id="account_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                        </div><br>
                                        <div class="form-group">
                                            <label class="purple-color">Beneficiary Personal Details</label><br>
                                            <label >Beneficiary Name</label>
                                            <input type="text" class="form-control" id="beneficiary_name" parsley-trigger="change" placeholder="Beneficiary Name" required>
                                            <span class="text-danger" id="beneficiary_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                        </div>
                                        <div class="form-group">
                                            <label >Beneficiary Email</label>
                                            <input type="email" class="form-control" id="beneficiary_email" parsley-trigger="change" placeholder="Beneficiary Email" required>
                                            <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                        </div><br>


                                        <div class="form-group">

                                            <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                                <input id="checkbox2" type="checkbox">
                                                <label for="checkbox2">
                                                    Email beneficiary when a transfer is made
                                                </label>
                                            </div>

                                        </div>

                                        <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking

                                        </p>

                                        <button class="btn btn-primary waves-effect waves-light btn-rounded" type="submit" id="save_beneficiary" >Next</button>
                                        {{-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#centermodal" id="center_modal">Center modal</button> --}}

                                    </form>


                                    <form action="#" method="POST" id="same_bank_beneficiary_form_summary">
                                        <div class="card-box">
                                        @csrf

                                        <div class="form-group">
                                            {{--  <label class="purple-color"> Beneficiary Account Summary</label><br>  --}}
                                            <label >Account Number:&emsp;</label><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span><br>
                                            {{-- <input type="text" class="form-control" id="account_number" data-toggle="input-mask" data-mask-format="" placeholder="Account Number" required> --}}
                                        </div>
                                        <div class="form-group">
                                            <label >Account Name:&emsp;</label><span class="font-weight-light mr-2" id="display_account_name"> &nbsp</span><br>
                                            {{-- <input type="text" class="form-control" id="account_name" data-toggle="input-mask" data-mask-format="00:00:00" placeholder="Account Name" required> --}}
                                        </div>
                                        <div class="form-group">
                                            {{--  <label class="purple-color">Beneficiary Personal Details</label><br>  --}} <br>
                                            <label >Beneficiary Name:&emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_name"> &nbsp</span><br>

                                            {{-- <input type="text" class="form-control" id="beneficiary_name" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00" placeholder="Beneficiary Name" required> --}}

                                        </div>
                                        <div class="form-group">
                                            <label >Beneficiary Email:&emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_email"> &nbsp</span><br>

                                            {{-- <input type="text" class="form-control" id="beneficiary_email" data-toggle="input-mask" data-mask-format="00000-000" placeholder="Beneficiary Email" required> --}}

                                        </div><br>


                                        <div class="form-group">

                                            <div class="">
                                                {{-- <input id="checkbox2" type="checkbox"> --}}
                                                <label>Email beneficiary when a transfer is made:&emsp;</label><span class="font-weight-light mr-2" id="display_transfer_email"> &nbsp</span>


                                            </div>

                                        </div>

                                        {{-- <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking

                                        </p> --}}

                                        <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"  id="save_beneficiary_back">Back</button>&emsp;&emsp;
                                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="save_beneficiary_summary" >Save Beneficiary</button>

                                    </div>

                                    </form>

                                </div> <!-- end col -->



                                <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/send.png') }}" class="img-fluid" alt="" >
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>


                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->


                    <!-- Modal -->
                    {{--  <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="POST" id="confirm_details">
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
                    </div>  --}}
                    <!-- /.modal -->


                    {{--  <!-- Center modal content -->
                    <div class="modal fade " id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myCenterModalLabel">Summary</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">

                                    <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px">Account Number:&emsp;<span class="font-weight-semibold mr-2" id="display_account_number"> &nbsp</span></span></p>
                                    <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px">Account Name:&emsp;<span class="font-weight-semibold mr-2" id="display_account_name"> &nbsp</span></span></p>
                                    <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px">Beneficiary Name:&emsp;<span class="font-weight-semibold mr-2" id="display_beneficiary_name"> &nbsp</span></span></p>
                                    <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px">Beneficairy Email:&emsp;<span class="font-weight-semibold mr-2" id="display_beneficiary_email"> &nbsp</span></span></p>
                                    <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px">Email Beneficiary:&emsp;<span class="font-weight-semibold mr-2" id="display_transfer_email"> &nbsp</span></span></p>
                                </div>
                                <div>
                                    <button class="btn btn-secondary btn-rounded center_modal" type="button" id="save_beneficiary" style="align-items: center">Back</button>&emsp;
                                    <button class="btn btn-primary btn-rounded center_modal" type="button" id="save_beneficiary" style="align-items: center">Submit</button>

                                </div>
                            </div><!-- /.modal-content -->

                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
  --}}


                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
             $(document).ready(function() {

                $('#same_bank_beneficiary_form_summary').hide();
                $('#account_number_error').hide();
                $('#account_name_error').hide();
                $('#beneficiary_name_error').hide();
                $('#beneficiary_email_error').hide();

                $('#same_bank_beneficiary_form').submit(function(e){
                e.preventDefault();


                var account_number = $('#account_number').val();
                var account_name = $('#account_name').val();
                var beneficiary_name = $('#beneficiary_name').val();
                var beneficiary_email = $('#beneficiary_email').val();
                var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();

                var account_number = $('#account_number').val();
                $('#display_account_number').text(account_number);

                var account_name = $('#account_name').val();
                $('#display_account_name').text(account_name)

                var beneficiary_name = $('#beneficiary_name').val();
                $('#display_beneficiary_name').text(beneficiary_name);

                var beneficiary_email = $('#beneficiary_email').val();
                $('#display_beneficiary_email').text(beneficiary_email);

                var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                if (transfer_email == 'on'){
                   $('#display_transfer_email').text('Yes');
                }else {
                   $('#display_transfer_email').text('No');
                }



{{--
                if(account_number.trim() == '' || account_number.trim() == undefined){
                    $('#account_number_error').show();

                }else{
                $('#account_number_error').hide();
                }

                if(account_name.trim() == '' || account_name.trim() == undefined){
                    $('#account_name_error').show();

                }else{
                $('#account_name_error').hide();
                }

                if(beneficiary_name.trim() == '' || beneficiary_name.trim() == undefined){
                    $('#beneficiary_name_error').show();

                }else{
                $('#beneficiary_name_error').hide();
                }

                if(beneficiary_email.trim() == ''){
                    $('#beneficiary_email_error').show();

                }else{
                    $('#beneficiary_email_error').hide();
                }  --}}



{{--
                if(account_number.trim() == '' || account_number.trim() = 'undefined'){
                    $('#error').show();
                } --}}

                if(account_number.trim() != '' && account_name.trim() != '' && beneficiary_name.trim() != '' && beneficiary_email.trim() != '' ){
                    $('#same_bank_beneficiary_form').hide();
                    $("#same_bank_beneficiary_form_summary" ).toggle( '500' );

                }

                })


                $('#save_beneficiary_back').click(function(e){
                    e.preventDefault(e);

                    $("#same_bank_beneficiary_form" ).toggle( '500' );
                    $('#same_bank_beneficiary_form_summary').hide();

                })


                $('#save_beneficiary_summary').click(function(e){
                    e.preventDefault();
                     var account_number = $('#account_number').val();
                     var account_name = $('#account_name').val();
                     var beneficiary_name = $('#beneficiary_name').val();
                     var beneficiary_email = $('#beneficiary_email').val();
                     var send_email = $("#transfer_email input[type='checkbox']:checked").val();
                    if(send_email){
                        var transfer_email = ('Yes');
                    }else{
                        var transfer_email = ('No');
                    }
/*
                    console.log(account_number);
                    console.log(account_name);
                    console.log(beneficiary_name);
                    console.log(beneficiary_email);
                    console.log(transfer_email); */


                $.ajax({
                    "type" : "POST",
                    "url" : "same-bank-beneficiary",
                    "datatype" : "application/json",
                    "data" : {
                        "account_number" : account_number ,
                        "account_name" : account_name ,
                        "beneficiary_name" : beneficiary_name,
                        "beneficairy_email" : beneficiary_email,
                        "send_mail" : transfer_email,

                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success:
                    function(response){

                        {{--  console.log(response.responseCode)  --}}
                        if(response.responseCode == "000"){
                            Swal.fire(
                                'Beneficiary Successfully Added',
                                '',
                                'success'
                              )
                        }else{
                            Swal.fire(
                                'Failed to Add Beneficiary',
                                '',
                                'error'
                              )
                    }
                }

                })

                });

            });

        </script>
    @endsection






