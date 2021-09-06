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

                        @include("snippets.receipt")
                        <div class="form_process">
                            <div class="row">
                                @include('snippets.transactionSummary')
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
                                                                id="purpose" value=""
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
                                                                <option selected disabled value="">Select Category
                                                                </option>

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
