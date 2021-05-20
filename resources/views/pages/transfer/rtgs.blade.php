@extends('layouts.master')



@section('styles')

    <style>
        @media print {
            .hide_on_print {
                display: none
            }
        }

        @font-face {
            font-family: 'password';
            font-style: normal;
            font-weight: 400;
            font-size: 40px;
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

        input.key {
            font-family: 'password';
            width: 300px;
            height: 80px;
            font-size: 100px;
        }

        .table_over_flow {
            overflow-y: hidden;

        }

    </style>


@endsection



@section('content')

    <div>



        <div class="container-fluid">
            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                        LOCAL BANK TRANSFER
                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-danger">Local Bank</b>


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

                                <div class="col-md-7 rtgs_summary_card m-2" id="transaction_summary"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 ">
                                            <br><br><br>

                                            <div class="table-responsive card table_over_flow">
                                                <table class="table mb-0 table-bordered table-striped  ">

                                                    <tbody>
                                                        <tr class="success_gif">
                                                            <td class="text-center bg-white" colspan="2">
                                                                <img src="{{ asset('land_asset/images/statement_success.gif') }}"
                                                                    style="zoom: 0.5" alt="">
                                                            </td>
                                                        </tr>
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
                                                                    class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                                    id="online_display_beneficiary_bank_name"></span>
                                                                <span
                                                                    class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                    id="display_to_account_no"> </span>




                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Amount:</td>
                                                            <td>
                                                                <span class="font-15 text-primary h3 display_currency"
                                                                    id="display_currency"> </span>
                                                                &nbsp;
                                                                <span
                                                                    class="font-15 text-primary h3 display_transfer_amount"
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
                                                            <td>Transfer Date: </td>
                                                            <td>
                                                                <span class="font-13 text-primary h3"
                                                                    id="display_transfer_date">{{ date('d F, Y') }}</span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Posted BY: </td>
                                                            <td>
                                                                <span class="font-13 text-primary h3"
                                                                    id="display_posted_by">{{ session()->get('userAlias') }}</span>
                                                            </td>
                                                        </tr>

                                                        {{--  <tr>
                                                            <td>Enter Pin: </td>
                                                            <td>

                                                                <input type="text" name="user_pin"
                                                                    class="form-control key hide_on_print" id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                            </td>
                                                        </tr>  --}}

                                                        <tr>

                                                            <td colspan="2">

                                                                <div class="alert alert-info form-control col-md-12"
                                                                role="alert">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="terms_and_conditions">
                                                                    <label class="custom-control-label " for="terms_and_conditions">
                                                                        <b>
                                                                           By clicking, you agree with terms and conditions

                                                                        </b>
                                                                     </label>
                                                                </div>


                                                            </div>
                                                            </td>
                                                        </tr>




                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->


                                    <!-- Center modal content -->
                                    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title text-center text-primary" id="myCenterModalLabel ">ENTER TRANSACTION PIN</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                                </div>
                                                <div class="modal-body">

                                                  <div class="row">
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-9  text-center">
                                                        <form action="#" autocomplete="off" aria-autocomplete="off">
                                                            <input type="text" name="user_pin" maxlength="4"
                                                        class="form-control key hide_on_print" id="user_pin"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                        </form>

                                                    </div>
                                                    <div class="col-md-1"></div>
                                                  </div>
                                                </div>
                                                <br>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->



                                            <br>
                                            <div class="form-group text-center">

                                                <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                        id="back_button">Back</button> &nbsp; </span>
                                                <span>
                                                    &nbsp;
                                                    <button class="btn btn-primary btn-rounded" type="button"
                                                        id="confirm_modal_button" data-toggle="modal" data-target="#centermodal">
                                                        <span id="confirm_transfer">Confirm Transfer</span>
                                                        <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                            id="spinner" aria-hidden="true"></span>
                                                        <span id="spinner-text">Loading...</span>
                                                    </button>
                                                </span>

                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                        type="button" id="print_receipt" onclick="window.print()">Print
                                                        Receipt
                                                    </button></span>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                </div>

                                <div class=" col-md-7 rtgs_card m-2" id="transaction_form"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <br><br><br>

                                    <div class="row container">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <label class="text-primary"> <b>Beneficiary Type</b> </label>
                                        </div>
                                        <div class="col-md-6">

                                            {{--  <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div>  --}}

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="onetime_beneficiary_type"
                                                    id="customCheck1">
                                                <label class="custom-control-label " for="customCheck1">
                                                    <b>Onetime </b> </label>
                                            </div>
                                            <hr>
                                            <span class="badge badge-primary float-right" style="cursor: pointer"><a
                                                    href="{{ url('add-local-bank-beneficiary') }}"
                                                    class="text-white">Create
                                                    Beneficiary</a>
                                            </span>
                                            <br>
                                        </div>

                                    </div>

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
                                                            <b class="col-md-4 text-primary">My Account &nbsp; <span
                                                                    class="text-danger">*</span> </b>


                                                            <select class="form-control col-md-8 " id="from_account"
                                                                required>
                                                                <option value=""> -- Select Your Account --
                                                                </option>


                                                            </select>
                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary"> Transfer Type &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="col-md-8">
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 beneficiary_type">
                                                                    <input type="radio" id="ach_beneficiary" value="ACH"
                                                                        name="transfer_beneficiary" checked>
                                                                    <label for="ach_beneficiary">ACH</label>
                                                                </div>
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 beneficiary_type">
                                                                    <input type="radio" id="rtgs_beneficiary" value="RTGS"
                                                                        name="transfer_beneficiary">
                                                                    <label for="rtgs_beneficiary">RTGS</label>
                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="form-group row mb-3" id="pay_from_account">

                                                            <b class="col-md-4 text-primary">Beneficiary Account &nbsp;
                                                                <span class="text-danger">*</span></b>

                                                            <select class="form-control col-md-8" id="to_account" required>
                                                                <option value=""> -- Select Beneficiary --</option>
                                                                {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                                Currenct Account ~ 004004110449140121 </option> --}}
                                                            </select>
                                                            <br>



                                                        </div>



                                                        <div class="form-group row">

                                                            <b class="col-4 text-primary"> Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="col-2">
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend" style="margin-right:-1px;">
                                                                        <div class="input-group-text display_from_account_currency">###</div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="text" class="form-control col-6" id="amount"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>


                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary ">Purpose of Transfer &nbsp;
                                                                <span class="text-danger">*</span></b>

                                                            <input type="text" class="form-control col-md-8" id="purpose"
                                                                placeholder="Enter purpose of transaction" required>

                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class=" col-md-4 text-primary">Expense Category &nbsp; <span
                                                                    class="text-danger">*</span></b>
                                                            {{-- <label for="form-group">Category</label> --}}

                                                            <select class="custom-select col-md-8" id="category" required>
                                                                <option value="">---Not Selected---</option>
                                                                {{--  <option value="01~Travel">Travel</option>
                                                                <option value="02~Petty Cash">Petty Cash</option>
                                                                <option value="03~Salary">Salary</option>
                                                                <option value="04~Groceries">Groceries</option>
                                                                <option value="05~Allowances">Allowances</option>
                                                                <option value="06~Medical">Medical</option>
                                                                <option value="07~Vendor Payment">Vendor Payment</option>
                                                                <option value="08~Insurance">Insurance</option>
                                                                <option value="09~Tax">Tax</option>
                                                                <option value="10~Others">Others</option>  --}}
                                                            </select>


                                                        </div>




                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary ">Future Payment &nbsp;

                                                            </b>

                                                            <input type="date" class="form-control col-md-8"
                                                                id="future_payement" required>

                                                        </div>

                                                        <div class="form-group text-right yes_beneficiary">
                                                            <button class="btn btn-primary btn-rounded" type="button"
                                                                id="next_button">
                                                                &nbsp; Next &nbsp;<i class="fe-arrow-right"></i> </button>

                                                        </div>

                                                        <div class="form-group row mb-3 no_beneficiary">
                                                            <b class="col-md-4 text-primary ">

                                                            </b>
                                                            <div class="alert alert-warning form-control col-md-8"
                                                                role="alert">
                                                                <i class="mdi mdi-alert-outline mr-2"></i>
                                                                <strong>warning</strong> No
                                                                beneficiary
                                                                <legend></legend>
                                                            </div>

                                                        </div>


                                                    </div>

                                                </div>
                                                <div class="form-group">



                                                    {{-- <table
                                                        class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info card">
                                                        <tbody class="text-primary">
                                                            <tr class="text-primary">

                                                                <td class="text-primary">
                                                                    <a
                                                                        class="text-body font-weight-semibold display_from_account_name text-primary"></a>
                                                                    <small
                                                                        class="d-block display_from_account_no text-primary"></small>
                                                                </td>

                                                                <td class=" font-weight-semibold text-primary">
                                                                    <span
                                                                        class="display_from_account_currency text-primary"></span>
                                                                    <span
                                                                        class="display_from_account_amount text-primary"></span>

                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table> --}}


                                                </div>



                                                <div class="form-group mt-1 select_beneficiary">
                                                    {{-- <label class="h4 text-primary">Beneficiary Account <span
                                                            class="text-danger">*</span></label>
                                                    <br> --}}




                                                    {{-- <table
                                                        class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card">
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <a
                                                                        class="text-body font-weight-semibold display_to_account_name"></a>
                                                                    <small class="d-block display_to_account_no"></small>
                                                                </td>

                                                                <td class=" font-weight-semibold">
                                                                    <span class="display_to_account_currency"></span>

                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table> --}}


                                                </div>




                                            </div>
                                            <div class="col-md-1"></div>

                                        </div>

                                    </form>

                                    <form action="#" class="onetime_beneficiary" id="onetime_payment_details_form"
                                        autocomplete="off" aria-autocomplete="none">
                                        @csrf
                                        <div class="">

                                            <div class="">
                                                {{-- <br><br><br> --}}
                                                <div class="row container">
                                                    <div class="col-md-1"></div>

                                                    <div class="col-md-9">

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary"> My Account &nbsp; <span
                                                                    class="text-danger">*</span> </b>


                                                            <select class="form-control col-md-8 " id="onetime_from_account"
                                                                required>
                                                                <option value="">Select Account
                                                                </option>


                                                            </select>
                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary"> Transfer Type &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            {{--  <div class="col-md-8">
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 onetime_beneficiary_type">
                                                                    <input type="radio" id="ach_onetime" value="ACH"
                                                                        name="onetime_transfer_beneficiary" checked>
                                                                    <label for="ach_onetime">ACH</label>
                                                                </div>
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 onetime_beneficiary_type">
                                                                    <input type="radio" id="rtgs_onetime" value="RTGS"
                                                                        name="onetime_transfer_beneficiary">
                                                                    <label for="rtgs_onetime">RTGS</label>
                                                                </div>


                                                            </div>  --}}

                                                            <div class="col-md-8" id="onetime_beneficiary_radio">
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 beneficiary_type">
                                                                    <input type="radio" id="ach_beneficiary_onetime" value="ACH"
                                                                        name="transfer_beneficiary_ontime" checked>
                                                                    <label for="ach_beneficiary">ACH</label>
                                                                </div>
                                                                <div
                                                                    class="radio radio-primary form-check-inline col-md-5 beneficiary_type">
                                                                    <input type="radio" id="rtgs_beneficiary_onetime" value="RTGS"
                                                                        name="transfer_beneficiary_ontime">
                                                                    <label for="rtgs_beneficiary">RTGS</label>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Receiver Name &nbsp;<span
                                                                    class="text-danger">*</span> </b>
                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_beneficiary_alias_name" placeholder="Alias Name"
                                                                required>
                                                        </div>
                                                        <div class="form-group row mb-3">

                                                            <b class="col-md-4  text-primary"> Bank Name &nbsp; <span
                                                                    class="text-danger">*</span> </b>

                                                            <select class="form-control col-md-8"
                                                                id="onetime_beneficiary_bank_name" required>
                                                                <option value="">Bank Name</option>
                                                                {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                            Currenct Account ~ 004004110449140121 </option> --}}
                                                            </select>
                                                            <br>
                                                        </div>

                                                        <div class="form-group row mb-3">

                                                            <b class="col-md-4 text-primary"> Account Number &nbsp; <span
                                                                    class="text-danger">*</span> </b>
                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_beneficiary_account_number"
                                                                placeholder="Account Number"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                        </div>



                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Select
                                                                Currency &nbsp;<span class="text-danger">*</span>
                                                            </b>

                                                            <select class="custom-select col-md-8"
                                                                id="onetime_beneficiary_account_currency" required>
                                                                <option value="">Select Currency</option>

                                                            </select>

                                                        </div>

                                                        <div class="form-group row">
                                                            {{-- <label for="form-group"> Amount<span class="text-danger">*</span></label> --}}
                                                            <b class="col-md-4 text-primary">Enter Amount &nbsp; <span class="text-danger text-primary">*</span> </b>
                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_amount" placeholder="Amount: 0.00"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Enter Email &nbsp; <span class="text-danger">*</span>
                                                            </b>
                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_beneficiary_phone" placeholder="Email" required>
                                                        </div>



                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Expense Category &nbsp; <span class="text-danger">*</span></b>
                                                            {{-- <label for="form-group">Category</label> --}}


                                                            <select class="custom-select col-md-8" id="onetime_category"
                                                                required>
                                                                <option value="">---Not Selected---</option>
                                                                {{--  <option value="01~Travel">Travel</option>
                                                                <option value="02~Petty Cash">Petty Cash</option>
                                                                <option value="03~Salary">Salary</option>
                                                                <option value="04~Groceries">Groceries</option>
                                                                <option value="05~Allowances">Allowances</option>
                                                                <option value="06~Medical">Medical</option>
                                                                <option value="07~Vendor Payment">Vendor Payment</option>
                                                                <option value="08~Insurance">Insurance</option>
                                                                <option value="09~Tax">Tax</option>
                                                                <option value="10~Others">Others</option>  --}}
                                                            </select>


                                                        </div>

                                                        <div class="row">
                                                            <div class="col-4"></div>
                                                            <div class="col-8">

                                                                <div class="form-group mb-0">
                                                                    <input type="checkbox" class="custom-control-inputt"
                                                                        id="onetime_invoice_check">
                                                                    &nbsp; &nbsp; <label class="h6">Invoice Attachment ?
                                                                        <span class="badge badge-primary "
                                                                            style="cursor: pointer" data-toggle="modal"
                                                                            data-target="#centermodal">View</span>
                                                                    </label>
                                                                    <span class="hide_invoice">
                                                                        <br>
                                                                        <input type="file" class="hide_invoice"
                                                                            id="onetime_invoice_attachment" required>
                                                                    </span>


                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Purpose of Transfer &nbsp; <span class="text-danger">*</span></b>

                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_purpose"
                                                                placeholder="Enter purpose of transaction" required>

                                                        </div>


                                                        <div class="form-group text-right yes_beneficiary">
                                                            <button class="btn btn-primary btn-rounded" type="button"
                                                                id="onetime_next_button">
                                                                &nbsp; Next &nbsp;<i class="fe-arrow-right"></i> </button>
                                                            {{-- <button type="button" id="hide_button">hide</button> --}}
                                                        </div>

                                                    </div>

                                                    <div class="col-md-1"></div>
                                                </div>
                                                <div class="form-group">
                                                    {{-- <label class="h6">My Account <span
                                                            class="text-danger">*</span></label>


                                                    <select class="custom-select" id="from_account" required>
                                                        <option value="">Select Account</option>


                                                    </select> --}}


                                                    {{-- <table
                                                        class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info card">
                                                        <tbody class="text-primary">
                                                            <tr class="text-primary">

                                                                <td class="text-primary">
                                                                    <a
                                                                        class="text-body font-weight-semibold display_from_account_name text-primary"></a>
                                                                    <small
                                                                        class="d-block display_from_account_no text-primary"></small>
                                                                </td>

                                                                <td class=" font-weight-semibold text-primary">
                                                                    <span
                                                                        class="display_from_account_currency text-primary"></span>
                                                                    <span
                                                                        class="display_from_account_amount text-primary"></span>

                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table> --}}


                                                </div>



                                                <div class="form-group mt-1 select_beneficiary">
                                                    {{-- <label class="h4 text-primary">Beneficiary Account <span
                                                            class="text-danger">*</span></label>
                                                    <br> --}}




                                                    {{-- <table
                                                        class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card">
                                                        <tbody>
                                                            <tr>

                                                                <td>
                                                                    <a
                                                                        class="text-body font-weight-semibold display_to_account_name"></a>
                                                                    <small class="d-block display_to_account_no"></small>
                                                                </td>

                                                                <td class=" font-weight-semibold">
                                                                    <span class="display_to_account_currency"></span>

                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table> --}}


                                                </div>




                                            </div>


                                        </div>
                                        <div class="form-group no_beneficiary">
                                            <div class="alert alert-warning" role="alert">
                                                <i class="mdi mdi-alert-outline mr-2"></i> <strong>warning</strong> No
                                                beneficiary found
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end col -->

                                {{-- <button class="m-2 btn btn-info d-none d-sm-block">Related Information</button> --}}
                                {{-- LEFT CARD --}}


                                <div class=" col-md-4 rtgs_card_right m-2 d-none d-sm-block "

                                <div class=" col-md-4 other_card_right rtgs_card_right m-2 d-none d-sm-block"
                                    id="related_information_display"

                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <br><br>

                                    <div class=" col-md-12 card card-body ach_transfer_summary">
                                        {{-- <br><br> --}}
                                        <div class="row">
                                            <h6 class="col-md-5">Account Description:</h6>
                                            <span class="text-primary display_from_account_name col-md-7"></span>

                                            <h6 class="col-md-5">Account Number:</h6>
                                            <span class="text-primary display_from_account_no col-md-7"></span>

                                            <h6 class="col-md-5">Available Balance:</h6>

                                            <span class="text-primary display_from_account_amount col-md-7"></span>


                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_from_account_currency col-md-7"></span>

                                            {{-- <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_from_account_currency col-md-7"></span> --}}

                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h6 class="col-md-5">Receiver Name:</h6>
                                            <h6 class="text-primary display_to_account_name col-md-7"></h6>

                                            <h6 class="col-md-5">Bank Name:</h6>
                                            <h6 class="text-primary display_to_bank_name col-md-7"></h6>

                                            <h6 class="col-md-5">Receiver Account:</h6>
                                            <h6 class="text-primary display_to_account_no col-md-7"></h6>

                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <h6 class="text-primary display_to_account_currency col-md-7"></h6>
                                        </div>
                                        <br>
                                        <button type="button"
                                            class="btn btn-warning btn-xs waves-effect waves-light beneficiary_details col-md-3 text-primary"
                                            data-toggle="modal" data-target="#standard-modal">
                                            More Info</button>
                                        <hr style="margin-top: 2px; margin-bottom: 5px; ">

                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Transfer Amount:</h6>
                                            <h6 class="text-danger text-bold col-md-7 ">
                                                <span class="display_currency"></span>
                                                &nbsp;
                                                <span class="display_transfer_amount"></span>
                                            </h6>
                                        </div>
                                        <hr style="margin-top: 2px; margin-bottom: 5px; ">

                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Transaction Fee:</h6>
                                            <h6 class="text-danger text-bold col-md-7">0.08% of transfer amount</h6>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Please Note:</h6>
                                            <h6 class="text-danger col-md-7">ACH Tranfers should be above (SLL
                                                30,000,000.00)</h6>
                                        </div>


                                    </div>

                                    </div>
                                </div>

                                {{-- <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/same_bank.jpg') }}" class="img-fluid" alt="">
                                </div> <!-- end col --> --}}


                                <!-- end row -->

                                {{-- <button class="m-2 btn btn-info d-block d-sm-none">Related Information</button> --}}

                            </div>




                        </div>

                        {{-- <div class="col-md-1"></div> --}}

                    </div> <!-- end card-body -->


                    <!-- Standard modal content -->
                    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title text-danger" id="standard-modalLabel">Beneficiary Details</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <h4 class="text-primary">Bank Details</h4>


                                        <div class="form-group row">
                                            <label class="col-md-5">Bank Name:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_name"></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-5">Swift Code:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_swift_code"></span>
                                        </div>

                                        {{--  <div class="form-group row">
                                            <label class="col-md-5">Country:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_country"></span>
                                        </div>  --}}

                                        {{--  <div class="form-group row">
                                            <label class="col-md-5">City:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_city"></span>
                                        </div>  --}}


                                        {{--  <div class="form-group row">
                                            <label class="col-md-5">Branch:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_branch"></span>
                                        </div>  --}}

                                        <hr>

                                        <h4 class="text-primary">Account Details</h4>

                                        <div class="form-group row">
                                            <label class="col-md-5">Account Name:</label>
                                            <span class="col-md-7" id="beneficiary_details_account_name"></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-5">Account Number:</label>
                                            <span class="col-md-7" id="beneficiary_details_account_number"></span>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-5">Currency:</label>
                                            <span class="col-md-7" id="beneficiary_details_account_currency"></span>
                                        </div>
                                        <hr>

                                        <h4 class="text-primary">Beneficiary Details </h4>
                                        <div class="form-group row">
                                            <label class="col-md-5">Nickname:</label>
                                            <span class="col-md-7" id="beneficiary_details_name"></span>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5">Address:</label>
                                            <span class="col-md-7" id="beneficiary_details_address"></span>
                                        </div>
                                        {{--  <div class="form-group row">
                                            <label class="col-md-5">Telephone:</label>
                                            <span class="col-md-7" id="beneficiary_details_telephone"></span>
                                        </div>  --}}
                                        <div class="form-group row">
                                            <label class="col-md-5">Email:</label>
                                            <span class="col-md-7" id="beneficiary_details_email"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                </div>


            @endsection

            @section('scripts')



                <script src="https://code.jquery.com/jquery-3.6.0.js"
                    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                <script>
                    function formatToCurrency(amount) {
                        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                    };

                    function bank_list() {
                        $.ajax({
                            'type': 'GET',
                            'url': 'get-bank-list-api',
                            "datatype": "application/json",
                            success: function(response) {
                                console.log(response.data);
                                let data = response.data
                                $.each(data, function(index) {

                                    $('#onetime_beneficiary_bank_name').append($('<option>', {
                                        value: data[index].bankCode + '~' + data[index]
                                            .bankDescription
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

                                    $('#onetime_beneficiary_account_currency').append($('<option>', {
                                        value: data[index].isoCode + '~' + data[index].description
                                    }).text( data[index].isoCode + '~' + data[index].description));

                                });

                            },

                        })
                    };



                    function expenseTypes(){
                        $.ajax({
                            "type" : "GET" ,
                            "url" : "get-expenses" ,
                            "datatype": "application/json",
                            success : function(response) {
                                console.log(response.data);
                                let data = response.data;

                                $.each(data ,  function(index){

                                    $("#category").append($('<option>', {
                                        value: data[index].expenseCode + '~' + data[index].expenseName
                                    }).text(data[index].expenseName))

                                });
                            },
                        })
                    }

                    function expenseTypes_onetime(){
                        $.ajax({
                            "type" : "GET" ,
                            "url" : "get-expenses" ,
                            "datatype": "application/json",
                            success : function(response) {
                                console.log(response.data);
                                let data = response.data;

                                $.each(data ,  function(index){

                                    $("#onetime_category").append($('<option>', {
                                        value: data[index].expenseCode + '~' + data[index].expenseName
                                    }).text(data[index].expenseName))

                                });
                            },
                        })
                    }

                    function from_account() {
                        $.ajax({
                            'type': 'GET',
                            'url': 'get-my-account',
                            "datatype": "application/json",
                            success: function(response) {
                                {{--  console.log(response.data);  --}}
                                let data = response.data
                                $.each(data, function(index) {
                                    $('#from_account').append($('<option>', {
                                        value: data[index].accountType + '~' + data[
                                                index].accountDesc + '~' + data[
                                                index].accountNumber + '~' + data[
                                                index].currency + '~' + data[index]
                                            .availableBalance
                                    }).text(data[index].accountNumber + ' - ' + data[index]
                                        .currency +
                                        ' - ' + formatToCurrency(Number(data[index]
                                            .availableBalance))));
                                    //$('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                                });

                            },

                        })
                    }

                    function from_account_onetime() {
                        $.ajax({
                            'type': 'GET',
                            'url': 'get-my-account',
                            "datatype": "application/json",
                            success: function(response) {
                                {{--  console.log(response.data);  --}}
                                let data = response.data
                                $.each(data, function(index) {
                                    $('#onetime_from_account').append($('<option>', {
                                        value: data[index].accountType + '~' + data[
                                                index].accountDesc + '~' + data[
                                                index].accountNumber + '~' + data[
                                                index].currency + '~' + data[index]
                                            .availableBalance
                                    }).text(data[index].accountNumber + ' - ' + data[index]
                                        .currency +
                                        ' - ' + formatToCurrency(Number(data[index]
                                            .availableBalance))));
                                    //$('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                                });

                            },

                        })
                    }


                    function get_benerficiary() {
                        $.ajax({
                            'type': 'GET',
                            'url': 'get-transfer-beneficiary-api?beneType=OTB',
                            "datatype": "application/json",
                            success: function(response) {
                                console.log(response.data);
                                let data = response.data

                                if(!response.data){

                                }else{
                                    if (response.data.length > 0) {
                                        $('.yes_beneficiary').show()
                                        $('.no_beneficiary').hide()

                                        $.each(data, function(index) {
                                            //$('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
                                            $('#to_account').append($('<option>', {
                                                value: data[index].BANK_NAME + '~' +
                                                    data[index].NICKNAME.toUpperCase() + '~' +
                                                    data[index].BEN_ACCOUNT + '~' +
                                                    data[index].BEN_ACCOUNT_CURRENCY + '~' +
                                                    data[index].ADDRESS_1 + '~' +
                                                    data[index].BANK_SWIFT_CODE + '~' +
                                                    data[index].EMAIL + '~' + JSON
                                                    .stringify(data[index])
                                            }).text(data[index].NICKNAME.toUpperCase() + ' - ' +
                                                data[index]
                                                .BANK_NAME.toUpperCase() +
                                                ' - ' + data[index].BEN_ACCOUNT + ' - ' + data[
                                                    index]
                                                .BEN_ACCOUNT_CURRENCY));

                                        });

                                    } else {
                                        $('.yes_beneficiary').hide()
                                        $('.no_beneficiary').show()
                                    }
                                }


                            },

                        })
                    }

                    $(document).ready(function() {

                        $('#spinner').hide(),
                            $('#spinner-text').hide(),
                            $('#print_receipt').hide(),
                            $(".hide_invoice").hide()
                        $('.no_beneficiary').hide()
                        $("#transaction_summary").hide();
                        $(".success_gif").hide();
                        $(".onetime_beneficiary").hide()


                        $(".ach_transfer_summary").show();
                        $(".beneficiary_details").hide();



                        setTimeout(function() {
                            from_account();
                            from_account_onetime();
                            get_benerficiary();
                            bank_list();
                            get_currency();
                            expenseTypes();
                            expenseTypes_onetime();
                        }, 2000)

                        // POPULATE THE RELATED INFORMATION CARD ON CHANGE OF ACCOUNT

                        $("#from_account").change(function(){
                            var from_account_details = $(this).val().split("~");
                            console.log(from_account_details);
                            $(".display_from_account_name").text(from_account_details[1]);
                            $(".display_from_account_no").text(from_account_details[2]);
                            $(".display_from_account_amount").text(from_account_details[4]);
                            $(".display_from_account_currency").text(from_account_details[3]);

                        })

                        $("#onetime_from_account").change(function(){
                            var onetime_from_account_details = $(this).val().split("~");
                            console.log(onetime_from_account_details);
                            $(".display_from_account_name").text(onetime_from_account_details[1]);
                            $(".display_from_account_no").text(onetime_from_account_details[2]);
                            $(".display_from_account_amount").text(onetime_from_account_details[4]);
                            $(".display_from_account_currency").text(onetime_from_account_details[3]);

                        })

                        $("#to_account").change(function(){
                            var to_account_details = $(this).val().split("~");
                            console.log(to_account_details)
                            $(".display_to_account_name").text(to_account_details[1]);
                            $(".display_to_bank_name").text(to_account_details[0]);
                            $(".display_to_account_no").text(to_account_details[2]);
                            $(".display_to_account_currency").text(to_account_details[3]);
                            {{--  $(".display_currency").text(to_account_details[3]);  --}}


                            $(".beneficiary_details").show();

                            //MODAL DISPLAY
                            $("#beneficiary_details_bank_name").text(to_account_details[0]);
                            $("#beneficiary_details_bank_swift_code").text(to_account_details[5]);
                            $("#beneficiary_details_account_name").text(to_account_details[1]);
                            $("#beneficiary_details_account_number").text(to_account_details[2]);
                            $("#beneficiary_details_account_currency").text(to_account_details[3]);
                            $("#beneficiary_details_name").text(to_account_details[1]);
                            $("#beneficiary_details_address").text(to_account_details[4]);
                            $("#beneficiary_details_email").text(to_account_details[6]);
                        })

                        $("#customCheck1").click(function() {
                            if ($(this).is(":checked")) {
                                {{--  console.log("Checkbox is checked.");  --}}

                                $("#onetime_payment_details_form").toggle(500);
                                $("#payment_details_form").hide();
                            } else if ($(this).is(":not(:checked)")) {
                                {{--  console.log("Checkbox is unchecked.");  --}}
                                $("#payment_details_form").toggle(500);
                                $("#onetime_payment_details_form").hide();
                            }
                        })




                        {{--  var transfer_type = $("input[name='transfer_beneficiary_ontime']:checked").val();
                        console.log(transfer_type);  --}}

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

                        $(".select_onetime").css("display", "none");
                        $(".select_beneficiary").css("display", "block");

                        // $(".select_beneficiary").show();
                        //$(".select_onetime").hide();

                        var type = $("input[type='radio']:checked").val();

                        var beneficiary_type = $('input[name="transfer_beneficiary"]:checked').val();
                        {{--  console.log(beneficiary_type);  --}}

                        $("#amount").keyup(function() {
                            let amount = $("#amount").val()
                            $('.display_transfer_amount').text(formatToCurrency(parseFloat(amount)))
                        })

                        {{--  var radioValue = $("input[name='transfer_beneficiary_ontime']:checked").val();
                        console.log(radioValue);  --}}



                        // CHECK BOX CONSTRAINT SCHEDULE PAYMENT
                        $("#customCheck1").on("change", function() {
                            if ($(this).is(":checked")) {
                                {{-- console.log("Checkbox Checked!"); --}}
                                {{-- $('.schedule_payment_summary').show(); --}}
                                $("#schedule_payment_date").show(),
                                    $(".display_schedule_payment").text('YES'),
                                    $('#schedule_payment_contraint_input').val('TRUE'),
                                    $('#select_frequency').show();
                                $('#select_frequency_text').show();

                            } else {
                                {{-- console.log("Checkbox UnChecked!"); --}}
                                {{-- $(".schedule_payment_summary").hide(); --}}
                                $("#schedule_payment_date").val('')
                                $("#schedule_payment_date").hide()
                                $('.display_schedule_payment').text('NO')
                                $('.display_schedule_payment_date').text('N/A')

                                $('#schedule_payment_contraint_input').val('')
                                $('#schedule_payment_contraint_input').hide(),
                                    $('#schedule_payment_date').val(''),
                                    $('#select_frequency').hide();
                                $('#select_frequency_text').hide();
                            }
                        });

                        $("#onetime_customCheck1").on("change", function() {
                            if ($(this).is(":checked")) {
                                {{-- console.log("Checkbox Checked!"); --}}
                                {{-- $('.schedule_payment_summary').show(); --}}
                                $("#onetime_schedule_payment_date").show(),
                                    $(".display_schedule_payment").text('YES'),
                                    $('#schedule_payment_contraint_input').val('TRUE'),
                                    $('#select_frequency').show();
                                $('#select_frequency_text').show();

                            } else {
                                {{-- console.log("Checkbox UnChecked!"); --}}
                                {{-- $(".schedule_payment_summary").hide(); --}}
                                $("#schedule_payment_date").val('')
                                $("#onetime_schedule_payment_date").hide()
                                $('.display_schedule_payment').text('NO')
                                $('.display_schedule_payment_date').text('N/A')

                                $('#schedule_payment_contraint_input').val('')
                                $('#schedule_payment_contraint_input').hide(),
                                    $('#schedule_payment_date').val(''),
                                    $('#select_frequency').hide();
                                $('#select_frequency_text').hide();
                            }
                        });

                        $("#onetime_from_account").change(function(){
                            var onetime_from_account = $(this).val().split("~")
                            {{--  console.log(onetime_from_account);  --}}
                            $(".display_currency").text(onetime_from_account[3]);

                        })

                        $("#onetime_beneficiary_alias_name").keyup(function() {
                            var alias_name = $(this).val();
                            $(".display_to_account_name").text(alias_name);
                        })

                        $("#onetime_beneficiary_bank_name").change(function(){
                            var beneficiary_bank_name = $(this).val().split("~");
                            $(".display_to_bank_name").text(beneficiary_bank_name[1]);
                        })

                        $("#onetime_beneficiary_account_number").keyup(function() {
                            var beneficiary_account_number = $(this).val();
                            $(".display_to_account_no").text(beneficiary_account_number);
                        })

                        $("#onetime_beneficiary_account_currency").change(function() {
                            var beneficiary_account_currency = $(this).val().split("~");
                            $(".display_to_account_currency").text(beneficiary_account_currency[0]);
                        })

                        $("#onetime_amount").keyup(function(){
                            var beneficiary_amount = $(this).val();
                            $(".display_transfer_amount").text(formatToCurrency(parseFloat(beneficiary_amount)));
                        })

                        // NEXT BUTTON CLICK
                        $("#next_button").click(function() {

                            {{--  var type = $("input[type='radio']:checked").val();  --}}

                            var from_account = $('#from_account').val()
                            var to_account = $('#to_account').val()
                            var transfer_amount = $('#amount').val()
                            var category = $('#category').val()
                            var purpose = $('#purpose').val()
                            var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                            var schedule_payment_date = $('#schedule_payment_date').val();

                            var category_info = category.split("~")
                            $("#display_category").text(category_info[1])
                            $("#display_purpose").text(purpose)

                            if (from_account == '' || to_account == '' || transfer_amount == '' ||
                                category_info == '' || purpose == '') {
                                toaster('Field must not be empty', 'error');
                                return false
                            }

                            if (parseFloat(transfer_amount) < parseFloat(transfer_amount)) {
                                toaster('Insufficient account balance', 'error', 10000)
                                return false;
                            }
                            //set purpose and category values


                            $("#transaction_form").hide()
                            {{-- $(".other_card_right").hide() --}}
                            $("#related_information_display").hide()
                            $("#transaction_summary").show()
                            $('#print_button').hide();

                        });


                        $("#onetime_next_button").click(function() {

                            var onetime_from_account_ = $("#onetime_from_account").val().split("~");
                            console.log(onetime_from_account_);
                            var onetime_from_account = onetime_from_account_[2];
                            {{--  $("#display_from_account_name").text();  --}}
                            {{--  $("#display_from_account_no").text();  --}}

                            {{--  var beneficiary_type = $('input[name="transfer_beneficiary"]:checked').val();  --}}
                            {{--  console.log(beneficiary_type);  --}}

                            var beneficiary_name = $("#onetime_beneficiary_alias_name").val();
                            {{--  console.log(beneficiary_name);  --}}
                            {{--  $("#display_to_account_name").text();  --}}

                            var bank_name = $("#onetime_beneficiary_bank_name").val();
                            {{--  console.log(bank_name);  --}}
                            {{--  $("#online_display_beneficiary_bank_name").text();  --}}

                            var account_number = $("#onetime_beneficiary_account_number").val();
                            {{--  console.log(account_number);  --}}
                            {{--  $("#display_to_account_no").text();  --}}

                            var beneficiary_currency = $("#onetime_beneficiary_account_currency").val();
                            {{--  console.log(beneficiary_currency);  --}}
                            {{--  $("#display_currency").text();  --}}

                            var onetime_amount = $("#onetime_amount").val();
                            {{--  console.log(onetime_amount);  --}}
                            $("#display_transfer_amount").text();

                            var beneficiary_email = $("#onetime_beneficiary_phone").val();
                            {{--  console.log(beneficiary_email);  --}}

                            var expense_category_ = $("#onetime_category").val().split("~");
                            var expense_category = expense_category_[1];
                            {{--  console.log(expense_category);  --}}

                            $("#display_category").text(expense_category);

                            var transfer_purpose = $("#onetime_purpose").val();
                            {{--  console.log(transfer_purpose);  --}}
                            $("#display_purpose").text(transfer_purpose);

                            var selValue = $("input[name='transfer_beneficiary_ontime']:checked").val();
                            console.log(selValue);

                            if (onetime_from_account_ == '' || beneficiary_name == '' || bank_name == '' ||
                                account_number == '' || beneficiary_currency == '' || onetime_amount == '' ||
                                beneficiary_email == '' || expense_category_ == '' || transfer_purpose == '') {
                                toaster('Field must not be empty', 'error');
                                return false
                            }

                            {{--  if (parseFloat(transfer_amount) < parseFloat(transfer_amount)) {
                                toaster('Insufficient account balance', 'error', 10000)
                                return false;
                            }  --}}

                            $("#transaction_form").hide()
                            {{-- $(".other_card_right").hide() --}}
                            $("#related_information_display").hide()
                            $("#transaction_summary").show()
                            $('#print_button').hide();
                        })


                        $("#back_button").click(function(e){
                            e.preventDefault();

                            $("#transaction_form").show()
                            $("#transaction_summary").hide();

                        })

                        {{--  if($("#terms_and_conditions").is(":checked")){
                            $("#centermodal").show();
                        }else {
                            $("#centermodal").show();
                            toaster("Please accept Terms and conditions to continue", 'error', 600);
                        }  --}}




                        //
                        $('#confirm_modal_button').click(function(){
                            $('#user_pin').attr('readonly', false);
                            $('#user_pin').val('')
                            {{--  $("#confirm_modal_button").prop('disabled', true);  --}}
                        })

                        //
                        $('#user_pin').keyup(function(e) {
                            e.preventDefault();
                            let trans_pin = $('#user_pin').val()
                            if(trans_pin.length == 4){
                                {{--  $(this).attr('readonly', true);
                                Swal.fire(
                                    "YOU ENTERED 4 PINS",
                                    '',
                                    'success'


                                );  --}}

                                if ($('#customCheck1').is(':checked')){
                                    console.log("onetime beneficiary");

                                    var onetime_from_account_ = $("#onetime_from_account").val().split("~");
                                    console.log(onetime_from_account_);
                                    var onetime_from_account = onetime_from_account_[2];
                                    {{--  $("#display_from_account_name").text();  --}}
                                    {{--  $("#display_from_account_no").text();  --}}

                                    var beneficiary_type = $('input[name="transfer_beneficiary"]:checked').val();
                                    console.log(beneficiary_type);

                                    var beneficiary_name = $("#onetime_beneficiary_alias_name").val();
                                    console.log(beneficiary_name);
                                    {{--  $("#display_to_account_name").text();  --}}

                                    var bank_name_ = $("#onetime_beneficiary_bank_name").val().split("~");
                                    var bank_name = bank_name_[1];
                                    console.log(bank_name);
                                    {{--  $("#online_display_beneficiary_bank_name").text();  --}}

                                    var account_number = $("#onetime_beneficiary_account_number").val();
                                    console.log(account_number);
                                    {{--  $("#display_to_account_no").text();  --}}

                                    var beneficiary_currency_ = $("#onetime_beneficiary_account_currency").val().split("~");
                                    var beneficiary_currency = beneficiary_currency_[0];
                                    console.log(beneficiary_currency);
                                    {{--  $("#display_currency").text();  --}}

                                    var onetime_amount = $("#onetime_amount").val();
                                    console.log(onetime_amount);
                                    $("#display_transfer_amount").text();

                                    var beneficiary_email = $("#onetime_beneficiary_phone").val();
                                    console.log(beneficiary_email);

                                    var expense_category_ = $("#onetime_category").val().split("~");
                                    var expense_category = expense_category_[1];
                                    console.log(expense_category);

                                    $("#display_category").text(expense_category);

                                    var transfer_purpose = $("#onetime_purpose").val();
                                    console.log(transfer_purpose);
                                    $("#display_purpose").text(transfer_purpose);

                                    var transfer_type = $("input[name='transfer_beneficiary_ontime']:checked").val();
                                    console.log(transfer_type);

                                    var sec_pin = $('#user_pin').val()

                                    $.ajax({
                                        "type" : "POST",
                                        "url" : "onetime-beneficiary-local-bank-api",
                                        "dataType" : "application/json",
                                        "data" : {
                                            "from_account" : onetime_from_account ,
                                            "beneficiary_type" : transfer_type ,
                                            "beneficiary_name" : beneficiary_name ,
                                            "bank_name" : bank_name ,
                                            "to_account" : account_number ,
                                            "currency" : beneficiary_currency ,
                                            "amount" : onetime_amount ,
                                            "email" : beneficiary_email ,
                                            "category" : expense_category ,
                                            "purpose" : transfer_purpose,
                                            "sec_pin" : sec_pin
                                        },
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                    })


                                }else{

                                    console.log("saved beneficiary");

                                    var from_account_ = $("#from_account").val().split("~");

                                    var from_account = from_account_[2];
                                    console.log(from_account);

                                    var to_account_ = $("#to_account").val().split("~");
                                    console.log(to_account_);
                                    var bank_name = to_account_[0];
                                    var to_account = to_account_[2];
                                    var beneficiary_address = to_account_[4]
                                    var beneficiary_name = to_account_[1]
                                    console.log(to_account);
                                    console.log(bank_name);
                                    console.log(beneficiary_address);
                                    console.log(beneficiary_name);


                                    var amount = $("#amount").val();
                                    console.log(amount)

                                    var currency = to_account_[3];
                                    console.log(currency)

                                    var category_ = $("#category").val().split("~")
                                    var category = category_[1];
                                    console.log(category)

                                    var purpose = $("#purpose").val();
                                    console.log(purpose);

                                    var future_payement = $("#future_payement").val();
                                    console.log(future_payement);

                                    var beneficiary_type = $('input[name="transfer_beneficiary"]:checked').val();
                                    console.log(beneficiary_type);

                                    var sec_pin = $('#user_pin').val()

                                    $.ajax({
                                        'type': 'POST',
                                        'url': 'saved-beneficiary-local-bank-transfer-api',
                                        "datatype": "application/json",
                                        "data" : {
                                            "from_account" : from_account ,
                                            "bank_name" : bank_name ,
                                            "beneficiary_name" : beneficiary_name ,
                                            "beneficiary_address" : beneficiary_address ,
                                            "to_account" : to_account ,
                                            "amount" : amount ,
                                            "currency" : currency ,
                                            "category" : category ,
                                            "purpose" : purpose ,
                                            "future_payement" : future_payement ,
                                            "beneficiary_type" : beneficiary_type ,
                                            "sec_pin" : sec_pin
                                        },
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        success: function(response) {
                                            console.log(response);

                                            if (response.responseCode == '000') {
                                                {{-- toaster(response.message, 'success', 1000) --}}
                                                $('#confirm_button').hide();
                                                $('#back_button').hide();
                                                $('#print_receipt').show();
                                                $(".rtgs_card_right").hide();
                                                $(".success_gif").show();



                                            } else {
                                                {{--  toaster(response.message, 'error', 10000)  --}}

                                                $('#spinner').hide();
                                                $('#spinner-text').hide();
                                                $('#print_receipt').hide();
                                                $(".success_gif").hide();
                                                $(".rtgs_card_right").show();

                                                $('#confirm_transfer').show();
                                                {{--  $('#confirm_button').attr('disabled', false);  --}}


                                            }
                                        },
                                    })

                                }
                            }else{

                            }
                        });


                        var user_pin = $('#user_pin').val();
                        // POST TO API

                        {{--  $('#confirm_transfer').click(function(e) {
                            e.preventDefault();

                            var beneficiary_type = $("input[type='checkbox']:checked").val();


                            console.log(beneficiary_type);



                        });  --}}




                    });

                </script>

            @endsection
