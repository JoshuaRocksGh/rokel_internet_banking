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
                        INTERNATIONAL BANK TRANSFER
                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> Transfer </b> &nbsp; > &nbsp; <b class="text-danger">International Bank
                                Transfer</b>


                        </span>

                    </h6>

                </div>

                <div class="col-md-12 ">
                    <hr class="text-primary" style="margin: 0px;">
                </div>

            </div>
        </div>


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
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="display_to_account_name"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_bank_name"
                                                                id="display_to_bank_name"></span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>
                                                            <span
                                                                class="font-13 text-primary text-bold display_to_account_country"
                                                                id="display_to_account_country"> </span>




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

                                                    {{-- <tr>
                                                    <td>Enter Pin: </td>
                                                    <td>

                                                        <input type="text" name="user_pin"
                                                            class="form-control key hide_on_print" id="user_pin"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                    </td>
                                                </tr> --}}

                                                    <tr>

                                                        <td colspan="2">

                                                            <div class="alert alert-info form-control col-md-12"
                                                                role="alert">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        name="terms_and_conditions"
                                                                        id="terms_and_conditions">
                                                                    <label class="custom-control-label "
                                                                        for="terms_and_conditions">
                                                                        <b>
                                                                            By clicking, you agree with terms and
                                                                            conditions

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
                                        <div class="modal fade" id="centermodal" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title text-center text-primary"
                                                            id="myCenterModalLabel ">ENTER TRANSACTION PIN</h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>

                                                    </div>
                                                    <div class="modal-body transfer_pin_modal">

                                                        <div class="row">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-9  text-center">
                                                                <form action="#" autocomplete="off" aria-autocomplete="off">
                                                                    <input type="text" name="user_pin" maxlength="4"
                                                                        class="form-control key hide_on_print" id="user_pin"
                                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                    <br>
                                                                    <button
                                                                        class="btn btn-soft-primary waves-effect waves-light"
                                                                        type="button" id="transfer_pin"
                                                                        data-dismiss="modal">Submit</button>
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
                                                <button class="btn btn-primary btn-rounded " type="button"
                                                    id="confirm_modal_button" data-toggle="modal"
                                                    data-target="#centermodal">
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


                            <div class="col-md-7 rtgs_card m-2" id="transaction_form"
                                style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                <br><br><br>

                                <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                    aria-autocomplete="none">
                                    @csrf
                                    <div class="row container">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">

                                            <div class="row mb-2">
                                                <b class="col-md-12 text-primary mb-1">Account from which the money will
                                                    be tansfered
                                                    &nbsp; <span class="text-danger">*</span> </b>

                                                <select class="form-control" id="from_account" required>
                                                    <option value=""> -- Select Your Account -- </option>


                                                </select>


                                            </div>
                                            <hr>
                                            <div class="row mb-2">
                                                {{-- <div class="col-md-4">
                                             <label class="custom-control-label " for="customCheck1"><b class="text-primary">Onetime Transfer </b> </label>
                                            <input type="checkbox" class="custom-control-input"
                                                name="onetime_beneficiary_type" id="customCheck1">


                                                <div class="form-group mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="checkmeout0" name="onetime_check" value="CHECKED">
                                                        <label class="custom-control-label" for="checkmeout0"><b class="text-primary">Onetime Transfer </b> </label>
                                                    </div>
                                                </div>

                                        </div> --}}
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <b class="text-primary col-md-4 bene_details">Beneficiary
                                                            &nbsp;<span class="text-danger">*</span></b>
                                                        <select class="form-control col-md-8 bene_details" id="to_account"
                                                            required>
                                                            <option value=""><b>-- Select Beneficiary --</b> </option>
                                                            {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                Currenct Account ~ 004004110449140121 </option> --}}
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>


                                            <div id="saved_benefciary_form">
                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Country</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_country_name" readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Bank Name</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_bank_name" readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Swift Code</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_swift_code" readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Beneficiary Name</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_account_name" readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Beneficiary Address</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_address" readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Beneficiary Email</b>
                                                    <input class="form-control col-md-8 " type="text" id="beneficiary_email"
                                                        readonly>
                                                </div>

                                                <div class="row mb-2">
                                                    <b class="text-primary col-md-4">Beneficiary Telephone</b>
                                                    <input class="form-control col-md-8 " type="text"
                                                        id="beneficiary_telephone" readonly>
                                                </div>
                                                <hr>

                                                <div class="form-group row">

                                                    <b class="col-md-4 text-primary"> Transfer Type &nbsp; <span
                                                            class="text-danger">*</span></b>

                                                    <div class="row col-md-8 ">

                                                        <div
                                                            class="radio radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                            <input type="radio" id="inlineRadio1" value="NORMAL"
                                                                name="radioInline" checked>
                                                            <label for="inlineRadio1"> Normal </label>
                                                        </div>
                                                        <div
                                                            class="radio  radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                            <input type="radio" id="inlineRadio2" value="INVOICE"
                                                                name="radioInline">
                                                            <label for="inlineRadio2"> Invoice</label>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="form-group row attach_invoice">
                                                    <b class="text-primary col-md-4">Attach Invoice</b>

                                                    <div class="custom-file col-md-8 attach_file">
                                                        <input type="file" class="custom-file-input"
                                                            id="beneficiary_inputGroupFile04">
                                                        <label class="custom-file-label" for="inputGroupFile04">Choose
                                                            file</label>
                                                    </div>

                                                </div>
                                                <hr>

                                                <div class="form-group row">

                                                    <b class="col-4 text-primary"> Amount &nbsp; <span
                                                            class="text-danger">*</span></b>

                                                    <div class="col-2">
                                                        <div class="input-group mb-2">
                                                            <div class="input-group-prepend" style="margin-right:-1px;">
                                                                <div class="input-group-text display_from_account_currency">
                                                                    USD</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input type="text" class="form-control col-6" id="amount"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                        required>


                                                </div>



                                                <div class="form-group row">
                                                    <b class="text-primary col-md-4"> Type of Charges &nbsp;<span
                                                            class="text-danger">*</span></b>

                                                    <select class="form-control col-md-8 " id="charges_type" required>
                                                        <option value=""> -- Select Transfer Mode -- </option>
                                                        <option value="001~OUR">OUR</option>
                                                        <option value="002~SHARE">SHARE</option>
                                                        <option value="003~YOURS">YOURS </option>
                                                    </select>

                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <span class="col-md-8 charges_type_note"><b>Note:</b> &emsp;
                                                        <span class="text-danger" id="our_charges_type">Transfer will
                                                            go through Automatic Clearing House</span>
                                                        <span class="text-danger" id="share_charges_type">Transfer will
                                                        </span>
                                                        <span class="text-danger" id="yours_charges_type">Transfer
                                                            will be Instant</span>
                                                    </span>
                                                </div>

                                                <div class="form-group row mb-3">
                                                    <b class=" col-md-4 text-primary">Expense Category &nbsp; <span
                                                            class="text-danger">*</span></b>


                                                    <select class="form-control col-md-8" id="category" required>
                                                        <option value="">---Not Selected---</option>

                                                    </select>


                                                </div>

                                                <div class="form-group row mb-3">
                                                    <b class="col-md-4 text-primary ">Purpose of Transfer &nbsp;
                                                        <span class="text-danger">*</span></b>

                                                    <input type="text" class="form-control col-md-8" id="purpose"
                                                        placeholder="Enter purpose of transaction" required>

                                                </div>

                                                <div class="form-group row mb-2">
                                                    <b class="col-md-4 text-primary ">Value Date &nbsp;</b>

                                                    <input type="date" class="form-control col-md-8" id="future_payement"
                                                        required>

                                                </div>
                                            </div>


                                            <div class="form-group text-right yes_beneficiary">
                                                <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                    &nbsp; Next &nbsp;<i class="fe-arrow-right"></i> </button>

                                            </div>

                                            <div class="form-group row mb-3 no_beneficiary">
                                                <b class="col-md-4 text-primary ">

                                                </b>
                                                <div class="alert alert-warning form-control col-md-8" role="alert">
                                                    <i class="mdi mdi-alert-outline mr-2"></i>
                                                    <strong>warning</strong> No
                                                    beneficiary
                                                    <legend></legend>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>


                                </form>
                            </div>


                            <div class="col-md-4 m-2 rtgs_card_right d-none d-sm-block" id="related_information_display"
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
                                    {{-- <button type="button"
                                            class="btn btn-warning btn-xs waves-effect waves-light beneficiary_details col-md-3 text-primary"
                                            data-toggle="modal" data-target="#standard-modal">
                                            More Info</button> --}}
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
                                        {{-- <h6 class="text-danger text-bold col-md-7">0.08% of transfer amount</h6> --}}
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <h6 class="text-primary col-md-5">Please Note:</h6>
                                        {{-- <h6 class="text-danger col-md-7">ACH Tranfers should be above (SLL
                                                30,000,000.00)</h6> --}}
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        function formatToCurrency(amount) {
            return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
        };

        function from_account() {
            $.ajax({
                'type': 'GET',
                'url': 'get-my-account',
                "datatype": "application/json",
                success: function(response) {
                    {{-- console.log(response.data); --}}
                    let data = response.data
                    $.each(data, function(index) {
                        $('#from_account').append($('<option>', {
                            value: data[index].accountType + '~' + data[
                                    index].accountDesc + '~' + data[
                                    index].accountNumber + '~' + data[
                                    index].currency + '~' + data[index]
                                .availableBalance
                        }).text(data[index].accountType + '' + ' - ' + '' + data[index]
                            .accountNumber + '' + ' - ' + '' + data[index]
                            .currency + '' + ' - ' + '' + formatToCurrency(Number(data[index]
                                .availableBalance))));
                        //$('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                    });

                },

            })
        }

        function get_benerficiary() {
            $.ajax({
                'type': 'GET',
                'url': 'get-transfer-beneficiary-api?beneType=INTB',
                "datatype": "application/json",
                success: function(response) {
                    {{-- console.log(response.data); --}}
                    let data = response.data

                    if (!response.data) {

                    } else {
                        if (response.data.length > 0) {
                            $('.yes_beneficiary').show()
                            $('.no_beneficiary').hide()

                            $.each(data, function(index) {

                                $('#to_account').append($('<option>', {
                                    value: data[index].BANK_NAME + '~' +
                                        data[index].BANK_COUNTRY.toUpperCase() + '~' +
                                        data[index].BEN_ACCOUNT + '~' +
                                        data[index].BANK_SWIFT_CODE + '~' +
                                        data[index].NICKNAME + '~' +
                                        data[index].ADDRESS_1 + '~' +
                                        data[index].BANK_SWIFT_CODE + '~' +
                                        data[index].EMAIL + '~' +
                                        data[index].BEN_ACCOUNT_CURRENCY + '~' + JSON
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

        function expenseTypes() {
            $.ajax({
                "type": "GET",
                "url": "get-expenses",
                "datatype": "application/json",
                success: function(response) {
                    console.log(response.data);
                    let data = response.data;

                    $.each(data, function(index) {

                        $("#category").append($('<option>', {
                            value: data[index].expenseCode + '~' + data[index]
                                .expenseName
                        }).text(data[index].expenseName))

                    });
                },
            })
        }


        $(document).ready(function() {

            $('#spinner').hide(),
                $('#spinner-text').hide(),
                $('#print_receipt').hide(),
                $(".hide_invoice").hide()
            $("#transaction_summary").hide();
            $(".success_gif").hide();
            $(".attach_invoice").hide();
            $('.transfer_mode_note').hide();
            $('.no_beneficiary').hide();
            $('#our_charges_type').hide();
            $('#share_charges_type').hide();
            $('#yours_charges_type').hide();
            $('.charges_type_note').hide();


            setTimeout(function() {
                from_account();
                get_benerficiary();
                expenseTypes();
            }, 2000);


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


            $("#from_account").change(function() {
                var from_account_details = $(this).val().split("~");
                console.log(from_account_details);
                $(".display_from_account_name").text(from_account_details[1]);
                $(".display_from_account_no").text(from_account_details[2]);
                $(".display_from_account_amount").text(from_account_details[4]);
                $(".display_from_account_currency").text(from_account_details[3]);
                $(".display_currency").text(from_account_details[3]);

            });

            $("#to_account").change(function() {
                var to_account_details = $(this).val().split("~");
                console.log(to_account_details)
                $(".display_to_account_name").text(to_account_details[4]);
                $(".display_to_bank_name").text(to_account_details[0]);
                $(".display_to_account_no").text(to_account_details[2]);
                $(".display_to_account_currency").text(to_account_details[8]);
                $(".display_to_account_country").text(to_account_details[1])
                //
                $("#beneficiary_country_name").val(to_account_details[1]);
                $("#beneficiary_bank_name").val(to_account_details[0]);
                $("#beneficiary_swift_code").val(to_account_details[3]);
                $("#beneficiary_account_name").val(to_account_details[4]);
                $("#beneficiary_address").val(to_account_details[5]);
                $("#beneficiary_email").val(to_account_details[7]);
                {{-- $("#beneficiary_telephone").val(to_account_details[6]); --}}

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
            });

            $("#amount").keyup(function() {
                let amount = $("#amount").val()
                $('.display_transfer_amount').text(formatToCurrency(parseFloat(amount)))
            });


            $("#checkmeout0").click(function() {
                if ($(this).is(":checked")) {
                    {{-- console.log("Checkbox is checked."); --}}

                    {{-- $("#onetime_payment_details_form").toggle(500); --}}
                    {{-- $("#payment_details_form").hide(); --}}

                    $(".bene_details").hide();
                    $("#onetime_beneficiary_form").toggle(500);
                    $("#saved_benefciary_form").hide();


                } else if ($(this).is(":not(:checked)")) {
                    {{-- console.log("Checkbox is unchecked."); --}}
                    {{-- $("#payment_details_form").toggle(500); --}}
                    {{-- $("#onetime_payment_details_form").hide(); --}}

                    $(".bene_details").toggle(500);
                    $("#saved_benefciary_form").toggle(500);
                    $("#onetime_beneficiary_form").hide();


                }
            });
            $("#charges_type").change(function(){
                var transfer_charges_ = $(this).val().split('~');
                {{-- console.log(transfer_charges); --}}
                let transfer_charges = transfer_charges_[1];

                if ('OUR' == transfer_charges){

                    $('.charges_type_note').show();
                    $('#our_charges_type').show();
                    $('#share_charges_type').hide();
                    $('#yours_charges_type').hide();

                }else if ('SHARE' == transfer_charges){

                    $('.charges_type_note').show();
                    $('#share_charges_type').show();
                    $('#our_charges_type').hide();
                    $('#yours_charges_type').hide();

                }else if ('YOURS' == transfer_charges){

                    $('.charges_type_note').show();
                    $('#yours_charges_type').show();
                    $('#share_charges_type').hide();
                    $('#our_charges_type').hide();


                }else {
                    return false;
                }

            })

            $('.transfer_type').on("change", function(e) {
                e.preventDefault();

                var transfer_type = $('input[name="radioInline"]:checked').val();
                console.log(transfer_type);
                if (transfer_type == 'INVOICE') {
                    {{-- console.log('disable'); --}}

                    $(".attach_invoice").toggle(500);
                } else {
                    {{-- console.log('enable'); --}}
                    $(".attach_invoice").hide();
                    return false;
                }
            });

            $("#next_button").click(function(e){
                e.preventDefault();

                var from_account = $('#from_account').val();

                var to_account = $('#to_account').val();

                var amount = $('#amount').val();

                var charges_type = $('#charges_type').val();

                var purpose = $('#purpose').val();

                var category_ = $('#category').val().split('~');
                var category = category_[1];


                if (from_account == '' || to_account == '' || amount == '' ||
                    charges_type == '' || purpose == '' || category == '') {
                    toaster('Field must not be empty', 'error');
                    return false
                }else {

                    $('#display_category').text(category);
                    $('#display_purpose').text(purpose);
                    $("#transaction_summary").toggle(500);
                    $("#transaction_form").hide()
                }

            });

            $("#back_button").click(function(e) {
                e.preventDefault();

                $("#transaction_form").toggle(500)
                $("#transaction_summary").hide();

            });

            $('#confirm_modal_button').click(function(){

                if($("#terms_and_conditions").is(':checked')) {

                    var from_account_ = $("#from_account").val().split('~');
                    console.log(from_account_);

                    var to_account_ = $("#to_account").val().split('~');
                    console.log(to_account_);

                    var transfer_type = $('#beneficiary_inputGroupFile04').val();

                    var amount = $("#amount").val();
                    console.log(amount);

                    var transfer_mode_ = $("#transfer_mode").val().split('~');
                    console.log(transfer_mode_);

                    var future_payement = $("#future_payement").val();
                    console.log(future_payement);

                    var sec_pin = $('#user_pin').val();
                    console.log(sec_pin);

                    $.ajax({
                        "type" : "POST" ,
                        "url" : "international-bank-transfer-api" ,
                        "dataType": "application/json",
                        "data" : {

                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);

                            if (response.responseCode == "000") {

                                $('#confirm_modal_button').hide();
                                Swal.fire(
                                    '',
                                    response.message,
                                    'success'
                                );
                                $('#spinner').hide();
                                $('#spinner-text').hide();
                                $('#back_button').hide();
                                $('#print_receipt').show();
                                $("#related_information_display").removeClass("d-none d-sm-block");
                                $(".rtgs_card_right").hide();
                                $(".success_gif").show();



                            } else {


                                $('#confirm_modal_button').show();
                                $('#spinner').hide();
                                $('#spinner-text').hide();
                                $('#print_receipt').hide();
                                $(".success_gif").hide();

                                $(".rtgs_card_right").show();





                            }
                        },
                    })

                }else{

                    toaster('Accept terms & conditions to continue', 'error', 6000)

                    return false;
                }
            });

        })

    </script>
@endsection
