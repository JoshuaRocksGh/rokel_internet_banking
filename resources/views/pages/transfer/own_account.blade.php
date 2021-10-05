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
    }

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
        }

        /* ... the rest of the rules ... */
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


<div class="container-fluid">
    <br>
    <!-- start page title -->
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-primary">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                OWN ACCOUNT TRANSFER

            </h4>
        </div>

        <div class="col-md-6 text-right">
            <h6>

                <span class="flaot-right">
                    <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-danger">Own Account</b>


                </span>

            </h6>

        </div>

        <div class="col-md-12 ">
            <hr class="text-primary" style="margin: 0px;">
        </div>

    </div>
</div>



<div class="row">
    <div class="col-12 py-2 px-5">
        <div class="row">
            <div class="col-md-12">
                @include("snippets.receipt")
                @include("snippets.pinCodeModal")
                <div class="form_process">
                    <div class="row">
                        @include('snippets.transactionSummary')
                        <div class="col-md-7 site-card m-2" id="transaction_form">
                            <div class=" container">
                                <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="off">
                                    @csrf
                                    <br>
                                    <div class="row justify-content-center">
                                        <div class="col-md-">
                                            <div class="form-group row ">
                                                <b class="col-md-4 text-primary mb-1">Transfer Account
                                                    &nbsp; <span class="text-danger">*</span> </b>
                                                <select class="form-control col-md-8 mb-2" id="from_account" required>
                                                    <option selected disabled value=""> --- Select Account ---
                                                    </option>
                                                    @include("snippets.accounts")

                                                </select>

                                            </div>
                                            <legend></legend>

                                            <div class="form-group row">
                                                <label for="to_account" class="col-md-4"><b
                                                        class="text-primary">Recipient Account
                                                        &nbsp;</b><span class="text-danger">*</span></label>
                                                <select class="form-control col-md-8 mb-2" id="to_account" required>
                                                    <option selected disabled value="">--- Select Account ---
                                                    </option>
                                                    @include("snippets.accounts")
                                                </select>
                                            </div>
                                            <div class="form-group row">

                                                <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                        class="text-danger">*</span></b>

                                                <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                    <div class="input-group-prepend">
                                                        <input type="text" class="input-group-text "
                                                            id="select_currency" style="width: 80px;" readonly>
                                                        {{-- <select name="" class="input-group-text select_currency" id="select_currency">
                                                                                 </select> --}}
                                                    </div>

                                                    &nbsp;&nbsp;
                                                    <input type="text" class="form-control " id="amount"
                                                        placeholder="Enter Amount"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                        required>
                                                </div>


                                            </div>

                                            <div class="form-group row">

                                                <b class="col-4 text-primary"> Cur / Rate / Converted
                                                    Amount</b>

                                                <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                    <div class="input-group-prepend">
                                                        <select name="" class="input-group-text select_currency"
                                                            id="select_currency__">
                                                        </select>
                                                    </div>
                                                    &nbsp;&nbsp;
                                                    <div class="input-group-prepend">
                                                        <input type="text" class="form-control readOnly"
                                                            id="convertor_rate" placeholder="0.00" readonly
                                                            style="width: 100px;">
                                                    </div>
                                                    &nbsp;&nbsp;
                                                    <input type="text" class="form-control readOnly"
                                                        id="converted_amount" placeholder="Converted Amount"
                                                        aria-label="Converted Amount" aria-describedby="basic-addon1"
                                                        readonly>
                                                </div>


                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4"><b class="text-primary">Purpose of
                                                        Transfer &nbsp;</b><span
                                                        class="text-danger">*</span></b></label>

                                                <input type="text" class="form-control col-md-8 mb-2" id="purpose"
                                                    value="" placeholder="Enter purpose of transfer" autocomplete="off">

                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4"><b class="text-primary">Expense
                                                        Category
                                                        &nbsp;</b></label>
                                                <input type="hidden" value="Others" id="category_">
                                                <select class="form-control col-md-8 mb-2" id="category" required>
                                                    <option selected disabled value="">Select Category
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="form-group text-right m-2">
                                                <button class="btn btn-primary btn-rounded" type="submit"
                                                    id="next_button">
                                                    &nbsp; Next &nbsp;<i class="fe-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <br><br>
                        <div class="col-md-4 m-2 site-card">
                            <h4 class="text-primary">Sender Acc. Info</h4>
                            <hr class="mt-0">
                            <div class="row">
                                <p class="col-md-5">Account Description:</p>
                                <span class="text-primary display_from_account_name col-md-7"></span>

                                <p class="col-md-5">Account Number:</p>
                                <span class="text-primary display_from_account_no col-md-7"></span>

                                <p class="col-md-5">Available Balance:</p>

                                <span class="text-primary display_from_account_amount col-md-7"></span>


                                <p class="col-md-5">Account Currency:</p>
                                <span class="text-primary display_from_account_currency col-md-7"></span>
                            </div>

                            <h4 class="text-primary">Receiver Acc. Info</h4>
                            <hr class="mt-0">
                            <div class="row">
                                <p class="col-md-5">Account Number:</p>
                                <p class="text-primary display_to_account_no col-md-7"></p>

                                <p class="col-md-5">Account Balance:</p>
                                <p class="text-primary display_to_account_amount col-md-7"></p>

                                <p class="col-md-5">Account Currency:</p>
                                <p class="text-primary display_to_account_currency col-md-7"></p>
                            </div>

                            <hr>
                            <div class="row">
                                <p class="text-primary col-md-5 mt-2">Transfer Amount:</p>
                                <h4 class="text-danger text-bold col-md-7 ">
                                    <span class="display_from_account_currency mt-0"></span>
                                    &nbsp;
                                    <b class="mt-0" style="font-style: 16px"><span
                                            class="display_transfer_amount"></span></b>
                                </h4>
                            </div>
                            <div class="row">
                                <h6 class="col-md-5">Currency Rate:</h6>
                                <span class="text-primary display_midrate col-md-7"></span>

                                <h6 class="col-md-5">Converted Amount:</h6>
                                <span class="text-primary display_converted_amount col-md-7"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8  card-body">
                <hr>
            </div>

            <div class="col-md-2"></div>

        </div> <!-- end card-body -->


        {{-- <!-- Modal -->
        <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                Details</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
        </div><!-- /.modal --> --}}
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section("scripts")
<script src="{{ asset("assets/js/functions/currencyConverter.js") }}"></script>
<script src="{{ asset("assets/js/pages/transfer/ownAccount.js") }}"> </script>
@endsection