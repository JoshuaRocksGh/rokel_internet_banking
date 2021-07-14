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



        <div class="container-fluid hide_on_print">
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


                            <div class="receipt">
                                <div class="container card card-body">

                                    <div class="container">
                                        <div class="">
                                            <div class="col-md-12 col-md-offset-3 body-main">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-4 "> <img class="img " alt="InvoIce Template"
                                                                src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_LIGHT')) }} "
                                                                style="zoom: 0.6" /> </div>
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-4 text-right">
                                                            <h4 class="text-primary"><strong>ROKEL COMMERCIAL BANK</strong>
                                                            </h4>
                                                            <p>25-27 Siaka Stevens St</p>
                                                            <p> Freetown, Sierra Leone</p>
                                                            <p>rokelsl@rokelbank.sl</p>
                                                            <p>(+232)-76-22-25-01</p>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="page-header">
                                                        <h2><span id="personal_transfer_receipt">Transfer Receipt</span>
                                                            <span id="coporate_transfer_approval">Transaction Awaiting
                                                                Approval</span>
                                                        </h2>
                                                    </div>
                                                    <br>
                                                    {{-- <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <h2>INVOICE</h2>
                                                            <h5>04854654101</h5>
                                                        </div>
                                                    </div> --}}
                                                    <br />
                                                    {{-- <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th><h5>Description</h5></th>
                                                                    <th><h5>Further Details</h5></th>
                                                                    <th><h5>Amount</h5></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-md-9">
                                                                        From Account Number<br>
                                                                        004004110449140121
                                                                    </td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 50,000 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">
                                                                        To Account Number<br>
                                                                        004004110445350137
                                                                    </td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 5,200 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">Category Type</td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 25,000 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9">Purpose of Transfer</td>
                                                                    <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> 2,200 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-md-9"> Transfer Amount</td>
                                                                    <td class="text-right">
                                                                        <p> <strong>Shipment and Taxes:</strong> </p>
                                                                        <p> <strong>Total Amount: </strong> </p>
                                                                        <p> <strong>Discount: </strong> </p>
                                                                        <p> <strong>Payable Amount: </strong> </p>
                                                                    </td>
                                                                    <td>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 500 </strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 82,900</strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 3,000 </strong> </p>
                                                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 79,900</strong> </p>
                                                                    </td>
                                                                </tr>
                                                                <tr style="color: #F81D2D;">
                                                                    <td class="text-right">
                                                                        <h4><strong>Total:</strong></h4>
                                                                    </td>
                                                                    <td class="text-left">
                                                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> 79,900 </strong></h4>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> --}}
                                                    <div class="table-responsive">
                                                        <table class="table mb-0">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    {{-- <th>#</th> --}}
                                                                    <th>Description</th>
                                                                    <th class="text-right">Further Details</th>
                                                                    {{-- <th>Amount </th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    {{-- <th scope="row">1</th> --}}
                                                                    <td>Transfer From Account Number</td>
                                                                    <td class="text-right"><span
                                                                            id="from_account_receipt"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">1</th> --}}
                                                                    <td>Type of Transfer</td>
                                                                    <td class="text-right"><span
                                                                            id="type_of_transfer"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">1</th> --}}
                                                                    <td>Receiver Bank Name</td>
                                                                    <td class="text-right"><span
                                                                            id="receiver_bank_name"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>

                                                                <tr>
                                                                    {{-- <th scope="row">1</th> --}}
                                                                    <td>Receiver Account Name</td>
                                                                    <td class="text-right"><span
                                                                            id="receiver_account_name"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">2</th> --}}
                                                                    <td>Receiver Account Number</td>
                                                                    <td class="text-right"><span
                                                                            id="receiver_account_number"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">3</th> --}}
                                                                    <td>Transfer Category</td>
                                                                    <td class="text-right"><span
                                                                            id="category_receipt"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">3</th> --}}
                                                                    <td>Transfer Purpose</td>
                                                                    <td class="text-right"><span
                                                                            id="purpose_receipt"></span></td>
                                                                    {{-- <td></td> --}}
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">3</th> --}}
                                                                    <td>Amount</td>
                                                                    {{-- <td></td> --}}
                                                                    <td class="text-right"><strong>(<span
                                                                                class="receipt_currency"></span>)
                                                                            &nbsp;<span id="amount_receipt"></span></strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    {{-- <th scope="row">3</th> --}}
                                                                    <td>Transaction Fee </td>
                                                                    {{-- <td></td> --}}
                                                                    <td class="text-right"><strong>(<span
                                                                                class="receipt_currency"></span>) &nbsp;
                                                                            15.00</strong></td>
                                                                </tr>
                                                                {{-- <tr>
                                                                    <th scope="row">3</th>
                                                                    <td><strong>Total Amount</strong> </td>
                                                                    <td></td>
                                                                    <td><strong><span
                                                                                id="total_amount_receipt"></span></strong>
                                                                    </td>
                                                                </tr> --}}
                                                                <tr>
                                                                    {{-- <th scope="row">3</th> --}}
                                                                    {{-- <td></td> --}}
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div> <!-- end table-responsive-->
                                                    <br>
                                                    <div>
                                                        <div class="col-md-12">
                                                            <p><b>Date Posted :</b> {{ date('d F, Y') }}</p> <br /> <br />
                                                            <p><b>Posted By : {{ session('userId') }}</b></p>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-md-4"></div>
                                                        <div class="col-md-4">
                                                            <button
                                                                class="btn btn-light btn-rounded hide_on_print text-center"
                                                                type="button" onclick="window.print()">Print
                                                                Receipt
                                                            </button>


                                                        </div>
                                                        <div class="col-md-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_process">

                                <div class="row">

                                    <div class="col-md-7  m-2" id="transaction_summary"
                                        style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
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
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="terms_and_conditions"
                                                                                id="terms_and_conditions">
                                                                            <label class="custom-control-label "
                                                                                for="terms_and_conditions">
                                                                                <b>
                                                                                    By checking this box, you agree to to
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
                                                                        <form action="#" autocomplete="off"
                                                                            aria-autocomplete="off">
                                                                            <input type="text" name="user_pin" maxlength="4"
                                                                                class="form-control key hide_on_print"
                                                                                id="user_pin"
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
                                                            id="back_button"><i class="mdi mdi-reply-all-outline"></i>&nbsp;
                                                            Back</button> &nbsp;
                                                    </span>
                                                    <span>
                                                        &nbsp;
                                                        <button class="btn btn-primary btn-rounded " type="button"
                                                            id="confirm_modal_button" data-toggle="modal"
                                                            data-target="#centermodal">
                                                            <span id="confirm_transfer">Confirm Transfer</span>
                                                            <span class="spinner-border spinner-border-sm mr-1"
                                                                role="status" id="spinner" aria-hidden="true"></span>
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

                                    <div class="col-md-7 m-2" id="transaction_form"
                                        style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                        <br>


                                        <form action="#" class="select_beneficiary" id="payment_details_form"
                                            autocomplete="off" aria-autocomplete="none">
                                            @csrf


                                            <div class="row container">
                                                <div class="col-md-1"></div>
                                                <div class="col-md-10">

                                                    <div class="row mb-2">
                                                        <b class="col-md-12 text-primary mb-1">Account from which the money
                                                            will
                                                            be tansfered
                                                            &nbsp; <span class="text-danger">*</span> </b>

                                                        <select class="form-control" id="from_account" required>
                                                            <option value=""> -- Select Your Account --
                                                            </option>


                                                        </select>
                                                    </div>
                                                    <hr>
                                                    <div class="row mb-2">
                                                        <div class="col-md-4">
                                                            {{-- <label class="custom-control-label " for="customCheck1"><b class="text-primary">Onetime Transfer </b> </label>
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="onetime_beneficiary_type" id="customCheck1"> --}}


                                                            <div class="form-group mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="checkmeout0" name="onetime_check"
                                                                        value="CHECKED">
                                                                    <label class="custom-control-label" for="checkmeout0"><b
                                                                            class="text-primary">Onetime </b> </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row">

                                                                <select class="form-control col-md-12 bene_details"
                                                                    id="to_account" required>
                                                                    <option value=""><b>-- Select Beneficiary --</b>
                                                                    </option>
                                                                    {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                            Currenct Account ~ 004004110449140121 </option> --}}
                                                                </select>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <div id="saved_benefciary_form">

                                                        <div class="row mb-1">
                                                            <b class="text-primary col-md-4">Transfer Bank</b>
                                                            <input class="form-control col-md-8 readOnly" type="text"
                                                                id="beneficiary_bank_name" readonly>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <b class="text-primary col-md-4">Beneficiary A/C Number</b>
                                                            <input class="form-control col-md-8 readOnly" type="text"
                                                                id="beneficiary_account_number" readonly>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <b class="text-primary col-md-4">Beneficiary Name</b>
                                                            <input class="form-control col-md-8 readOnly" type="text"
                                                                id="beneficiary_account_name" readonly>
                                                        </div>

                                                        <div class="row mb-1">
                                                            <b class="text-primary col-md-4">Beneficiary Email</b>
                                                            <input class="form-control col-md-8 readOnly" type="text"
                                                                id="beneficiary_email" readonly>
                                                        </div>


                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary"> Attach Document&nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="row col-md-8 ">



                                                                <div
                                                                    class="radio  radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                                    <input type="radio" id="inlineRadio2" value="INVOICE"
                                                                        name="radioInline">
                                                                    <label for="inlineRadio2"> YES</label>
                                                                </div>

                                                                <div
                                                                    class="radio radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                                    <input type="radio" id="inlineRadio1" value="NORMAL"
                                                                        name="radioInline" checked>
                                                                    <label for="inlineRadio1"> NO </label>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="form-group row attach_invoice">
                                                            <b class="text-primary col-md-4">Attach Invoice</b>

                                                            <div class="custom-file col-md-8 attach_file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="beneficiary_inputGroupFile04">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile04">Choose
                                                                    file</label>
                                                            </div>

                                                        </div>


                                                        <div class="form-group row">
                                                            <b class="text-primary col-md-4"> Transfer Mode &nbsp;<span
                                                                    class="text-danger">*</span></b>

                                                            <select class="form-control col-md-8 " id="transfer_mode"
                                                                required>
                                                                <option value=""> -- Select Transfer Mode -- </option>
                                                                <option value="001~ACH">ACH</option>
                                                                <option value="002~RTGS">RTGS</option>
                                                                <option value="003~INSTANT">INSTANT </option>
                                                            </select>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4"></div>
                                                            <span class="col-md-8 transfer_mode_note"><b>Note:</b> &emsp;
                                                                <span class="text-danger" id="ach_transfer_mode">Transfer
                                                                    will
                                                                    go through Automatic Clearing House</span>
                                                                <span class="text-danger" id="rtgs_transfer_mode">Transfer
                                                                    will
                                                                </span>
                                                                <span class="text-danger"
                                                                    id="instant_transfer_mode">Transfer
                                                                    will be Instant</span>
                                                            </span>
                                                        </div>



                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <input type="text"
                                                                        class="input-group-text select_currency "
                                                                        id="select_currency" style="width: 80px;" readonly>

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
                                                                    <select name="" class="input-group-text select_currency"
                                                                        id="select_currency_">
                                                                        {{-- <option value="SLL" selected>SLL</option>
                                                                    <option value="EUR">EURO</option>
                                                                    <option value="USD">USD</option> --}}
                                                                    </select>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <input type="text" class="form-control readOnly "
                                                                        value="1.00" style="width: 100px;">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control"
                                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>


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

                                                            <input type="date" class="form-control col-md-8"
                                                                id="future_payement" required>

                                                        </div>

                                                    </div>

                                                    <div id="onetime_beneficiary_form">
                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Transfer Bank &nbsp; <span
                                                                    class="text-danger">*</span></b>
                                                            {{-- <input class="form-control col-md-8 " type="text" id="onetime_beneficiary_bank_name" > --}}
                                                            <select class="form-control col-md-8"
                                                                id="onetime_beneficiary_bank_name" required>
                                                                <option value="">---Not Selected---</option>

                                                            </select>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Beneficiary A/C Number &nbsp;
                                                                <span class="text-danger">*</span></b>
                                                            <input class="form-control col-md-8" type="text"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                id="onetime_beneficiary_account_number" required>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Beneficiary A/C Currency &nbsp;
                                                                <span class="text-danger">*</span></b>
                                                            {{-- <input class="form-control col-md-8" type="text"
                                                            id="onetime_beneficiary_account_currency" required> --}}
                                                            <select class="form-control col-md-8"
                                                                id="onetime_beneficiary_account_currency" required>
                                                                <option value="">---Not Selected---</option>

                                                            </select>
                                                        </div>

                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Beneficiary Name &nbsp; <span
                                                                    class="text-danger">*</span></b>
                                                            <input class="form-control col-md-8" type="text"
                                                                id="onetime_beneficiary_account_name">
                                                        </div>
                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Beneficiary Address&nbsp; <span
                                                                    class="text-danger">*</span></b>
                                                            <input class="form-control col-md-8" type="text"
                                                                id="onetime_beneficiary_account_address">
                                                        </div>

                                                        <div class="row mb-2">
                                                            <b class="text-primary col-md-4">Beneficiary Email &nbsp; <span
                                                                    class="text-danger">*</span></b>
                                                            <input class="form-control col-md-8" type="email"
                                                                id="onetime_beneficiary_email">
                                                        </div>
                                                        {{-- <hr> --}}


                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary"> Transfer Type &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="row col-md-8 ">
                                                                {{-- <div
                                                                class="radio radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                                <input type="radio" id="onetime_normal_transfer_type" value="NORMAL" name="radioInline" checked>
                                                                <label for="onetime_normal_transfer_type">Normal</label>
                                                            </div>
                                                            <div
                                                                class="radio radio-primary form-check-inline m-1 col-md-5 transfer_type">
                                                                <input type="radio" id="onetime_invioce_transfer_type"
                                                                    value="INVOICE" name="radioInline">
                                                                <label for="onetime_invioce_transfer_type">Invoice</label>
                                                            </div> --}}


                                                                <div
                                                                    class="radio  radio-primary form-check-inline m-1 col-md-5 onetime_transfer_type">
                                                                    <input type="radio" id="onetime_inlineRadio2"
                                                                        value="INVOICE" name="onetime_radioInline">
                                                                    <label for="inlineRadio2"> YES</label>
                                                                </div>

                                                                <div
                                                                    class="radio radio-primary form-check-inline m-1 col-md-5 onetime_transfer_type">
                                                                    <input type="radio" id="onetime_inlineRadio1"
                                                                        value="NORMAL" name="onetime_radioInline" checked>
                                                                    <label for="inlineRadio1"> NO </label>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="form-group row attach_invoice">
                                                            <b class="text-primary col-md-4">Attach Invoice</b>

                                                            <div class="custom-file col-md-8 attach_file">
                                                                <input type="file" class="custom-file-input"
                                                                    id="onetime_inputGroupFile04">
                                                                <label class="custom-file-label"
                                                                    for="inputGroupFile04">Choose
                                                                    file</label>
                                                            </div>

                                                        </div>
                                                        {{-- <hr> --}}

                                                        <div class="form-group row">
                                                            <b class="text-primary col-md-4"> Transfer Mode &nbsp;<span
                                                                    class="text-danger">*</span></b>

                                                            <select class="form-control col-md-8 "
                                                                id="onetime_transfer_mode" required>
                                                                <option value=""> -- Select Transfer Mode -- </option>
                                                                <option value="001~ACH">ACH</option>
                                                                <option value="002~RTGS">RTGS</option>
                                                                <option value="003~INSTANT">INSTANT </option>
                                                            </select>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-4"></div>
                                                            <span class="col-md-8 onetime_transfer_mode_note"><b>Note:</b>
                                                                &emsp;
                                                                <span class="text-danger"
                                                                    id="onetime_ach_transfer_mode">Transfer will
                                                                    go through Automatic Clearing House</span>
                                                                <span class="text-danger"
                                                                    id="onetime_rtgs_transfer_mode">Transfer will
                                                                </span>
                                                                <span class="text-danger"
                                                                    id="onetime_instant_transfer_mode">Transfer
                                                                    will be Instant</span>
                                                            </span>
                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <input type="text"
                                                                        class="input-group-text select_currency "
                                                                        id="onetime_select_currency" style="width: 80px;"
                                                                        readonly>
                                                                    {{-- <select name="" class="input-group-text select_currency" id="select_currency" disabled>

                                                                        </select> --}}
                                                                </div>

                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control " id="onetime_amount"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                    required>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row">

                                                            <b class="col-4 text-primary"> Cur / Rate / Amount</b>

                                                            <div class="input-group mb-1 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <select name="" class="input-group-text select_currency"
                                                                        id="onetime_select_currency_">
                                                                        {{-- <option value="SLL" selected>SLL</option>
                                                                    <option value="EUR">EURO</option>
                                                                    <option value="USD">USD</option> --}}
                                                                    </select>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <input type="text" class="form-control readOnly "
                                                                        value="1.00" style="width: 100px;">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control"
                                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                            </div>


                                                        </div>


                                                        {{-- <div class="form-group row">

                                                            <b class="col-4 text-primary"> Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="col-2">
                                                                <div class="input-group mb-2">
                                                                    <div class="input-group-prepend"
                                                                        style="margin-right:-1px;">
                                                                        <div
                                                                            class="input-group-text display_from_account_currency">
                                                                            CUR</div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <input type="text" class="form-control col-6"
                                                                id="onetime_amount"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>


                                                        </div> --}}

                                                        <div class="form-group row mb-3">
                                                            <b class=" col-md-4 text-primary">Expense Category &nbsp; <span
                                                                    class="text-danger">*</span></b>


                                                            <select class="form-control col-md-8" id="onetime_category"
                                                                required>
                                                                <option value="">---Not Selected---</option>

                                                            </select>


                                                        </div>

                                                        <div class="form-group row mb-3">
                                                            <b class="col-md-4 text-primary ">Purpose of Transfer &nbsp;
                                                                <span class="text-danger">*</span></b>

                                                            <input type="text" class="form-control col-md-8"
                                                                id="onetime_purpose"
                                                                placeholder="Enter purpose of transaction" required>

                                                        </div>

                                                        <div class="form-group row mb-2">
                                                            <b class="col-md-4 text-primary ">Value Date &nbsp;</b>

                                                            <input type="date" class="form-control col-md-8"
                                                                id="onetime_future_payement" required>

                                                        </div>

                                                    </div>


                                                    <div class="form-group text-right yes_beneficiary">
                                                        <button class="btn btn-primary btn-rounded" type="button"
                                                            id="next_button">
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



                                                {{-- <div class="col-md-3">
                                            <label class="text-primary"> <b>Beneficiary Type</b> </label>
                                        </div> --}}
                                                {{-- <div class="col-md-6">

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                            </div>


                                            <span class="badge badge-primary float-right" style="cursor: pointer"><a
                                                    href="{{ url('add-local-bank-beneficiary') }}"
                                                    class="text-white">Create
                                                    Beneficiary</a>
                                            </span>
                                            <br>
                                        </div> --}}

                                            </div>
                                        </form>


                                    </div> <!-- end col -->

                                    {{-- <button class="m-2 btn btn-info d-none d-sm-block">Related Information</button> --}}
                                    {{-- LEFT CARD --}}


                                    <div class="col-md-4 m-2 d-none d-sm-block" id="related_information_display"
                                        style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                        <br><br>

                                        <div class=" col-md-12 card card-body ach_transfer_summary">
                                            {{-- <br><br> --}}
                                            <h4 class="text-primary">Sender Acc. Info</h4>
                                            <hr class="mt-0">
                                            <div class="row mt-0">
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
                                            <h4 class="text-primary">Receiver Acc. Info </h4>
                                            <hr class="mt-0">
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

                                            <hr>
                                            <div class="row">
                                                <h6 class="col-md-5">Enter Amount:</h6>
                                                <span class="text-primary display_amount col-md-7"></span>

                                                <h6 class="col-md-5">Currency Rate:</h6>
                                                <span class="text-primary display_midrate col-md-7"></span>

                                                <h6 class="col-md-5">Converted Amount:</h6>
                                                <span class="text-primary display_converted_amount col-md-7"></span>
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

                                            {{-- <hr>
                                        <div class="row">
                                            <h6 class="text-primary col-md-5">Please Note:</h6>
                                            <h6 class="text-danger col-md-7">ACH Tranfers should be above (SLL
                                                30,000,000.00)</h6>
                                        </div> --}}


                                        </div>

                                    </div>
                                </div>
                            </div>




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

                                    {{-- <div class="form-group row">
                                            <label class="col-md-5">Country:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_country"></span>
                                        </div> --}}

                                    {{-- <div class="form-group row">
                                            <label class="col-md-5">City:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_city"></span>
                                        </div> --}}


                                    {{-- <div class="form-group row">
                                            <label class="col-md-5">Branch:</label>
                                            <span class="col-md-7" id="beneficiary_details_bank_branch"></span>
                                        </div> --}}

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
                                    {{-- <div class="form-group row">
                                            <label class="col-md-5">Telephone:</label>
                                            <span class="col-md-7" id="beneficiary_details_telephone"></span>
                                        </div> --}}
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



            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                        crossorigin="anonymous"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script>
                function formatToCurrency(amount) {
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                };

                function bank_list() {
                    $.ajax({
                        type: 'GET',
                        url: 'get-bank-list-api',
                        datatype: "application/json",
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
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                bank_list()
                            }, $.ajaxSetup().retryAfter)

                        }

                    })
                };

                var c = {}

                function get_currency() {
                    {{-- let name = $("#hidden_currency").val();
                    console.log(name); --}}
                    $.ajax({
                        "type": "GET",
                        "url": "get-currency-list-api",
                        datatype: "application/json",
                        success: function(response) {
                            {{-- console.log(response); --}}

                            let data = response.data

                            c = data

                            console.log(data);
                            $.each(data, function(index) {
                                $('.select_currency').append($('<option>', {
                                    value: data[index].isoCode
                                }).text(data[index].isoCode));

                                $('#onetime_beneficiary_account_currency').append($('<option>', {
                                    value: data[index].currCode + '~' + data[index].isoCode + '~' +
                                        data[index].description
                                }).text(data[index].isoCode + '~' + data[index].description));
                            })



                            $('.select_currency option').each(function() {


                                if ($(this).val() == 'SLL') {
                                    $(this).prop("selected", true);

                                } else {

                                }


                            });

                            let name = $("#select_currency").val();
                            console.log(name);

                            let account_currency = response.data;
                            console.log("=======================")
                            {{-- console.log(account_currency); --}}
                            console.log("=======================")

                            $.each(account_currency, function(index) {
                                let data = account_currency[index].isoCode;
                                console.log(data);
                                if (name == data) {
                                    $("#hidden_select_currency").append($('<option selected>', {
                                        value: account_currency[index].currCode + '~' +
                                            account_currency[index].isoCode + '~' +
                                            account_currency[index].description
                                    }).text(account_currency[index].currCode + '~' + account_currency[
                                        index].isoCode + '~' + account_currency[index].description));

                                    console.log('TRUE');

                                } else {
                                    $("#hidden_select_currency").append($('<option>', {
                                        value: account_currency[index].currCode + '~' +
                                            account_currency[index].isoCode + '~' +
                                            account_currency[index].description
                                    }).text(account_currency[index].currCode + '~' + account_currency[
                                        index].isoCode + '~' + account_currency[index].description));
                                }
                            })
                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                get_currency()
                            }, $.ajaxSetup().retryAfter)
                        }
                    })
                }


                {{-- function get_currency() {
                    $.ajax({
                        type: 'GET',
                        url: 'get-currency-list-api',
                        datatype: "application/json",
                        success: function(response) {
                            console.log(response.data);
                            let data = response.data



                            $.each(data, function(index) {

                                $('#onetime_beneficiary_account_currency').append($('<option>', {
                                    value: data[index].currCode + '~' + data[index].isoCode + '~' +
                                        data[index].description
                                }).text(data[index].isoCode + '~' + data[index].description));

                                if (cur == data[index].currCode) {

                                    $('.select_currency').append($('<option selected>', {
                                        value: data[index].currCode + '~' + data[index].description
                                    }).text(data[index].isoCode + '~' + data[index].description));
                                } else {
                                    $('.select_currency').append(`<option >
                                    ${data[index].isoCode + '~' + data[index].description }
                                </option>`)
                                }

                            });

                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                get_currency()
                            }, $.ajaxSetup().retryAfter)

                        }

                    })
                }; --}}



                function expenseTypes() {
                    $.ajax({
                        "type": "GET",
                        "url": "get-expenses",
                        datatype: "application/json",
                        success: function(response) {
                            {{-- console.log(response.data); --}}
                            let data = response.data;

                            $.each(data, function(index) {

                                $("#category").append($('<option>', {
                                    value: data[index].expenseCode + '~' + data[index]
                                        .expenseName
                                }).text(data[index].expenseName))

                            });
                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                expenseTypes()
                            }, $.ajaxSetup().retryAfter)

                        }
                    })
                }

                function expenseTypes_onetime() {
                    $.ajax({
                        "type": "GET",
                        "url": "get-expenses",
                        datatype: "application/json",
                        success: function(response) {
                            {{-- console.log(response.data); --}}
                            let data = response.data;

                            $.each(data, function(index) {

                                $("#onetime_category").append($('<option>', {
                                    value: data[index].expenseCode + '~' + data[index]
                                        .expenseName
                                }).text(data[index].expenseName))

                            });
                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                expenseTypes_onetime()
                            }, $.ajaxSetup().retryAfter)

                        }
                    })
                }

                function from_account() {
                    $.ajax({
                        type: 'GET',
                        url: 'get-my-account',
                        datatype: "application/json",
                        success: function(response) {
                            console.log(response.data);
                            let data = response.data
                            $.each(data, function(index) {
                                $('#from_account').append($('<option>', {
                                    value: data[index].accountType + '~' + data[index].accountDesc +
                                        '~' + data[index].accountNumber + '~' +
                                        data[index].currency + '~' + data[index].availableBalance +
                                        '~' + data[index].currencyCode + '~' + data[index]
                                        .accountMandate

                                }).text(data[index].accountType + '' + ' - ' + '' + data[index]
                                    .accountNumber + '' + ' - ' + '' + data[index]
                                    .currency + '' + ' - ' + '' + formatToCurrency(Number(data[
                                            index]
                                        .availableBalance))));
                                //$('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                            });

                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                from_account()
                            }, $.ajaxSetup().retryAfter)

                        }

                    })
                }

                function from_account_onetime() {
                    $.ajax({
                        type: 'GET',
                        url: 'get-my-account',
                        datatype: "application/json",
                        success: function(response) {
                            {{-- console.log(response.data); --}}
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
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                from_account_onetime()
                            }, $.ajaxSetup().retryAfter)

                        }

                    })
                }


                function get_benerficiary() {
                    $.ajax({
                        type: 'GET',
                        url: 'get-transfer-beneficiary-api?beneType=OTB',
                        datatype: "application/json",
                        success: function(response) {
                            console.log(response.data);
                            let data = response.data

                            if (!response.data) {

                            } else {
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
                                    // $('.yes_beneficiary').hide()
                                    // $('.no_beneficiary').show()
                                }
                            }


                            {{-- let beneficiary_details = response.data; --}}
                            {{-- console.log(beneficiary_details); --}}

                            {{-- $.each(beneficiary_details, function(index){
                                $('#beneficiary_bank_name').val(beneficiary_details[0].BANK_NAME);
                            }) --}}
                        },
                        error: function(xhr, status, error) {

                            setTimeout(function() {
                                get_benerficiary()
                            }, $.ajaxSetup().retryAfter)

                        }

                    })
                }


                function customer() {
                    var customerType = @json(session()->get('customerType'));
                    console.log(customerType);

                    if (customerType == 'C') {

                        $('#coporate_transfer_approval').show();
                        $('#personal_transfer_receipt').hide();
                    } else {
                        $('#personal_transfer_receipt').show();
                        $('#coporate_transfer_approval').hide();
                    }
                }

                $(document).ready(function() {


                    {{-- $("#related_information_display").hide(); --}}
                    {{-- $("#related_information_display").addClass("d-none d-sm-block") --}}
                    {{-- $(".rtgs_card_right").hide(); --}}
                    $('#spinner').hide(),
                        $('#spinner-text').hide(),
                        $('#print_receipt').hide(),
                        $(".hide_invoice").hide()
                    $('.no_beneficiary').hide()
                    $("#transaction_summary").hide();
                    $(".success_gif").hide();
                    $(".onetime_beneficiary").hide()
                    $('#ach_transfer_mode').hide();
                    $('#rtgs_transfer_mode').hide();
                    $('#instant_transfer_mode').hide();
                    $('.transfer_mode_note').hide();
                    $('#onetime_ach_transfer_mode').hide();
                    $('#onetime_rtgs_transfer_mode').hide();
                    $('#onetime_instant_transfer_mode').hide();
                    $('.onetime_transfer_mode_note').hide();
                    $('#inputGroupFile04').attr("disabled", true);
                    $("#onetime_beneficiary_form").hide();
                    $(".attach_invoice").hide();
                    {{-- $(".ach_transfer_summary").show(); --}}
                    $(".beneficiary_details").hide();
                    {{-- $(".select_beneficiary").toggle(500); --}}

                    {{-- $('.receipt').hide(); --}}




                    setTimeout(function() {
                        from_account();
                        from_account_onetime();
                        get_benerficiary();
                        bank_list();
                        get_currency();
                        expenseTypes();
                        expenseTypes_onetime();
                        customer();
                    }, 2000)


                    {{-- $("input[type=radio][name='transfer_type']:checked").val() --}}
                    // POPULATE THE RELATED INFORMATION CARD ON CHANGE OF ACCOUNT

                    $("#from_account").change(function() {
                        var from_account_details = $(this).val().split("~");
                        console.log(from_account_details);
                        $("#select_currency").val(from_account_details[3]);
                        $(".display_from_account_name").text(from_account_details[1]);
                        $(".display_from_account_no").text(from_account_details[2]);
                        $(".display_from_account_amount").text(from_account_details[4]);
                        $(".display_from_account_currency").text(from_account_details[3]);
                        $(".display_currency").text(from_account_details[3]);
                        $('#onetime_select_currency').val(from_account_details[3]);

                    })

                    $("#onetime_from_account").change(function() {
                        var onetime_from_account_details = $(this).val().split("~");
                        console.log(onetime_from_account_details);
                        $(".display_from_account_name").text(onetime_from_account_details[1]);
                        $(".display_from_account_no").text(onetime_from_account_details[2]);
                        $(".display_from_account_amount").text(onetime_from_account_details[4]);
                        $(".display_from_account_currency").text(onetime_from_account_details[3]);

                    })

                    $("#to_account").change(function() {
                        var to_account_details = $(this).val().split("~");
                        console.log(to_account_details)
                        $(".display_to_account_name").text(to_account_details[1]);
                        $(".display_to_bank_name").text(to_account_details[0]);
                        $(".display_to_account_no").text(to_account_details[2]);
                        $(".display_to_account_currency").text(to_account_details[3]);
                        {{-- $(".display_currency").text(to_account_details[3]); --}}
                        $("#beneficiary_bank_name").val(to_account_details[0]);
                        $("#beneficiary_account_number").val(to_account_details[2]);
                        $("#beneficiary_account_name").val(to_account_details[1]);
                        $("#beneficiary_email").val(to_account_details[6]);

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

                    $("#onetime_beneficiary_account_name").keyup(function() {
                        var account_name = $(this).val();
                        $(".display_to_account_name").text(account_name);
                    });

                    {{-- #("onetime_beneficiary_email").keyup(function(){

                    }) --}}

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
                    })

                    $('#transfer_mode').change(function() {
                        var transfer_mode_ = $(this).val().split('~');
                        {{-- console.log(transfer_mode[1]); --}}
                        let transfer_mode = transfer_mode_[1];

                        if ('ACH' == transfer_mode) {
                            $('.transfer_mode_note').show();
                            $('#ach_transfer_mode').show();
                            $('#rtgs_transfer_mode').hide();
                            $('#instant_transfer_mode').hide();
                        } else if ('RTGS' == transfer_mode) {
                            $('.transfer_mode_note').show();
                            $('#rtgs_transfer_mode').show();
                            $('#ach_transfer_mode').hide();
                            $('#instant_transfer_mode').hide();
                        } else if ('INSTANT' == transfer_mode) {
                            $('.transfer_mode_note').show();
                            $('#instant_transfer_mode').show();
                            $('#rtgs_transfer_mode').hide();
                            $('#ach_transfer_mode').hide();

                        } else {
                            return false;
                        }
                    });

                    $('#onetime_transfer_mode').change(function() {
                        var transfer_mode_ = $(this).val().split('~');
                        {{-- console.log(transfer_mode[1]); --}}
                        let transfer_mode = transfer_mode_[1];

                        if ('ACH' == transfer_mode) {
                            $('.onetime_transfer_mode_note').show();
                            $('#onetime_ach_transfer_mode').show();
                            $('#onetime_rtgs_transfer_mode').hide();
                            $('#onetime_instant_transfer_mode').hide();
                        } else if ('RTGS' == transfer_mode) {
                            $('.onetime_transfer_mode_note').show();
                            $('#onetime_rtgs_transfer_mode').show();
                            $('#onetime_ach_transfer_mode').hide();
                            $('#onetime_instant_transfer_mode').hide();
                        } else if ('INSTANT' == transfer_mode) {
                            $('.onetime_transfer_mode_note').show();
                            $('#onetime_instant_transfer_mode').show();
                            $('#onetime_rtgs_transfer_mode').hide();
                            $('#onetime_ach_transfer_mode').hide();

                        } else {
                            return false;
                        }
                    });


                    {{-- function sweet_alert(){
                        Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                        )
                    } --}}


                    {{-- var transfer_type = $("input[name='transfer_beneficiary_ontime']:checked").val();
                        console.log(transfer_type); --}}

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

                    {{-- var type = $("input[type='radio']:checked").val(); --}}

                    {{-- var transfer_type = $('input[name="transfer_type"]:checked').val();
                    console.log(transfer_type); --}}

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

                    $('.onetime_transfer_type').on("change", function(e) {
                        e.preventDefault();

                        var transfer_type = $('input[name="onetime_radioInline"]:checked').val();
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



                    $("#amount").keyup(function() {
                        let amount = $("#amount").val()
                        $('.display_transfer_amount').text(formatToCurrency(parseFloat(amount)))
                    })

                    {{-- var radioValue = $("input[name='transfer_beneficiary_ontime']:checked").val();
                        console.log(radioValue); --}}



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

                    $("#onetime_from_account").change(function() {
                        var onetime_from_account = $(this).val().split("~")
                        {{-- console.log(onetime_from_account); --}}
                        $(".display_currency").text(onetime_from_account[3]);

                    })

                    $("#onetime_beneficiary_alias_name").keyup(function() {
                        var alias_name = $(this).val();
                        $(".display_to_account_name").text(alias_name);
                    })

                    $("#onetime_beneficiary_bank_name").change(function() {
                        var beneficiary_bank_name = $(this).val().split("~");
                        $(".display_to_bank_name").text(beneficiary_bank_name[1]);
                    })

                    $("#onetime_beneficiary_account_number").keyup(function() {
                        var beneficiary_account_number = $(this).val();
                        $(".display_to_account_no").text(beneficiary_account_number);
                    })

                    $("#onetime_beneficiary_account_currency").change(function() {
                        var beneficiary_account_currency = $(this).val().split("~");
                        $(".display_to_account_currency").text(beneficiary_account_currency[1]);
                    })

                    $("#onetime_amount").keyup(function() {
                        var beneficiary_amount = $(this).val();
                        $(".display_transfer_amount").text(formatToCurrency(parseFloat(
                            beneficiary_amount)));
                    })

                    // NEXT BUTTON CLICK
                    $("#next_button").click(function() {

                        var onetime_transfer = $("input[type='checkbox']:checked").val();
                        console.log(onetime_transfer)

                        if (onetime_transfer == "CHECKED") {
                            console.log("onetime beneficiary");
                            var from_account = $('#from_account').val().split('~');
                            console.log(from_account);
                            $('#from_account_receipt').text(from_account[2])
                            $('.receipt_currency').text(from_account[3]);


                            var onetime_bank_name = $("#onetime_beneficiary_bank_name").val();
                            console.log(onetime_bank_name);
                            var onetime_bank_name_ = $('#onetime_beneficiary_bank_name').val().split('~');
                            $('#receiver_bank_name').text(onetime_bank_name_[1]);

                            var to_account = $("#onetime_beneficiary_account_number").val();
                            console.log(to_account);
                            $('#receiver_account_number').text(to_account)

                            {{-- var account_currency = $('#onetime_beneficiary_account_currency').val().split('~')
                            $('.receipt_currency').text(account_currency[1]); --}}


                            var onetime_bene_name = $("#onetime_beneficiary_account_name").val();
                            console.log(onetime_bene_name);
                            $(".display_to_account_name").text(onetime_bene_name);
                            $('#receiver_account_name').text(onetime_bene_name);

                            var onetime_bene_email = $("#onetime_beneficiary_email").val();
                            console.log(onetime_bene_email);

                            var onetime_invoice = $("#onetime_inputGroupFile04").val();
                            {{-- console.log(onetime_invoice); --}}

                            var onetime_beneficiary_type = $('#onetime_transfer_mode').val();
                            console.log(onetime_beneficiary_type);
                            var onetime_beneficiary_type_ = $('#onetime_transfer_mode').val().split('~')
                            $('#type_of_transfer').text(onetime_beneficiary_type_[1])

                            var transfer_amount = $('#onetime_amount').val();
                            console.log(transfer_amount);
                            $('#amount_receipt').text(formatToCurrency(parseFloat(transfer_amount)))

                            var category_info = $('#onetime_category').val().split('~');
                            console.log(category_info);
                            $('#category_receipt').text(category_info[1])
                            $(".display_category").text(category_info[1]);


                            var purpose = $('#onetime_purpose').val();
                            console.log(purpose);
                            $(".display_purpose").text(purpose);
                            $('#purpose_receipt').text(purpose);

                            var value_date = $("#onetime_future_payement").val();
                            {{-- console.log(value_date); --}}

                            // upload invoice file

                            

                            if (from_account == '' || to_account == '' || transfer_amount == '' ||
                                category_info == '') {
                                toaster('Field must not be empty', 'error');
                                return false
                            } else {
                                $("#transaction_form").hide()
                                {{-- $(".other_card_right").hide() --}}
                                $("#related_information_display").hide()
                                $("#transaction_summary").show()
                                $('#print_button').hide();
                            }

                            if (parseFloat(transfer_amount) < parseFloat(transfer_amount)) {
                                toaster('Insufficient account balance', 'error', 10000)
                                return false;
                            }
                            //set purpose and category values

                            if( $("#transfer_mode").val() == '' ||  $("#transfer_mode").val() == udefined){
                                toaster(response.message, 'error', 5000)
                                return false;
                            }






                        } else {
                            console.log("saved benefciary");



                            {{-- var type = $("input[type='radio']:checked").val(); --}}

                            var from_account = $('#from_account').val().split('~')
                            console.log(from_account);
                            var from_account_ = $('#from_account_receipt').text(from_account[2]);
                            $('.receipt_currency').text(from_account[3]);
                            $("#from_account_receipt").text(from_account[2]);


                            var to_account = $('#to_account').val().split('~');
                            console.log(to_account);
                            var bank_name = (to_account[0]);
                            var bank_name_ = bank_name.split('||');
                            $('#receiver_bank_name').text(bank_name_[0])
                            $('#receiver_account_name').text(to_account[1]);
                            $('#receiver_account_number').text(to_account[2]);
                            $('#receiver_bank_name').text(bank_name_[0]);
                            $('#receiver_account_name').text(to_account[1]);
                            $('#receiver_account_number').text(to_account[2]);

                            var beneficiary_type = $("#transfer_mode").val();
                            console.log(beneficiary_type);
                            var beneficiary_type_ = $('#transfer_mode').val().split('~');
                            $('#type_of_transfer').text(beneficiary_type_[1]);

                            var transfer_amount = $('#amount').val();
                            $('#amount_receipt').text(transfer_amount);
                            console.log(transfer_amount);
                            $('#amount_receipt').text(formatToCurrency(parseFloat(transfer_amount)))

                            var category = $('#category').val().split('~');
                            $('#category_receipt').text(category[1]);
                            console.log(category);
                            $('#category_receipt').text(category[1]);

                            var purpose = $('#purpose').val();
                            $('#purpose_receipt').text(purpose);
                            console.log(purpose);
                            $('#purpose_receipt').text(purpose);

                            var value_date = $("#future_payement").val();
                            console.log(value_date);

                            var invoice = $("#beneficiary_inputGroupFile04").val();
                            console.log(invoice);

                            var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                            var schedule_payment_date = $('#schedule_payment_date').val();

                            {{-- console.log(beneficiary_type); --}}

                            var category_info = $('#category').val().split("~")
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
                        }


                    });


                    $("#onetime_next_button").click(function() {

                        var onetime_from_account_ = $("#onetime_from_account").val().split("~");
                        console.log(onetime_from_account_);
                        var onetime_from_account = onetime_from_account_[2];
                        {{-- $("#display_from_account_name").text(); --}}
                        {{-- $("#display_from_account_no").text(); --}}

                        {{-- var beneficiary_type = $('input[name="transfer_beneficiary"]:checked').val(); --}}
                        {{-- console.log(beneficiary_type); --}}

                        var beneficiary_name = $("#onetime_beneficiary_alias_name").val();
                        {{-- console.log(beneficiary_name); --}}
                        {{-- $("#display_to_account_name").text(); --}}

                        var bank_name = $("#onetime_beneficiary_bank_name").val();
                        {{-- console.log(bank_name); --}}
                        {{-- $("#online_display_beneficiary_bank_name").text(); --}}

                        var account_number = $("#onetime_beneficiary_account_number").val();
                        {{-- console.log(account_number); --}}
                        {{-- $("#display_to_account_no").text(); --}}

                        var beneficiary_currency = $("#onetime_beneficiary_account_currency").val();
                        {{-- console.log(beneficiary_currency); --}}
                        {{-- $("#display_currency").text(); --}}

                        var onetime_amount = $("#onetime_amount").val();
                        {{-- console.log(onetime_amount); --}}
                        $("#display_transfer_amount").text();

                        var beneficiary_email = $("#onetime_beneficiary_phone").val();
                        {{-- console.log(beneficiary_email); --}}

                        var expense_category_ = $("#onetime_category").val().split("~");
                        var expense_category = expense_category_[1];
                        {{-- console.log(expense_category); --}}

                        $("#display_category").text(expense_category);

                        var transfer_purpose = $("#onetime_purpose").val();
                        {{-- console.log(transfer_purpose); --}}
                        $("#display_purpose").text(transfer_purpose);

                        var beneficiary_type = $("input[name='transfer_beneficiary_ontime']:checked").val();
                        console.log(beneficiary_type);

                        if (onetime_from_account_ == '' || beneficiary_name == '' || bank_name == '' ||
                            account_number == '' || beneficiary_currency == '' || onetime_amount == '' ||
                            beneficiary_email == '' || expense_category_ == '' || transfer_purpose == '') {
                            toaster('Field must not be empty', 'error');
                            return false
                        }

                        {{-- if (parseFloat(transfer_amount) < parseFloat(transfer_amount)) {
                                toaster('Insufficient account balance', 'error', 10000)
                                return false;
                            } --}}

                        $("#transaction_form").hide()
                        {{-- $(".other_card_right").hide() --}}
                        $("#related_information_display").hide()
                        $("#transaction_summary").show()
                        $('#print_button').hide();
                    })


                    $("#back_button").click(function(e) {
                        e.preventDefault();

                        $("#transaction_form").show()
                        $("#transaction_summary").hide();

                    })

                    {{-- if($("#terms_and_conditions").is(":checked")){
                            $("#centermodal").show();
                        }else {
                            $("#centermodal").show();
                            toaster("Please accept Terms and conditions to continue", 'error', 600);
                        } --}}




                    //


                    $('#confirm_modal_button').click(function(e) {
                        e.preventDefault();

                        if ($("#terms_and_conditions").is(':checked')) {
                            {{-- console.log("checked"); --}}

                            // Coporate Account check
                            var customerType = @json(session()->get('customerType'));
                            console.log(customerType);



                            if (customerType == "C") {
                                $('#confirm_modal_button').removeAttr("data-target");
                                $('#personal_transfer_receipt').hide();
                                {{-- alert(customerType); --}}
                                if ($('#checkmeout0').is(':checked')) {
                                    console.log("onetime beneficiary");
                                    var onetime_from_account_ = $('#from_account').val().split('~');
                                    var onetime_from_account = onetime_from_account_[2];
                                    var currCode = onetime_from_account_[5];
                                    var currency = onetime_from_account_[3];
                                    var accountMandate = onetime_from_account_[6];
                                    console.log(onetime_from_account);

                                    var bank_name_ = $("#onetime_beneficiary_bank_name").val().split('~');
                                    var bank_name = bank_name_[1];
                                    console.log(bank_name);

                                    var account_number = $("#onetime_beneficiary_account_number").val();
                                    console.log(account_number);

                                    var beneficiary_currency_ = $("#onetime_beneficiary_account_currency")
                                        .val().split('~');
                                    var beneficiary_currency = beneficiary_currency_[0];
                                    console.log(beneficiary_currency_)

                                    var beneficiary_name = $("#onetime_beneficiary_account_name").val();
                                    console.log(beneficiary_name);
                                    {{-- $(".display_to_account_name").text(onetime_bene_name); --}}

                                    var beneficiary_email = $("#onetime_beneficiary_email").val();
                                    console.log(beneficiary_email);

                                    var onetime_invoice = $("#onetime_inputGroupFile04").val();
                                    console.log(onetime_invoice);

                                    var transfer_type_ = $('#onetime_transfer_mode').val().split('~');
                                    var transfer_type = transfer_type_[1];
                                    console.log(transfer_type);

                                    var onetime_amount = $('#onetime_amount').val();
                                    console.log(onetime_amount);

                                    var expense_category_ = $('#onetime_category').val().split('~');
                                    var expense_category = expense_category_[1];
                                    console.log(expense_category);

                                    {{-- $(".display_category").text(category_info[1]); --}}

                                    var onetime_bene_address = $('#onetime_beneficiary_account_address').val();


                                    var transfer_purpose = $('#onetime_purpose').val();
                                    console.log(transfer_purpose);
                                    {{-- $(".display_purpose").text(transfer_purpose); --}}

                                    var value_date = $("#onetime_future_payement").val();
                                    console.log(value_date);

                                    {{-- var sec_pin = $('#user_pin').val() --}}

                                    $.ajax({
                                        type: "POST",
                                        url: "corporate-onetime-local-bank-transfer-api",
                                        datatype: "application/json",
                                        data: {
                                            "from_account": onetime_from_account,
                                            "beneficiary_type": transfer_type,
                                            "beneficiary_name": beneficiary_name,
                                            "bank_name": bank_name,
                                            "to_account": account_number,
                                            "currency": currency,
                                            "currency_iso": currCode,
                                            "amount": onetime_amount,
                                            "email": beneficiary_email,
                                            "category": expense_category,
                                            "purpose": transfer_purpose,
                                            'account_mandate': accountMandate,
                                            "beneficiary_address": onetime_bene_address,

                                        },
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                'content')
                                        },
                                        success: function(response) {

                                            console.log(response);

                                            if (response.responseCode == '000') {
                                                {{-- toaster(response.message, 'success', 1000) --}}
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
                                                $("#related_information_display").removeClass(
                                                    "d-none d-sm-block");
                                                $(".form_process").hide();
                                                $(".receipt").show();

                                                {{-- $(".rtgs_card_right").hide(); --}}
                                                {{-- $(".success_gif").show(); --}}




                                            } else {
                                                toaster(response.message, 'error', 10000)

                                                $('#confirm_modal_button').show();
                                                $('#spinner').hide();
                                                $('#spinner-text').hide();
                                                $('#print_receipt').hide();
                                                $(".success_gif").hide();
                                                $("#related_information_display").removeClass(
                                                    "d-none d-sm-block");
                                                {{-- $(".rtgs_card_right").show(); --}}
                                                $(".form_process").show();
                                                $(".receipt").hide();

                                                $('#confirm_transfer').show();
                                                $('#confirm_button').attr('disabled', false);


                                            }
                                        }
                                    })


                                } else {

                                    console.log("saved beneficiary");

                                    var from_account_ = $("#from_account").val().split("~");
                                    console.log(from_account_);

                                    var from_account = from_account_[2];
                                    var currCode = from_account_[5];
                                    var currency = from_account_[3];
                                    var accountMandate = from_account_[6];
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

                                    var currency_ = $("#select_currency").val().split('~')
                                    console.log(currency_)
                                    var currency = currency_[0];
                                    {{-- var hidden_currency = $("#hidden_select_currency").val().split('~');
                                    console.log(hidden_currency); --}}


                                    var category_ = $("#category").val().split("~")
                                    var category = category_[1];
                                    console.log(category)

                                    var purpose = $("#purpose").val();
                                    console.log(purpose);

                                    var future_payement = $("#future_payement").val();
                                    console.log(future_payement);

                                    var beneficiary_type_ = $("#transfer_mode").val().split('~');

                                    var beneficiary_type = beneficiary_type_[1];
                                    console.log(beneficiary_type);

                                    var sec_pin = $('#user_pin').val()

                                    let api_data = {
                                        "from_account": from_account,
                                        "bank_name": bank_name,
                                        "beneficiary_name": beneficiary_name,
                                        "beneficiary_address": beneficiary_address,
                                        "to_account": to_account,
                                        "amount": amount,
                                        "currency": currency,
                                        "currency_iso": currCode,
                                        "category": category,
                                        "purpose": purpose,
                                        "future_payement": future_payement,
                                        "beneficiary_type": beneficiary_type,
                                        "account_mandate": accountMandate
                                    };

                                    console.log(api_data)

                                    $.ajax({
                                        type: 'POST',
                                        url: 'corporate-saved-local-bank-transfer-api',
                                        datatype: "application/json",
                                        data: api_data,
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                                .attr('content')
                                        },
                                        success: function(response) {
                                            console.log(response);

                                            if (response.responseCode == '000') {
                                                {{-- toaster(response.message, 'success', 1000) --}}
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
                                                $("#related_information_display").removeClass(
                                                    "d-none d-sm-block");
                                                $(".form_process").hide();
                                                $(".receipt").show();

                                                {{-- $(".rtgs_card_right").hide(); --}}
                                                {{-- $(".success_gif").show(); --}}




                                            } else {
                                                toaster(response.message, 'error', 10000)

                                                $('#confirm_modal_button').show();
                                                $('#spinner').hide();
                                                $('#spinner-text').hide();
                                                $('#print_receipt').hide();
                                                $(".success_gif").hide();
                                                $("#related_information_display").removeClass(
                                                    "d-none d-sm-block");
                                                $(".rtgs_card_right").show();
                                                $(".form_process").show();
                                                $(".receipt").hide();

                                                $('#confirm_transfer').show();
                                                $('#confirm_button').attr('disabled', false);


                                            }
                                        },
                                    })

                                }



                            } else {
                                $('#coporate_transfer_approval').hide();
                                $("#transfer_pin").click(function(e) {
                                    e.preventDefault();

                                    {{-- $("#back_button").hide();
                                    $('#confirm_transfer').hide()
                                    $('#spinner').show();
                                    $('#spinner-text').show();
                                    $("#confirm_modal_button").prop('disabled', true); --}}


                                    {{-- var onetime_transfer = $("input[type='checkbox']:checked").val();
                                    console.log(onetime_transfer) --}}

                                    if ($('#checkmeout0').is(':checked')) {
                                        console.log("onetime beneficiary");
                                        var onetime_from_account_ = $('#from_account').val().split('~');
                                        var onetime_from_account = onetime_from_account_[2];
                                        console.log(onetime_from_account);

                                        var bank_name_ = $("#onetime_beneficiary_bank_name").val().split(
                                            '~');
                                        var bank_name = bank_name_[1];
                                        console.log(bank_name);

                                        var account_number = $("#onetime_beneficiary_account_number").val();
                                        console.log(account_number);

                                        var beneficiary_currency_ = $(
                                                "#onetime_beneficiary_account_currency")
                                            .val().split('~');
                                        var beneficiary_currency = beneficiary_currency_[0];
                                        console.log(beneficiary_currency_)

                                        var beneficiary_name = $("#onetime_beneficiary_account_name").val();
                                        console.log(beneficiary_name);
                                        {{-- $(".display_to_account_name").text(onetime_bene_name); --}}

                                        var beneficiary_email = $("#onetime_beneficiary_email").val();
                                        console.log(beneficiary_email);

                                        var onetime_invoice = $("#onetime_inputGroupFile04").val();
                                        console.log(onetime_invoice);

                                        var transfer_type_ = $('#onetime_transfer_mode').val().split('~');
                                        var transfer_type = transfer_type_[1];
                                        console.log(transfer_type);

                                        var onetime_amount = $('#onetime_amount').val();
                                        console.log(onetime_amount);

                                        var expense_category_ = $('#onetime_category').val().split('~');
                                        var expense_category = expense_category_[1];
                                        console.log(expense_category);

                                        {{-- $(".display_category").text(category_info[1]); --}}


                                        var transfer_purpose = $('#onetime_purpose').val();
                                        console.log(transfer_purpose);
                                        {{-- $(".display_purpose").text(transfer_purpose); --}}

                                        var value_date = $("#onetime_future_payement").val();
                                        console.log(value_date);

                                        var sec_pin = $('#user_pin').val()

                                        $.ajax({
                                            type: "POST",
                                            url: "onetime-beneficiary-local-bank-api",
                                            datatype: "application/json",
                                            data: {
                                                "from_account": onetime_from_account,
                                                "beneficiary_type": transfer_type,
                                                "beneficiary_name": beneficiary_name,
                                                "bank_name": bank_name,
                                                "to_account": account_number,
                                                "currency": beneficiary_currency,
                                                "amount": onetime_amount,
                                                "email": beneficiary_email,
                                                "category": expense_category,
                                                "purpose": transfer_purpose,
                                                "sec_pin": sec_pin
                                            },
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                    'content')
                                            },
                                            success: function(data) {
                                                let response = JSON.parse(data)
                                                console.log(response);

                                                if (response.responseCode == '000') {
                                                    {{-- toaster(response.message, 'success', 1000) --}}
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
                                                    $("#related_information_display")
                                                        .removeClass(
                                                            "d-none d-sm-block");
                                                    $(".form_process").hide();
                                                    $(".receipt").show();

                                                    {{-- $(".rtgs_card_right").hide(); --}}
                                                    {{-- $(".success_gif").show(); --}}




                                                } else {
                                                    toaster(response.message, 'error', 10000)

                                                    $('#confirm_modal_button').show();
                                                    $('#spinner').hide();
                                                    $('#spinner-text').hide();
                                                    $('#print_receipt').hide();
                                                    $(".success_gif").hide();
                                                    $("#related_information_display")
                                                        .removeClass(
                                                            "d-none d-sm-block");
                                                    {{-- $(".rtgs_card_right").show(); --}}
                                                    $(".form_process").show();
                                                    $(".receipt").hide();

                                                    $('#confirm_transfer').show();
                                                    $('#confirm_button').attr('disabled',
                                                        false);


                                                }
                                            }
                                        })


                                    } else {

                                        console.log("saved beneficiary");

                                        var from_account_ = $("#from_account").val().split("~");
                                        console.log(from_account_);

                                        var from_account = from_account_[2];
                                        var currCode = from_account_[5];
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

                                        var currency_ = $("#select_currency").val().split('~')
                                        console.log(currency_)
                                        var currency = currency_[0];
                                        {{-- var hidden_currency = $("#hidden_select_currency").val().split('~');
                                        console.log(hidden_currency); --}}

                                        var category_ = $("#category").val().split("~")
                                        var category = category_[1];
                                        console.log(category)

                                        var purpose = $("#purpose").val();
                                        console.log(purpose);

                                        var future_payement = $("#future_payement").val();
                                        console.log(future_payement);

                                        if( $("#transfer_mode").val() == '' ||  $("#transfer_mode").val() == udefined){
                                            toaster(response.message, 'error', 5000)
                                            return false;
                                        }

                                        var beneficiary_type_ = $("#transfer_mode").val().split('~');

                                        var beneficiary_type = beneficiary_type_[1];
                                        console.log(beneficiary_type);

                                        var sec_pin = $('#user_pin').val()

                                        $.ajax({
                                            type: 'POST',
                                            url: 'saved-beneficiary-local-bank-transfer-api',
                                            datatype: "application/json",
                                            data: {
                                                "from_account": from_account,
                                                "bank_name": bank_name,
                                                "beneficiary_name": beneficiary_name,
                                                "beneficiary_address": beneficiary_address,
                                                "to_account": to_account,
                                                "amount": amount,
                                                "currency": currCode,
                                                "category": category,
                                                "purpose": purpose,
                                                "future_payement": future_payement,
                                                "beneficiary_type": beneficiary_type,
                                                "sec_pin": sec_pin,

                                            },
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                                                    .attr('content')
                                            },
                                            success: function(response) {
                                                console.log(response);

                                                if (response.responseCode == '000') {
                                                    {{-- toaster(response.message, 'success', 1000) --}}
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
                                                    $("#related_information_display")
                                                        .removeClass(
                                                            "d-none d-sm-block");
                                                    $(".form_process").hide();
                                                    $(".receipt").show();

                                                    {{-- $(".rtgs_card_right").hide(); --}}
                                                    {{-- $(".success_gif").show(); --}}




                                                } else {
                                                    toaster(response.message, 'error', 10000)

                                                    $('#confirm_modal_button').show();
                                                    $('#spinner').hide();
                                                    $('#spinner-text').hide();
                                                    $('#print_receipt').hide();
                                                    $(".success_gif").hide();
                                                    $("#related_information_display")
                                                        .removeClass(
                                                            "d-none d-sm-block");
                                                    {{-- $(".rtgs_card_right").show(); --}}
                                                    $(".form_process").show();
                                                    $(".receipt").hide();

                                                    $('#confirm_transfer').show();
                                                    $('#confirm_button').attr('disabled',
                                                        false);


                                                }
                                            },
                                        })

                                    }

                                })
                            }



                        } else {
                            toaster('Accept Transfer fee charge to continue', 'error', 6000)
                            {{-- $("#myCenterModalLabel").hide(); --}}
                            return false;

                        }
                    })






                    //


                    var user_pin = $('#user_pin').val();
                    // POST TO API

                    {{-- $('#confirm_transfer').click(function(e) {
                            e.preventDefault();

                            var beneficiary_type = $("input[type='checkbox']:checked").val();


                            console.log(beneficiary_type);



                        }); --}}




                });
            </script>

        @endsection
