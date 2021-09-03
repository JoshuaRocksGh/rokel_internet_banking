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
    <div class="col-12">
        <div class="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <!-- start page title -->

                        <div class="receipt" style="display: none">
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

                                                <br />

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                {{-- <th>#</th> --}}
                                                                <th>Description</th>
                                                                <th class="text-right">Further Details</th>
                                                                {{-- <th>Amount (<span id="receipt_currency"></span>)</th> --}}
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
                                                                {{-- <th scope="row">2</th> --}}
                                                                <td>Transfer To Account Number</td>
                                                                <td class="text-right"><span
                                                                        id="to_account_receipt"></span></td>
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
                                                                <td class="text-right"><strong><span
                                                                            class="receipt_currency"></span> &nbsp;<span
                                                                            id="amount_receipt"></span></strong>
                                                                </td>
                                                            </tr>
                                                            {{-- <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Transaction Fee </td>
                                                                    <td></td>
                                                                    <td class="text-right"><strong>(<span
                                                                                class="receipt_currency"></span>)15.00</strong>
                                                                    </td>
                                                                </tr> --}}
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
                                                                <td></td>
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
                                                    <div class="col-md-5"></div>
                                                    <div class="col-md-2">
                                                        <button
                                                            class="btn btn-light btn-rounded hide_on_print text-center"
                                                            type="button" onclick="window.print()">Print
                                                            Receipt
                                                        </button>


                                                    </div>
                                                    <div class="col-md-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form_process">
                            <div class="row">

                                <div class="col-md-7 m-2" id="transaction_summary"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226)); display:none;">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10 ">
                                            <br><br><br>

                                            <div class="table-responsive card table_over_flow">
                                                <table class="table mb-0 table-bordered table-striped  ">

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
                                                                {{-- <span class="font-13 text-primary text-bold display_from_account_type"
                                                                        id="display_from_account_type"></span> --}}
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

                                                                {{-- <span class="font-13 text-primary text-bold display_to_account_type"
                                                                        id="display_to_account_type"> </span> --}}
                                                                <span
                                                                    class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                    id="display_to_account_name"> </span>
                                                                {{-- <span class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                                        id="online_display_beneficiary_bank_name"></span> --}}
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
                                                            <td>Purpose:</td>
                                                            <td>
                                                                <span class="font-13 text-primary h3 display_purpose"
                                                                    id="display_purpose"></span>
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


                                            <!-- Center modal content -->
                                            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-center ">

                                                        </div>
                                                        <div class="modal-body transfer_pin_modal">
                                                            <h3 class="modal-title text-primary text-center"
                                                                id="myCenterModalLabel ">ENTER TRANSACTION PIN</h3>
                                                            <div class="row">
                                                                <div class="col-md-2"></div>
                                                                <div class="col-md-9  text-center">
                                                                    <form action="#" autocomplete="off"
                                                                        aria-autocomplete="off">
                                                                        <input type="text" name="user_pin" maxlength="4"
                                                                            autocomplete="off" aria-autocomplete="off"
                                                                            class="form-control key hide_on_print"
                                                                            id="user_pin"
                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                        <br>
                                                                        <button class="btn btn-success" type="button"
                                                                            id="transfer_pin"
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
                                                        id="back_button"> <i
                                                            class="mdi mdi-reply-all-outline"></i>&nbsp;Back</button>
                                                    &nbsp; </span>
                                                <span>
                                                    &nbsp;
                                                    <button class="btn btn-primary btn-rounded " type="button"
                                                        id="confirm_modal_button">
                                                        <span id="confirm_transfer" data-toggle="modal"
                                                            data-target="#centermodal">Confirm Transfer</span>
                                                        <span class="spinner-border spinner-border-sm mr-1"
                                                            role="status" id="spinner" aria-hidden="true"
                                                            style="display: none"></span>
                                                        <span id="spinner-text" style="display: none">Loading...</span>
                                                    </button>
                                                </span>

                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                        type="button" id="print_receipt" onclick="window.print()"
                                                        style="display: none">Print
                                                        Receipt
                                                    </button></span>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>

                                </div>


                                <div class="col-md-7 m-2" id="transaction_form"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">

                                    <div class=" container">



                                        <form action="#" id="payment_details_form" autocomplete="off"
                                            aria-autocomplete="off">
                                            @csrf
                                            <div class="col-md-12">
                                                <br><br><br>
                                                <div class="row">


                                                    <div class="col-md-1"></div>
                                                    <div class="col-md-10">

                                                        <div class="form-group row ">
                                                            <b class="col-md-12 text-primary mb-1">Account from which
                                                                the money will
                                                                be tansfered
                                                                &nbsp; <span class="text-danger">*</span> </b>
                                                            <select class="form-control col-md-12 mb-2"
                                                                id="from_account" required>
                                                                <option selected disabled value="">Select Account
                                                                </option>

                                                                {{-- <option value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                                Saving Account~001023468976001~GHS~2000
                                                             </option> --}}

                                                            </select>

                                                        </div>
                                                        <legend></legend>

                                                        <div class="form-group row">
                                                            <b class="col-md-12"><b class="text-primary">Account which
                                                                    will receive the money
                                                                    &nbsp;</b><span class="text-danger">*</span></b>
                                                            <select class="form-control col-md-12 mb-2" id="to_account"
                                                                required>
                                                                <option selected disabled value="">Select Account
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <legend></legend>



                                                        <div class="form-group row">

                                                            <b class="col-md-4 text-primary">Actual Amount &nbsp; <span
                                                                    class="text-danger">*</span></b>

                                                            <div class="input-group mb-3 col-8" style="padding: 0px;">
                                                                <div class="input-group-prepend">
                                                                    <input type="text" class="input-group-text "
                                                                        id="select_currency" style="width: 80px;"
                                                                        readonly>
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
                                                                    <select name=""
                                                                        class="input-group-text select_currency"
                                                                        id="select_currency__">
                                                                        {{-- <option value="SLL" selected>SLL</option>
                                                                            <option value="EUR">EURO</option>
                                                                            <option value="USD">USD</option> --}}
                                                                    </select>
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <div class="input-group-prepend">
                                                                    <input type="text" class="form-control"
                                                                        id="convertor_rate" placeholder="0.00" readonly
                                                                        style="width: 100px;">
                                                                </div>
                                                                &nbsp;&nbsp;
                                                                <input type="text" class="form-control"
                                                                    id="converted_amount" placeholder="Converted Amount"
                                                                    aria-label="Converted Amount"
                                                                    aria-describedby="basic-addon1" readonly>
                                                            </div>


                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-4"><b class="text-primary">Purpose of
                                                                    Transfer &nbsp;</b><span
                                                                    class="text-danger">*</span></b></label>

                                                            <input type="text" class="form-control col-md-8 mb-2"
                                                                id="purpose" value="Own Account"
                                                                placeholder="Enter purpose of transfer"
                                                                autocomplete="off">

                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-md-4"><b class="text-primary">Expense
                                                                    Category
                                                                    &nbsp;</b></label>
                                                            <input type="hidden" value="Others" id="category_">

                                                            {{-- <label class="h6">Category</label> --}}

                                                            <select class="form-control col-md-8 mb-2" id="category"
                                                                required>
                                                                <option value="">Select Category</option>

                                                            </select>

                                                        </div>







                                                        {{-- <div class="form-group row">
                                                                <label class="col-md-4"><b class="text-primary">Future
                                                                        Payment</b> </label>
                                                                <input class="form-control col-md-8" type="date"
                                                                    id="future_payment">
                                                            </div> --}}

                                                        {{-- <div class="row">
                                                                <div class="col-md-4"></div>
                                                                <div class="col-md-8">

                                                                    <div class="form-group">

                                                                        <div class="custom-control custom-checkbox col-md-8">
                                                                            <input type="checkbox" class="custom-control-input"
                                                                                id="customCheck1">
                                                                            <label class="custom-control-label"
                                                                                for="customCheck1">Schedule
                                                                                Payments</label>
                                                                        </div>
                                                                        <legend></legend>

                                                                        <input type="text" class="form-control"
                                                                            id="schedule_payment_contraint_input">

                                                                        <label class="">Value Date</label>

                                                                        <input type="date" class="form-control"
                                                                            id="schedule_payment_date">

                                                                    </div>
                                                                </div>
                                                            </div> --}}



                                                        <div class="form-group text-right m-2">
                                                            <button class="btn btn-primary btn-rounded" type="submit"
                                                                id="next_button">
                                                                &nbsp; Next &nbsp;<i class="fe-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1"></div>



                                                </div>
                                            </div>

                                        </form>


                                    </div>


                                </div>

                                <div class="col-md-4 m-2 d-none d-sm-block" id="related_information_display"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <br><br>

                                    <div class="col-md-12 card card-body rtgs_transfer_summary">
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

                                            {{-- <h6 class="col-md-5">Account Currency:</h6>
                                                <span class="text-primary display_from_account_currency col-md-7"></span> --}}
                                        </div>

                                        {{-- <hr> --}}
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

                                            {{-- <h6 class="col-md-5">Enter Amount:</h6>
                                                <span class="text-primary display_amount col-md-7"></span> --}}

                                            <h6 class="col-md-5">Currency Rate:</h6>
                                            <span class="text-primary display_midrate col-md-7"></span>

                                            <h6 class="col-md-5">Converted Amount:</h6>
                                            <span class="text-primary display_converted_amount col-md-7"></span>
                                        </div>

                                        {{-- <hr> --}}


                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                    <div class="">

                        {{-- <table
                            class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info card">
                            <tbody class="">
                                <tr>

                                    <td>
                                        <a
                                            class="text-body font-weight-semibold display_from_account_name"></a>
                                        <small class="d-block display_from_account_no"></small>
                                    </td>

                                    <td class="text-right font-weight-semibold">
                                        <span class="display_from_account_currency"></span>
                                        <span class="display_from_account_amount"></span>

                                    </td>
                                </tr>


                            </tbody>
                        </table> --}}
                    </div>



                    <div class="">
                        <div class="form-group">





                            {{-- <table
                                class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card">
                                <tbody>
                                    <tr>

                                        <td>
                                            <a
                                                class="text-body font-weight-semibold display_to_account_type"></a>
                                            <small class="d-block display_to_account_name"></small>
                                            <small class="d-block display_to_account_no"></small>
                                        </td>

                                        <td class="text-right font-weight-semibold">
                                            {{-- <span class="display_to_account_currency"></span> --}}
                            {{-- <span class="display_to_account_amount"></span> --}}

                            </td>
                            </tr>


                            </tbody>
                            </table>


                        </div>





                        {{-- <img src="{{ asset("land_asset/images/own-account-img.PNG") }}" /> --}}

                        {{-- <img src="{{ asset('assets/images/wallet1.jpg') }}" class="img-fluid" alt=""
                        style="opacity: 0.5"> --}}


                    </div> <!-- end col -->


                    <!-- end row -->



                    <div class="col-md-8  card-body">
                        {{-- <h3 class=" m-t-0 text-primary">OWN ACCOUNT TRANSFER</h3>s --}}
                        <hr>







                    </div>

                    <div class="col-md-2"></div>

                </div> <!-- end card-body -->


                <!-- Modal -->
                <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                                @csrf
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
    {{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
    <script>
        var customerType = @json(session()->get('customerType'));
        // console.log(@json(session()->get('')))
    </script>
    <script src="{{ asset("assets/js/pages/transfer/ownAccount.js") }}"> </script>
    @endsection
