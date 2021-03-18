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
                                <i class="fe-arrow-left"></i>  SAME BANK BENEFICIARY
                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7">

                                    <form action="#">
                                        <div class="form-group">
                                            <label class="purple-color"> Beneficiary Account Details</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000" placeholder="Account Number">

                                        </div>
                                        <div class="form-group">

                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00" placeholder="Account Name">

                                        </div><br>
                                        <div class="form-group">
                                            <label class="purple-color">Beneficiary Personal Details</label>
                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00" placeholder="Beneficiary Name">

                                        </div>
                                        <div class="form-group">

                                            <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000" placeholder="Beneficiary Email">

                                        </div><br>


                                        <div class="form-group">

                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Email beneficiary when a transfer is made</label>
                                            </div>

                                        </div>

                                        <p class="sub-header font-13">
                                            Providing  beneficairy email  and  checking

                                        </p>

                                        <button class="btn btn-primary btn-rounded" type="submit">Save Beneficiary</button>
                                    </form>

                                </div> <!-- end col -->



                                <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/send.png') }}" class="img-fluid" alt="" >
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

{{--

                            <div class="row" id="transaction_summary">


                                <div class="col-md-12">
                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                        <div class="table-responsive">
                                            <table class="table mb-0">

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
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>


                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="online_display_beneficiary_alias_name"> Daniel Hammond</span>

                                                            <span class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                                                id="">0000333030303 </span>
                                                                &nbsp; | &nbsp;
                                                            <span class="font-13 text-primary h3 online_display_beneficiary_account_currency" id=""> GHS
                                                            </span>

                                                            <span
                                                            class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                            id="online_display_beneficiary_email">dan@gmail.com</span>

                                                            <span
                                                            class="d-block font-13 text-primary text-bold online_display_beneficiary_phone"
                                                            id="online_display_beneficiary_phone">0554602954</span>


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
                                                        <td>Schedule Payment:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_schedule_payment"
                                                                id="display_schedule_payment">NO </span>
                                                                &nbsp; | &nbsp;
                                                            <span class="font-13 text-primary h3 display_schedule_payment_date" id="display_schedule_payment_date"> N/A
                                                            </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Transfer Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_transfer_date">{{  date('d F, Y') }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Posted BY: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_posted_by">Kwabena Ampah</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Enter Pin: </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="user_pin" class="form-control"
                                                                    id="user_pin"
                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
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
                                                    id="back_button">Back</button> &nbsp; </span>
                                            <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                    id="confirm_button">Confirm Transfer </button></span>
                                            <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                    id="confirm_button">Print Receipt </button></span>
                                        </div>
                                    </div>

                                </div> <!-- end col -->





                            </div>
  --}}


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


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {

            });

        </script>
    @endsection

    @section('scripts')

    @endsection





