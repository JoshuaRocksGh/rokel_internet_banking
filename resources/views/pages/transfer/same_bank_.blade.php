@extends('layouts.master')


@section('styles')

<style>
    @media print {
        .hide_on_print {
            display: none;
        }

        ;
    }

    @page {
        size: A4;

            {
                {
                -- margin: 10px;
                --
            }
        }
    }

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
        }
    }


    @font-face {
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
    }
</style>


@endsection


@section('content')

<div class="container-fluid hide_on_print">
    <br>
    <!-- start page title -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-primary">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                SAME BANK TRANSFER

            </h4>
        </div>

        <div class="col-md-6 text-right">
            <h6>

                <span class="flaot-right">
                    <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-danger">Same Bank</b>


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
        <div class=" ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        {{-- RECEIPT --}}
                        @include("snippets.receipt")

                        <div class="form_process">

                            <div class="row">

                                {{-- SUMMARY FORM GOES HERE --}}

                                <div class="col-md-7 m-2" id="transaction_summary"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));display: none">
                                    <br><br>
                                    <div class="col-md-12">
                                        <div class="card border p-3 mt-4 mt-lg-0 rounded">
                                            <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                            <p class="display-4 text-center text-success success-message "></p>

                                            <div class="table-responsive table-striped table-bordered">
                                                <table class="table mb-0">

                                                    <tbody>
                                                        <tr class="success_gif" style="display: none">
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
                                                                    class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                    id="display_to_account_no"> </span>


                                                                {{-- <span class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                        id="online_display_beneficiary_alias_name"> </span> --}}

                                                                <span
                                                                    class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                                                    id="online_display_beneficiary_account_no"> </span>
                                                                {{-- &nbsp; | &nbsp; --}}
                                                                <span
                                                                    class="font-13 text-primary h3 online_display_beneficiary_account_currency"
                                                                    id="online_display_beneficiary_account_currency">
                                                                </span>

                                                                <span
                                                                    class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                                    id="online_display_beneficiary_email"> </span>

                                                                <span
                                                                    class="d-block font-13 text-primary text-bold online_display_beneficiary_phone"
                                                                    id="online_display_beneficiary_phone"> </span>


                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Amount:</td>
                                                            <td>
                                                                <span class="font-15 text-primary h3 display_currency"
                                                                    id="display_currency"> </span>
                                                                &nbsp;
                                                                <span
                                                                    class="font-15 text-primary h3 display_converted_amount"
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


                                                        {{-- <tr>
                                                            <td>Schedule Payment:</td>
                                                            <td>
                                                                <span
                                                                    class="font-13 text-primary h3 display_schedule_payment"
                                                                    id="display_schedule_payment">NO </span>
                                                                &nbsp; | &nbsp;
                                                                <span
                                                                    class="font-13 text-primary h3 display_schedule_payment_date"
                                                                    id="display_schedule_payment_date"> N/A
                                                                </span>
                                                            </td>
                                                        </tr> --}}


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
                                                                    id="display_posted_by">{{ session('userId') }}</span>
                                                            </td>
                                                        </tr>

                                                        {{-- <tr class="hide_on_print">
                                                            <td>Enter Pin: </td>
                                                            <td>

                                                                <input type="text" name="user_pin" class="form-control key " id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                            </td>
                                                        </tr> --}}

                                                        <tr>

                                                            <td colspan="2">

                                                                <div class="alert alert-info form-control col-md-12"
                                                                    role="alert">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="terms_and_conditions"
                                                                            name="terms_and_conditions"
                                                                            id="terms_and_conditions">
                                                                        <label class="custom-control-label "
                                                                            for="terms_and_conditions">
                                                                            <b>
                                                                                By checking this box, you agree to
                                                                                abide by the Terms and Conditions

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
                                            <br>
                                            <div class="form-group text-center">

                                                <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                        id="back_button"><i class="mdi mdi-reply-all-outline"></i>
                                                        &nbsp;Back</button> &nbsp; </span>
                                                <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                        id="confirm_transfer_button">
                                                        <span id="confirm_transfer">Confirm Transfer</span>
                                                        <span class="spinner-border spinner-border-sm mr-1"
                                                            role="status" id="spinner" aria-hidden="true"
                                                            style="display: none"></span>
                                                        <span id="spinner-text" style="display: none">Loading...</span>
                                                    </button></span>
                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                        type="button" style="display: none" id="print_receipt"
                                                        onclick="window.print()">Print
                                                        Receipt
                                                    </button></span>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->

                                </div>

                                <div class=" col-md-7 m-2" id="transaction_form"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                    <br>

                                    <form action="#" id="payment_details_form" autocomplete="off"
                                        aria-autocomplete="none">
                                        @csrf
                                        <div class="row container">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10">


                                                <div class="form-group row ">
                                                    <b class="col-md-12 text-primary">Account from which the money will
                                                        be
                                                        tansfered &nbsp <span class="text-danger">*</span></b>

                                                    <select class="form-control col-md-12" id="from_account" required>
                                                        <option disabled selected value=""> -- Select Account --
                                                        </option>
                                                    </select>

                                                </div>
                                                {{-- <input type="text" id="hidden_currency" > --}}

                                                <hr style="padding-top: 0px; padding-bottom: 0px;">

                                                <div class="form-group no_beneficiary" style="display: none">
                                                    <div class="alert alert-warning" role="alert">
                                                        <i class="mdi mdi-alert-outline mr-2"></i>
                                                        <strong>No
                                                            beneficiary found
                                                        </strong>

                                                    </div>
                                                </div>
                                                <div class="row ">

                                                    <div class="col-md-4">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                name="onetime_beneficiary_type" id="onetime_toggle">
                                                            <label class="custom-control-label " for="onetime_toggle">
                                                                <b class="text-primary">Onetime ?</b> </label>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-8">
                                                        <div class="form-group  row mb-1 select_beneficiary">


                                                            <select class="form-control col-md-12" id="to_account"
                                                                required>
                                                                <option disabled selected value=""> -- Select
                                                                    Beneficiary --</option>

                                                            </select>

                                                        </div>

                                                        <span class="badge badge-primary float-right"
                                                            style="cursor: pointer; display:none"><a
                                                                href="{{ url('add-local-bank-beneficiary') }}"
                                                                class="text-white" id="add_beneficiary_badge">Create
                                                                Beneficiary</a>
                                                        </span>
                                                    </div>
                                                    <hr>

                                                </div>

                                                <div class="row" id="saved_beneficiary_form">

                                                    <div class="col-md-12">

                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary A/C
                                                                Number</b>
                                                            <input type="text" class="form-control col-md-8 readOnly"
                                                                id="saved_beneficiary_account_number" readonly>
                                                        </div>

                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary Name</b>
                                                            <input type="text" class="form-control col-md-8 readOnly "
                                                                id="saved_beneficiary_name" readonly>
                                                        </div>



                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                                            <input type="text" class="form-control col-md-8 readOnly"
                                                                id="saved_beneficiary_email" readonly>
                                                        </div>




                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <input type="text"
                                                                        class="input-group-text account_currency "
                                                                        style="width: 80px;" readonly>
                                                                </div>

                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control " id="amount"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                    required>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-4 text-primary"> Cur / Rate / Amount</b>

                                                            <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <select name=""
                                                                        class="input-group-text select_conversion_currency"
                                                                        id="conversion_currency">

                                                                    </select>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <input type="text" class="form-control readOnly "
                                                                        id="convertor_rate" value="1.00"
                                                                        style="width: 100px;" readonly>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control"
                                                                    id="converted_amount" placeholder="Converted Amount"
                                                                    aria-label="converted_amount"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>


                                                        </div>


                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary">Purpose of Transfer
                                                                <span class="text-danger">*</span>
                                                            </b>

                                                            <input type="text" class="form-control col-md-8"
                                                                id="purpose" placeholder="Enter purpose of transaction"
                                                                class="form-group row mb-3">


                                                        </div>



                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary">Expense Category &nbsp;
                                                            </b>
                                                            <input type="hidden" value="Others" id="category_">


                                                            <select class="form-control col-md-8" id="category"
                                                                required>
                                                                <option disabled selected value="">-- Select expense
                                                                    category --
                                                                </option>

                                                            </select>


                                                        </div>


                                                        {{-- <div class="form-group row">
                                                                <b class="col-md-4 text-primary ">Future Payment &nbsp; </b>

                                                                <input type="date" class="form-control col-md-8"
                                                                    id="future_payement" required>
                                                            </div> --}}

                                                        {{-- <div class="row">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group mb-0">
                                                                        <input type="checkbox" class="custom-control-inputt"
                                                                            id="invoice_check">
                                                                        &nbsp; &nbsp; <label class="h6">Invoice Attachment ?
                                                                            <span class="badge badge-primary text-right"
                                                                                style="cursor: pointer" data-toggle="modal"
                                                                                data-target="#centermodal">View</span>
                                                                        </label>
                                                                        <span class="hide_invoice">
                                                                            <br>
                                                                            <input type="file" class="hide_invoice"
                                                                                id="invoice_attachment" required>
                                                                        </span>


                                                                    </div>

                                                                </div>
                                                            </div> --}}



                                                        {{-- <div class="row">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-8">

                                                                    <div class="form-group">

                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                id="onetime_toggle">
                                                                            <label class="custom-control-label"
                                                                                for="onetime_toggle">Schedule
                                                                                Payments</label>
                                                                        </div>
                                                                        <legend></legend>


                                                                        <input type="text" class="form-control"
                                                                            id="schedule_payment_contraint_input">

                                                                        <input type="date" class="form-control"
                                                                            id="schedule_payment_date">

                                                                    </div>
                                                                </div>
                                                            </div> --}}


                                                    </div>

                                                    <br>





                                                </div>


                                                <div class=" row form-group" id="onetime_beneficiary_form"
                                                    style="display: none">
                                                    <div class="col-md-12">

                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary A/C
                                                                Number</b>
                                                            <input type="text" class="form-control col-md-8 "
                                                                id="onetime_account_number"
                                                                placeholder="Enter Account Number"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                        </div>

                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary A/C Name</b>
                                                            <input type="text" class="form-control col-md-8 readOnly"
                                                                id="onetime_beneficiary_name" readonly>
                                                        </div>



                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                                            <input type="text" class="form-control col-md-8 "
                                                                id="onetime_beneficiary_email"
                                                                placeholder="Enter Beneficiary Email">
                                                        </div>




                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <input type="text"
                                                                        class="input-group-text account_currency"
                                                                        style="width: 80px;" readonly>

                                                                    {{-- <select name="" class="input-group-text"
                                                                            id="select_currency__">
                                                                            <option value="SLL" selected>SLL</option>

                                                                        </select> --}}
                                                                </div>

                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control "
                                                                    id="onetime_amount"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                    required>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-4 text-primary"> Cur / Rate / Amount</b>

                                                            <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <select name=""
                                                                        class="input-group-text select_conversion_currency"
                                                                        id="onetime_conversion_currency">
                                                                        {{-- <option value="SLL" selected>SLL</option>
                                                                            <option value="EUR">EURO</option>
                                                                            <option value="USD">USD</option> --}}
                                                                    </select>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <input type="text"
                                                                        class="form-control display_midrate"
                                                                        id="onetime_convertor_rate" value="1.00"
                                                                        style="width: 100px;" readonly>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <input type="text"
                                                                    class="form-control  display_converted_amount"
                                                                    id="onetime_converted_amount"
                                                                    placeholder="Converted Amount"
                                                                    aria-label="Converted Amount"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>


                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary">Purpose of Transfer
                                                                &nbsp; <span class="text-danger">*</span>
                                                            </b>

                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_purpose"
                                                                placeholder="Enter purpose of transaction">

                                                        </div>


                                                        <div class="form-group row">
                                                            <b class="col-md-4 text-primary">Expense Category &nbsp;
                                                            </b>


                                                            <select class="form-control col-md-8" id="onetime_category"
                                                                required>
                                                                <option value="" disabled selected>---Select expense
                                                                    category---
                                                                </option>

                                                            </select>


                                                        </div>






                                                        {{-- <div class="form-group row mb-3">
                                                                <b class="col-md-4 text-primary ">Future Payment &nbsp;

                                                                </b>

                                                                <input type="date" class="form-control col-md-8"
                                                                    id="onetime_future_payement" required>

                                                            </div> --}}





                                                    </div>

                                                </div>
                                                <legend></legend>

                                                <div class="form-group text-right yes_beneficiary">
                                                    <button class="btn btn-primary btn-rounded" type="button"
                                                        id="next_button">
                                                        &nbsp; Next &nbsp;<i class="fe-arrow-right"></i></button>
                                                </div>


                                            </div>




                                            <div class="col-md-1"></div>
                                    </form>



                                </div><!-- end col -->


                                {{-- RIGHT CARD --}}


                            </div>

                            <div class="col-md-4 m-2 d-none d-sm-block card_right"
                                style="display:none; background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230)); zoom: 0.9 ;">

                                <div class=" col-md-12">
                                    <br><br>
                                    <div class="card card-body">
                                        <h4 class="text-primary">Sender Acc. Info</h4>
                                        <hr class="mt-0">
                                        <div class="row ">
                                            <p class="col-md-5">Sender Name:</p>
                                            <span class="text-primary display_from_account_name col-md-7"></span>

                                            <p class="col-md-5">Sender Account:</p>
                                            <span class="text-primary display_from_account_no col-md-7"></span>

                                            <p class="col-md-5">Available Balance:</p>
                                            <span class="text-primary display_from_account_amount col-md-7"></span>

                                            <p class="col-md-5">Account Currency:</p>
                                            <span class="text-primary display_from_account_currency col-md-7"></span>
                                        </div>

                                        <h4 class="text-primary">Receiver Acc. Info</h4>
                                        <hr class="mt-0">
                                        <div class="row">
                                            <p class="col-md-5">Receiver Name:</p>
                                            <span class="text-primary display_to_account_name col-md-7"></span>

                                            <p class="col-md-5">Receiver Account:</p>
                                            <span class="text-primary display_to_account_no col-md-7"></span>

                                            <p class="col-md-5">Account Currency:</p>
                                            <span class="text-primary display_to_account_currency col-md-7"></span>
                                        </div>

                                        <hr>
                                        <div class="row">
                                            <p class="col-md-5 mt-2 text-primary">Transfer Amount:</p>
                                            <h4 class="row col-md-7">
                                                <span class="text-danger display_transfer_currency col-md-4"></span>
                                                <span class="text-danger display_amount col-md-8"></span>

                                            </h4>

                                            <p class="col-md-5">Currency Rate:</p>
                                            <span class="text-primary display_midrate col-md-7"></span>

                                            <p class="col-md-5">Converted Amount:</p>
                                            <span class="text-primary display_converted_amount col-md-7"></span>
                                        </div>

                                        <br>

                                        {{-- <div class="row">
                                                <h6 class="text-primary col-md-5">Transaction Fee:</h6>
                                                <span class="text-danger text-bold col-md-7">0.10% of transfer amount</span>
                                            </div> --}}

                                        {{-- <br>
                                            <div class="row">
                                                <h6 class="text-primary col-md-5">Please Note:</h6>
                                                <span class="text-danger col-md-7">RTGS Tranfers should be above (SLL
                                                    50,000,000.00)</span>
                                            </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> <!-- end card-body -->

            <div class="___class_+?207___">



                <div class="___class_+?208___">


                </div> <!-- end col -->

                {{-- <div class="col-md-5 text-center">
                                <img src="{{ asset('land_asset/images/same-bank.gif') }}" class="img-fluid" />
            </div> <!-- end col --> --}}


            <!-- end row -->
        </div>

        <div class="___class_+?209___" id="">
        </div>

        @include("snippets.pinCodeModal")
        {{-- IMAGE MODAL --}}

        {{--
        <!-- Center modal content -->
        <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true" style="zoom: 0.9;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-primary" id="myCenterModalLabel">Aquiring a Savings
                            Account</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
                    </div>
                    <div class="modal-body">
                        <div class=" ">
                            <img src="" id="display_invoice_attachment" class="img-fluid" />
                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal --> --}}



        <!-- Modal -->
        <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                        <div class="modal-header">
                            <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>

                        <div class="modal-body">

                            From: <span class="font-13 text-primary" id="display_from_account"> &nbsp
                            </span><br><br>
                            To: <span class="font-13 text-muted" id="display_to_account"> &nbsp
                            </span><br><br>
                            Schedule Payments: <span class="font-13 text-muted" id="display_payments"> &nbsp
                            </span><br><br>
                            Amount: <span class="font-13 text-muted" id="display_amount"> &nbsp
                            </span><br><br>
                            Naration: <span class="font-13 text-muted" id="display_naration"> &nbsp
                            </span><br><br>
                            Transaction fee: <span class="font-13 text-muted" id="display_trasaction_fee">
                            </span><br><br>
                            Total: <span class="font-13 text-muted" id="display_total"> &nbsp
                            </span><br><br>

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


@endsection


@section('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script> --}}
<script>
    const customerType = @json(session()->get('customerType'))
</script>
<script src="{{ asset("assets/js/functions/validateEmail.js") }}"></script>
<script src="{{ asset("assets/js/functions/currencyConverter.js") }}"></script>
<script src="{{ asset("assets/js/pages/transfer/sameBank.js") }}"></script>

@endsection
