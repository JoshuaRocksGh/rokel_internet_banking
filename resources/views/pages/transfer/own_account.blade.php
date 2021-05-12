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
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

        input.key {
            font-family: 'password';
            width: 100px;
            height: 26px;
        }

    </style>


@endsection



@section('content')

    <div>

        <div class="row">
            <div class="col-12">

                <div class="card-body">
                    <div class="row">


                        <div class="col-md-12">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-left">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Transfer</a>
                                                </li>
                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">RTGS</a></li> --}}
                                                <li class="breadcrumb-item active text-danger">OWN ACCOUNT TRANSFER</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <h1 class="header-title text-primary" style="font-size: 24px"><img
                                    src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                                OWN ACCOUNT TRANSFER</h1>

                            <p class="text-muted font-14 m-b-20">

                                {{-- Real Time Gross Settlement(RTGS) refers to a funds transfer system that allows for the
                                    instantaneous transfer of money. --}}
                                <hr style="border: 1px solid">
                            </p>



                            <div class="row">

                                <div class="col-md-8 rtgs_summary_card m-2" id="transaction_summary"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
                                            <br><br><br>

                                            <div class="table-responsive">
                                                <table class="table mb-0 table-bordered table-striped">

                                                    <tbody>
                                                        <tr class="success_gif">
                                                            <td class="text-center bg-white" colspan="2">
                                                                <img src="{{ asset('land_asset/images/statement_success.gif') }}"
                                                                    style="zoom: 0.5" alt="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transfer From:</td>
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
                                                            <td>Transfer To:</td>
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


                                                        <tr class="schedule_payment_summary">
                                                            <td>Future Payment:</td>
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

                                                        <tr>
                                                            <td>Enter Pin: </td>
                                                            <td>

                                                                <input type="text" name="user_pin"
                                                                    class="form-control key hide_on_print" id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                            <br>
                                            <div class="form-group text-center">

                                                <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                        id="back_button">Back</button> &nbsp; </span>
                                                <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                        id="confirm_button"><span id="confirm_transfer">Confirm
                                                            Transfer</span>
                                                        <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                            id="spinner" aria-hidden="true"></span>
                                                        <span id="spinner-text">Loading...</span>
                                                    </button></span>
                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                        type="button" id="print_receipt" onclick="window.print()">Print
                                                        Receipt
                                                    </button></span>
                                            </div>
                                        </div>
                                        <div class="col-md-1s"></div>
                                    </div>

                                </div>

                                <div class=" col-md-8 rtgs_card m-2" id="transaction_form"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">

                                    <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                        @csrf
                                        <div class="">

                                            <div class="col-md-12">
                                                <br><br><br>
                                                <div class="row">
                                                    <div class="col-md-1"></div>

                                                    <div class="col-md-9">

                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-4 "><span class="text-danger">*</span>Transfer From </label>


                                                            <select class="form-control col-md-8 " id="from_account"
                                                                required>
                                                                <option value="">Select Account
                                                                </option>


                                                            </select>
                                                        </div>




                                                        <div class="form-group row mb-3" id="pay_from_account">

                                                            <label class="col-md-4"><span
                                                                    class="text-danger">*</span>Beneficiary Account</label>

                                                            <select class="form-control col-md-8" id="to_account" required>
                                                                <option value="">Select Beneficiary Account</option>
                                                                {{-- <option value="Standard Chartered Bank~Joshua Amarfio~004004110449140121~GHS~800">
                                                                Currenct Account ~ 004004110449140121 </option> --}}
                                                            </select>
                                                            <br>



                                                        </div>


                                                        <div class="form-group row">
                                                            {{-- <label for="form-group"> Amount<span class="text-danger">*</span></label> --}}
                                                            <label class="col-md-4 "><span class="text-danger">*</span>Amount </label>
                                                            <input type="text" class="form-control col-md-8" id="amount"
                                                                placeholder="Enter Amount: 0.00"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                required>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label class="h6 col-md-4 "><span
                                                                    class="text-danger">*</span>Expense Category </label>
                                                            {{-- <label for="form-group">Category</label> --}}


                                                            <select class="custom-select col-md-8" id="category" required>
                                                                <option value="">---Not Selected---</option>
                                                                <option value="01~Travel">Travel</option>
                                                                <option value="02~Petty Cash">Petty Cash</option>
                                                                <option value="03~Salary">Salary</option>
                                                                <option value="04~Groceries">Groceries</option>
                                                                <option value="05~Allowances">Allowances</option>
                                                                <option value="06~Medical">Medical</option>
                                                                <option value="07~Vendor Payment">Vendor Payment</option>
                                                                <option value="08~Insurance">Insurance</option>
                                                                <option value="09~Tax">Tax</option>
                                                                <option value="10~Others">Others</option>
                                                            </select>


                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label class="col-md-4 "><span class="text-danger">*</span>Purpose of Transfer</label>

                                                                    <input type="text" class="form-control col-md-8"
                                                                        id="purpose" placeholder="Enter purpose / narration"
                                                                        required>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-4"></div>
                                                            <div class="col-8">

                                                                <div class="form-group">

                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            id="customCheck1">
                                                                        <label class="custom-control-label"
                                                                            for="customCheck1">Future
                                                                            Payments</label>
                                                                    </div>
                                                                    <legend></legend>

                                                                    <input type="text" class="form-control"
                                                                        id="schedule_payment_contraint_input">

                                                                    <input type="date" class="form-control"
                                                                        id="schedule_payment_date">

                                                                </div>

                                                            </div>
                                                        </div>




                                                    </div>

                                                    <div class="col-md-1"></div>
                                                </div>
                                                {{-- <div class="form-group"> --}}
                                                    {{-- <label class="h6">Payer Account <span
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


                                                {{-- </div> --}}



                                                {{-- <div class="form-group mt-1 select_beneficiary"> --}}
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


                                                {{-- </div> --}}




                                            </div>


                                        </div>




                                        <div class="form-group no_beneficiary">
                                            <div class="alert alert-warning" role="alert">
                                                <i class="mdi mdi-alert-outline mr-2"></i> <strong>warning</strong> No
                                                beneficiary found
                                            </div>
                                        </div>


                                        <div class="form-group text-right yes_beneficiary">
                                            <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                &nbsp; Next &nbsp;<i class="fe-arrow-right"></i> </button>
                                            {{-- <button type="button" id="hide_button">hide</button> --}}
                                        </div>




                                    </form>
                                </div> <!-- end col -->

                                {{-- <button class="m-2 btn btn-info d-none d-sm-block">Related Information</button> --}}
                                {{-- LEFT CARD --}}

                                <div class=" col-md-3 rtgs_card_right m-2 d-none d-sm-block"
                                    style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230)); zoom: 0.9 ;">

                                    <div class=" col-md-12 ">
                                        <br><br>
                                        <div class="row">
                                            <h6 class="col-md-5">Sender Name:</h6>
                                            <span class="text-primary display_from_account_name col-md-7"></span>

                                            <h6 class="col-md-5">Sender Account:</h6>
                                            <span class="text-primary display_from_account_no col-md-7"></span>

                                            <h6 class="col-md-5">Available Balance:</h6>
                                            <span class="text-primary display_from_account_amount col-md-7"></span>

                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_from_account_currency col-md-7"></span>
                                        </div>

                                        <br>
                                        <div class="row">
                                            <h6 class="col-md-5">Receiver Name:</h6>
                                            <span class="text-primary display_to_account_name col-md-7"></span>

                                            <h6 class="col-md-5">Receiver Account:</h6>
                                            <span class="text-primary display_to_account_no col-md-7"></span>

                                            <h6 class="col-md-5">Account Currency:</h6>
                                            <span class="text-primary display_to_account_currency col-md-7"></span>
                                        </div>
                                    </div>
                                </div>






                                {{-- <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/same_bank.jpg') }}" class="img-fluid" alt="">
                                </div> <!-- end col --> --}}


                                <!-- end row -->

                                {{--  <button class="m-2 btn btn-info d-block d-sm-none">Related Information</button>  --}}

                            </div>

                            {{-- <div class="row" id="transaction_summary">


                                    <div class="col-md-12">
                                        <div class="border p-3 mt-4 mt-lg-0 rounded card">
                                            <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                            <p class="display-4 text-center text-success success-message "></p>

                                            <div class="table-responsive">
                                                <table class="table mb-0 table-bordered table-striped">

                                                    <tbody>
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

                                                        <tr>
                                                            <td>Enter Pin: </td>
                                                            <td>

                                                                <input type="text" name="user_pin"
                                                                    class="form-control key hide_on_print" id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                            <br>
                                            <div class="form-group text-center">

                                                <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                        id="back_button">Back</button> &nbsp; </span>
                                                <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                        id="confirm_button"><span id="confirm_transfer">Confirm
                                                            Transfer</span>
                                                        <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                            id="spinner" aria-hidden="true"></span>
                                                        <span id="spinner-text">Loading...</span>
                                                    </button></span>
                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                        type="button" id="print_receipt" onclick="window.print()">Print
                                                        Receipt
                                                    </button></span>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->





                                </div> --}}



                        </div>

                        {{-- <div class="col-md-1"></div> --}}

                    </div> <!-- end card-body -->



                    <!-- Center modal content -->
                    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true"
                        style="zoom: 0.9;">
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
                    </div><!-- /.modal -->



                    <!-- Modal -->
                    <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                                    <div class="modal-header">
                                        <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                            Details</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
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

                                        {{-- <div class="form-group">
                                                <label class="font-16 purple-color">Enter Pin</label>
                                                <input type="text" class="form-control" id="user_pin"
                                                    data-toggle="input-mask" placeholder="enter pin" required
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                            </div> --}}

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


            </div>


        @endsection

        @section('scripts')



            <script src="https://code.jquery.com/jquery-3.6.0.js"
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

            <script>
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
                                    value: data[index].isoCode + '~' + data[index]
                                        .description
                                }).text(data[index].description));

                            });

                        },

                    })
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
                                }).text(data[index].accountNumber + '~' + data[index].currency +
                                    '~' + data[index].availableBalance));
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

                            if (response.data.length > 0) {
                                $('.yes_beneficiary').show()
                                $('.no_beneficiary').hide()

                                $.each(data, function(index) {
                                    //$('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
                                    $('#to_account').append($('<option>', {
                                        value: data[index].BANK_NAME + '~' +
                                            data[
                                                index].NICKNAME + '~' + data[
                                                index]
                                            .BEN_ACCOUNT + '~' + data[index]
                                            .BEN_ACCOUNT_CURRENCY
                                    }).text(data[index].NICKNAME + '~' + data[index].BANK_NAME +
                                        '~' + data[index].BEN_ACCOUNT + '~' + data[index]
                                        .BEN_ACCOUNT_CURRENCY));

                                });

                            } else {
                                $('.yes_beneficiary').hide()
                                $('.no_beneficiary').show()
                            }


                        },

                    })
                }

                $(document).ready(function() {



                    {{-- $('.hide-for-demo-purpose').hide() --}}
                    $('#spinner').hide(),
                        $('#spinner-text').hide(),
                        $('#print_receipt').hide(),
                        $(".hide_invoice").hide()
                    $('.no_beneficiary').hide()
                    $("#transaction_summary_").hide();
                    $(".success_gif").hide();
                    {{-- $(".schedule_payment_summary").hide(); --}}

                    setTimeout(function() {
                        from_account();
                        get_benerficiary();
                        bank_list();
                        get_currency();
                    }, 2000)

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
                    }

                    $(".select_onetime").css("display", "none");
                    $(".select_beneficiary").css("display", "block");

                    // $(".select_beneficiary").show();
                    //$(".select_onetime").hide();

                    var type = $("input[type='radio']:checked").val();



                    // hide seleect accounts info
                    $(".from_account_display_info").hide()
                    $(".to_account_display_info").hide()
                    $("#schedule_payment_date").hide()
                    $('#schedule_payment_contraint_input').hide()
                    $('.display_schedule_payment_date').text('N/A'),
                    $('#select_frequency').hide(),
                    $('#select_frequency_text').hide(),

                    $("#transaction_form").show()
                    $("#transaction_summary").hide()


                    $("#back_button").click(function(e) {
                        e.preventDefault()
                        $("#transaction_summary").hide()
                        $("#transaction_form").show()

                    })

                    var amt = 0

                    //for testing purpose
                    $("#from_account").change(function() {
                        var from_account = $(this).val()
                        console.log(from_account);

                        if (from_account.trim() == '' || from_account.trim() == undefined) {
                            $(".from_account_display_info").hide()

                        } else {
                            from_account_info = from_account.split("~")
                            var to_account = $('#to_account').val()

                            if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' && to_account.trim() != '') {
                                toaster('can not transfer to same account', 'error')
                                $(this).val('')
                            }

                            // set summary values for display
                            $(".display_from_account_type").text(from_account_info[0].trim())
                            $(".display_from_account_name").text(from_account_info[1].trim())
                            $(".display_from_account_no").text(from_account_info[2].trim())
                            $(".display_from_account_currency").text(from_account_info[3].trim())

                            $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                            amt = from_account_info[4].trim()

                            $(".display_from_account_amount").text(formatToCurrency(Number(
                                from_account_info[4]
                                .trim())))
                            {{-- alert('and show' + from_account_info[3].trim()) --}}
                            $(".from_account_display_info").show()
                        }
                    });


                    $("#to_account").change(function() {
                        var to_account = $(this).val()
                        console.log(to_account);
                        if (to_account.trim() == '' || to_account.trim() == undefined) {

                            $(".to_account_display_info").hide()

                        } else {
                            to_account_info = to_account.split("~")


                            var from_account = $('#from_account').val()

                            if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' &&
                                to_account.trim() != '') {
                                toaster('can not transfer to same account', 'error')
                                {{-- alert('can not transfer to same account') --}}
                                $(this).val('')
                            }

                            // set summary values for display
                            $(".display_to_account_type").text(to_account_info[0].trim())
                            $(".display_to_account_name").text(to_account_info[1].trim())
                            $(".display_to_account_no").text(to_account_info[2].trim())
                            $(".display_to_account_currency").text(to_account_info[3].trim())

                            $(".to_account_display_info").show()
                        }
                    });

                    var type = $("input[type='radio']:checked").val();

                    function formatToCurrency(amount) {
                        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                    };


                    // CHECK BOX CONSTRAINT SCHEDULE PAYMENT
                    $("#customCheck1").on("change", function() {
                        if ($(this).is(":checked")) {
                            console.log("Checkbox Checked!");
                            {{-- $('.schedule_payment_summary').show(); --}}
                            $("#schedule_payment_date").show(),
                            $(".display_schedule_payment").text('YES'),
                            $('#schedule_payment_contraint_input').val('TRUE'),
                            $('#select_frequency').show();
                            $('#select_frequency_text').show();

                        } else {
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

                    $("#amount").change(function(){
                        console.log($("#amount").val());
                    });

                    var e = document.getElementById("category");
                    var category_info = category.split("~")
                        $("#display_category").text(category_info[1])
                        console.log(category_info[1]);

                    //end of testing purpose



                    // NEXT BUTTON CLICK
                    $("#next_button").click(function() {

                        var type = $("input[type='radio']:checked").val();
                        var from_account = $('#from_account').val()
                        var transfer_amount = $('#amount').val()
                        var category = $('#category').val()
                        var purpose = $('#purpose').val()
                        var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                        var schedule_payment_date = $('#schedule_payment_date').val();



                        if (from_account.trim() == '' || transfer_amount.trim() == '' || category.trim() ==
                            '' || purpose.trim() == '') {
                            toaster('Field must not be empty', 'error');
                            return false

                        }

                        if (parseFloat(amt) < parseFloat(transfer_amount)) {
                            toaster('Insufficient account balance', 'error', 10000)
                            return false;
                        }

                        //set purpose and category values
                        var category_info = category.split("~")
                        $("#display_category").text(category_info[1])
                        console.log(category_info[1]);
                        $("#display_purpose").text(purpose)

                        $("#transaction_form").hide()
                        $("#transaction_summary").show()
                        $('#print_button').hide();



                        if ($('#customCheck1').is(':checked')) {
                            console.log("checked");
                        } else {
                            console.log("unchecked");
                        }


                        if (schedule_payment_contraint_input.trim() != '' && schedule_payment_date
                            .trim() ==
                            '') {
                            $('.display_schedule_payment_date').text('N/A') // shedule date NULL
                            toaster('Select schedule date for subsequent transfers', 'error')
                            {{-- alert('Select schedule date for subsequent transfers') --}}
                            return false
                        }

                        $('.display_schedule_payment_date').text(schedule_payment_date)

                        if (type == 'beneficiary') {

                            var to_account = $('#to_account').val()

                            $('.display_schedule_payment_date').text(schedule_payment_date)


                            if (from_account.trim() == '' || to_account.trim() == '' || transfer_amount
                                .trim() == '' || category.trim() == '' || purpose.trim() == '') {
                                toaster('Field must not be empty', 'error');

                                return false
                            } else {
                                //set purpose and category values
                                var category_info = category.split("~")
                                $("#display_category").text(category_info[1])
                                $("#display_purpose").text(purpose)

                                $("#transaction_form").hide()
                                $("#transaction_summary").show()
                            }




                        }
                         else if (type == 'onetime') {

                            var from_account = $('#from_account').val()

                            // ONETIME BENEFICIARY DETAILS
                            var onetime_beneficiary_alias_name = $('#onetime_beneficiary_alias_name')
                                .val()
                            var onetime_beneficiary_account_number = $('#onetime_beneficiary_account_number').val()
                            var onetime_beneficiary_account_currency = $(
                                '#onetime_beneficiary_account_currency').val()
                            var onetime_beneficiary_name = $('#onetime_beneficiary_name').val()
                            var onetime_beneficiary_bank_name = $('#onetime_beneficiary_bank_name')
                                .val()
                            var onetime_beneficiary_phone = $('#onetime_beneficiary_phone').val()



                            // END OF ONETIME BENEFICIARY DETAILS


                            if (from_account.trim() == '' || transfer_amount.trim() == '' || category.trim() == '' || purpose
                                .trim() == '') {
                                toaster('Field must not be empty', 'error');

                                return false;
                            }
                            else {
                                //set purpose and category values
                                var category_info = category.split("~")
                                $("#display_category").text(category_info[1])
                                $("#display_purpose").text(purpose)

                                $("#transaction_form").hide()
                                $("#transaction_summary").show()
                            }




                        }
                    });


                    var user_pin = $('#user_pin').val();
                    // POST TO API

                    $('#confirm_button').click(function(e) {
                        e.preventDefault();
                            var from_account = $('#from_account').val().split('~')
                            var to_account = $('#to_account').val().split('~')
                            var transfer_amount = $('#amount').val()
                            var category = $('#category').val().split('~')
                            var purpose = $('#purpose').val()
                            var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                            var schedule_payment_date = $('#schedule_payment_date').val();


                            var from_account_ = from_account[2];
                            var to_account_ = to_account[2];
                            var account_name = to_account[1];
                            var currency = to_account[3];
                            var category_ = category[0]
                            var bank_name = to_account[0]
                            var user_pin = $('#user_pin').val();


                            if (from_account_.trim() == '' || to_account_.trim() == '' || transfer_amount.trim() == '' || category_.trim() == '' || purpose.trim() == '' || user_pin == '') {
                                toaster('Field must not be empty', 'error', 10000)
                                return false;
                            }

                            $('#spinner').show(),
                                $('#spinner-text').show(),

                                $('#confirm_transfer').hide(),
                                $('#confirm_button').attr('disabled', true);


                                console.log(from_account);
                                console.log(to_account);
                                console.log(transfer_amount);
                                console.log(category);
                                console.log(purpose);
                                console.log(schedule_payment_contraint_input);
                                console.log(schedule_payment_date);

                            $.ajax({
                                'type': 'POST',
                                'url': 'own-account-api',
                                "datatype": "application/json",
                                'data': {
                                    'from_account': from_account,
                                    'to_account': to_account,
                                    'amount': transfer_amount,
                                    'category': category,
                                    'currency': currency,
                                    // 'bank_name': bank_name,
                                    'secPin': user_pin,
                                    'payment_date': schedule_payment_date,
                                    'beneficiaryName': account_name,
                                    'purpose': purpose,

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

                                        Swal.fire(
                                            response.message,
                                            '',
                                            'success'
                                        );
                                        s
                                    } else {
                                        toaster(response.message, 'error', 10000)

                                        $('#spinner').hide();
                                        $('#spinner-text').hide();
                                        $('#print_receipt').hide();
                                        $(".success_gif").hide();
                                        $(".rtgs_card_right").show();

                                        $('#confirm_transfer').show();
                                        $('#confirm_button').attr('disabled', false);


                                    }
                                },
                                error: function(xhr, status, error) {
                                    $('#spinner').hide();
                                    $('#spinner-text').hide();
                                    $('#print_receipt').hide();


                                    $('#confirm_transfer').show();
                                    $('#confirm_button').attr('disabled', false);
                                }
                            })



                    });




                });

            </script>

        @endsection
