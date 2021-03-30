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
                                <i class="fe-arrow-left"></i>   OTHER LOCAL BANK BENEFICIARY
                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7">

                                    <form class="parsley-examples" action="#" id="local_bank_details">
                                        <div class="form-group">
                                            <label class="purple-color"> Bank Details</label>
                                         </div>
                                        <div class="form-group">
                                            <label> Select Bank</label>
                                            <select class="custom-select " id="select_bank" parsley-trigger="change" required>
                                                <option selected>Select Bank</option>
                                                <option value="Stanbic Bank">Stanbic Bank</option>
                                                <option value="GCB Bank">GCB Bank</option>
                                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                <option value="Zenith Bank">Zenith Bank</option>
                                                <option value="Cal Bank">Cal Bank</option>
                                                <option value="FNB Bank">FNB Bank</option>
                                            </select>
                                            <span class="text-danger" id="select_bank_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                        </div>
                                        <br>
                                        <label class="purple-color">  Account Details</label>
                                        <div class="form-group">
                                            <label>Account Number</label>
                                            <input type="number" class="form-control" id="account_number" placeholder="Account Number" parsley-trigger="change" required>
                                            <span class="text-danger" id="account_number_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Name</label>
                                            <input type="text" class="form-control" id="account_name" placeholder="Account Name" parsley-trigger="change" required>
                                            <span class="text-danger" id="account_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                         </div><br>


                                         <label class="purple-color"> Personal Details</label>
                                        <div class="form-group">
                                            <label>Beneficiary Name</label>
                                            <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name" parsley-trigger="change" required>
                                            <span class="text-danger" id="beneficiary_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                         </div>

                                         <div class="form-group">
                                            <label>Beneficiary Email</label>
                                            <input type="email" class="form-control" id="beneficiary_email" placeholder="Beneficiary Name" parsley-trigger="change" required>
                                            <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span>

                                         </div>

                                        <div class="form-group">

                                        </div><br>

                                        <div class="form-group">

                                            <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                                <input id="checkbox2" type="checkbox">
                                                <label class="custom-control-label" for="checkbox2">
                                                    Email beneficiary when a transfer is made
                                                </label>
                                            </div>

                                        </div>

                                        <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking
                                            the box, enables us to send an alert mail to
                                            the beneficiary each time a transfer is made
                                        </p>
                                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="save_beneficiary_next">Next</button>
                                    </form>


                                    <form action="POST" id="local_bank_details_summary">
                                        @csrf
                                        <div class="form-group">
                                            <label class="purple-color"> Bank Details Summary</label>
                                         </div>
                                        <div class="form-group">
                                            <label> Select Bank:&emsp;</label>
                                            <span class="font-weight-light mr-2" id="display_selected_bank"> &nbsp</span>
                                            {{-- <select class="custom-select " id="select_bank">
                                                <option selected>Select Bank</option>
                                                <option value="Stanbic Bank">Stanbic Bank</option>
                                                <option value="GCB Bank">GCB Bank</option>
                                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                <option value="Zenith Bank">Zenith Bank</option>
                                                <option value="Cal Bank">Cal Bank</option>
                                                <option value="FNB Bank">FNB Bank</option>
                                            </select> --}}


                                        </div>
                                        <br>
                                        {{--  <label class="purple-color">  Account Details</label>  --}}
                                        <div class="form-group">
                                            <label>Account Number:&emsp;</label><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span>
                                            {{-- <input type="number" class="form-control" id="account_number" placeholder="Account Number" required> --}}


                                        </div>
                                        <div class="form-group">
                                            <label>Account Name:&emsp;</label><span class="font-weight-light mr-2" id="display_account_name"> &nbsp</span>
                                            {{-- <input type="text" class="form-control" id="account_name" placeholder="Account Name"> --}}


                                         </div><br>


                                         {{--  <label class="purple-color"> Personal Details</label>  --}}
                                        <div class="form-group">
                                            <label>Beneficiary Name:&emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_name"> &nbsp</span>
                                            {{-- <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name"> --}}


                                         </div>

                                         <div class="form-group">
                                            <label>Beneficiary Email:&emsp;</label><span class="font-weight-light mr-2" id="display_beneficiary_email"> &nbsp</span>
                                            {{-- <input type="email" class="form-control" id="beneficiary_email" placeholder="Beneficiary Name"> --}}


                                         </div>

                                        <div class="form-group">

                                        </div><br>

                                        <div class="form-group">

                                            <div class="">
                                                {{-- <input id="checkbox2" type="checkbox"> --}}
                                                <label>Email beneficiary when a transfer is made:&emsp;</label><span class="font-weight-light mr-2" id="display_transfer_email"> &nbsp</span>

                                            </div>

                                        </div>

                                        {{-- <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking
                                            the box, enables us to send an alert mail to
                                            the beneficiary each time a transfer is made
                                        </p> --}}

                                        <button type="submit" class="btn btn-secondary btn-rounded waves-effect waves-light"  id="save_beneficiary_back">Back</button>&emsp;&emsp;

                                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit" id="save_beneficiary">Save Beneficiary</button>
                                    </form>

                                </div> <!-- end col -->

                                <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/transfer1.png') }}" class="img-fluid" alt="" >
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->


                    <!-- Modal -->
                    <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
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
                    </div><!-- /.modal -->




                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            $(document).ready(function(){

                $('#local_bank_details_summary').hide();
                $('#select_bank_error').hide();
                $('#account_number_error').hide();
                $('#account_name_error').hide();
                $('#beneficiary_name_error').hide();
                $('#beneficiary_email_error').hide();


                $('#save_beneficiary_next').click(function(e){
                    e.preventDefault();

                    var select_bank = $('#select_bank').val();
                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name =  $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();


                    var select_bank = $('#select_bank').val();
                    $('#display_selected_bank').text(select_bank);

                    var account_number = $('#account_number').val();
                    $('#display_account_number').text(account_number);

                    var account_name = $('#account_name').val();
                    $('#display_account_name').text(account_name);

                    var beneficiary_name =  $('#beneficiary_name').val();
                    $('#display_beneficiary_name').text(beneficiary_name);

                    var beneficiary_email = $('#beneficiary_email').val();
                    $('#display_beneficiary_email').text(beneficiary_email);

                    var transfer_email = $("#transfer_email input[type='checkbox']:checked").val();
                    {{--  console.log(transfer_email);  --}}
                    if (transfer_email == 'on'){
                        $('#display_transfer_email').text('Yes');
                     }else {
                        $('#display_transfer_email').text('No');
                     }


                    if(select_bank.trim() == '' || select_bank.trim() == undefined){
                        $('#select_bank_error').show();

                    }else {
                        $('#select_bank_error').hide();

                    }

                    if(account_number.trim() == '' || account_number.trim() == undefined){
                        $('#account_number_error').show();

                    }else {
                        $('#account_number_error').hide();

                    }

                    if(account_name.trim() == '' || account_name.trim() == undefined){
                        $('#account_name_error').hide();

                    }else{
                        $('#account_name_error').hide();
                    }


                    if(beneficiary_name.trim() == '' || beneficiary_name.trim() == undefined){
                        $('#beneficiary_name_error').hide();

                    }else{
                        $('#beneficiary_name_error').hide();
                    }


                    if(beneficiary_email.trim() == '' || beneficiary_email.trim() == undefined){
                        $('#beneficiary_email_error').hide();

                    }else{
                        $('#beneficiarbeneficiary_email_errory_name_error').hide();
                    }

                    if(select_bank.trim() != '' && account_number.trim() != '' && account_name.trim() != '' && beneficiary_name.trim() != ''){
                        $('#local_bank_details').hide();
                        $("#local_bank_details_summary" ).toggle( '500' );

                    }


                })

                // GO BACK TO ENTER BENEFICIARY FORM
                $('#save_beneficiary_back').click(function(e){
                    e.preventDefault();

                    $('#local_bank_details_summary').hide();
                    $('#local_bank_details').toggle('500');

                })


                // SEND TO API
                $('#save_beneficiary').click(function(e){
                    e.preventDefault();


                    var select_bank = $('#select_bank').val();
                    var account_number = $('#account_number').val();
                    var account_name = $('#account_name').val();
                    var beneficiary_name =  $('#beneficiary_name').val();
                    var beneficiary_email = $('#beneficiary_email').val();
                    var send_email = $("#transfer_email input[type='checkbox']:checked").val();
                    {{--  console.log(send_email);  --}}
                    if(send_email == 'on'){
                        var transfer_email = ('Yes');
                    }else{
                        var transfer_email = ('No');
                    }
                    console.log(transfer_email),

                    $.ajax({
                        'type' : 'POST' ,
                        'url' : 'local-bank-beneficiary-api',
                        "datatype" : "application/json",
                        'data' : {
                            'bank_name' : select_bank ,
                            'account_number' : account_number ,
                            'account_name' : account_name ,
                            'beneficiary_name' : beneficiary_name ,
                            'beneficiary_email' : beneficiary_email ,
                            'send_mail' : transfer_email
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success:
                        function(response){

                            console.log(response.responseCode);
                            if(response.responseCode == "000"){
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: false,
                                    didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Beneficiary Successfully Added'
                                })
                            }else{

                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: false,
                                    didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'error',
                                    title: 'Failed To Add Beneficiary'
                                })
                        }
                    }
                    })
                })
            });

        </script>
    @endsection
