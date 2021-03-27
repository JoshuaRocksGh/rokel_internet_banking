@extends('layouts.master')

@section('content')

<div ></div>   <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color" style="cursor: pointer;" onclick="window.history.back()">
                                <i class="fe-arrow-left"></i>   OTHER LOCAL BANK BENEFICIARY
                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7">

                                    <form action="#" id="local_bank_details">
                                        <div class="form-group">
                                            <label class="purple-color"> Bank Details</label>
                                         </div>
                                        <div class="form-group">
                                            <label> Select Bank</label>
                                            <select class="custom-select " id="select_bank">
                                                <option selected>Select Bank</option>
                                                <option value="Stanbic Bank">Stanbic Bank</option>
                                                <option value="GCB Bank">GCB Bank</option>
                                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                <option value="Zenith Bank">Zenith Bank</option>
                                                <option value="Cal Bank">Cal Bank</option>
                                                <option value="FNB Bank">FNB Bank</option>
                                            </select>

                                        </div>
                                        <br>
                                        <label class="purple-color">  Account Details</label>
                                        <div class="form-group">
                                            <label>Account Number</label>
                                            <input type="number" class="form-control" id="account_number" placeholder="Account Number" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Account Name</label>
                                            <input type="text" class="form-control" id="account_name" placeholder="Account Name">
                                         </div><br>


                                         <label class="purple-color"> Personal Details</label>
                                        <div class="form-group">
                                            <label>Beneficiary Name</label>
                                            <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name">
                                         </div>

                                         <div class="form-group">
                                            <label>Beneficiary Email</label>
                                            <input type="email" class="form-control" id="beneficiary_email" placeholder="Beneficiary Name">
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
                                        <button class="btn btn-primary btn-rounded btn-block" type="submit" id="save_beneficiary_next">Next</button>
                                    </form>


                                    <form action="#" id="local_bank_details_summary">
                                        <div class="form-group">
                                            <label class="purple-color"> Bank Details Summary</label>
                                         </div>
                                        <div class="form-group">
                                            <label> Select Bank</label>
                                            {{-- <select class="custom-select " id="select_bank">
                                                <option selected>Select Bank</option>
                                                <option value="Stanbic Bank">Stanbic Bank</option>
                                                <option value="GCB Bank">GCB Bank</option>
                                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                                <option value="Zenith Bank">Zenith Bank</option>
                                                <option value="Cal Bank">Cal Bank</option>
                                                <option value="FNB Bank">FNB Bank</option>
                                            </select> --}}
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                        </div>
                                        <br>
                                        <label class="purple-color">  Account Details</label>
                                        <div class="form-group">
                                            <label>Account Number</label>
                                            {{-- <input type="number" class="form-control" id="account_number" placeholder="Account Number" required> --}}
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                        </div>
                                        <div class="form-group">
                                            <label>Account Name</label>
                                            {{-- <input type="text" class="form-control" id="account_name" placeholder="Account Name"> --}}
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                         </div><br>


                                         <label class="purple-color"> Personal Details</label>
                                        <div class="form-group">
                                            <label>Beneficiary Name</label>
                                            {{-- <input type="text" class="form-control" id="beneficiary_name" placeholder="Beneficiary Name"> --}}
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                         </div>

                                         <div class="form-group">
                                            <label>Beneficiary Email</label>
                                            {{-- <input type="email" class="form-control" id="beneficiary_email" placeholder="Beneficiary Name"> --}}
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                         </div>

                                        <div class="form-group">

                                        </div><br>

                                        <div class="form-group">

                                            <div class="">
                                                {{-- <input id="checkbox2" type="checkbox"> --}}
                                                <label>
                                                    Email beneficiary when a transfer is made
                                                </label>
                                            <p class="mb-1"><span class="font-weight-light mr-2" style="font-size: 18px"><span class="font-weight-light mr-2" id="display_account_number"> &nbsp</span></span></p>

                                            </div>

                                        </div>

                                        {{-- <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking
                                            the box, enables us to send an alert mail to
                                            the beneficiary each time a transfer is made
                                        </p> --}}

                                        <button type="submit" class="btn btn-secondary"  id="save_beneficiary_back">Back</button>&emsp;&emsp;

                                        <button class="btn btn-primary btn-rounded" type="submit" id="save_beneficiary">Save Beneficiary</button>
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

        <script>
            $(document).ready(function(){

                $('#local_bank_details_summary').hide();

                $('#save_beneficiary_next').click(function(e){
                    e.preventDefault();

                    $('#local_bank_details').hide();
                    $('#local_bank_details_summary').toggle('500');

                })

                $('#save_beneficiary_back').click(function(e){
                    e.preventDefault();

                    $('#local_bank_details_summary').hide();
                    $('#local_bank_details').toggle('500');

                })
            });

        </script>
    @endsection
