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
                                <img src="{{ asset('land_asset/images/statement_success.gif') }}" style="zoom: 0.5"
                                    alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>From Account:</td>
                            <td>
                                <span class="d-block font-13 text-primary text-bold display_from_account_name"
                                    id="display_from_account_name"> </span>
                                <span class="d-block font-13 text-primary text-bold display_from_account_no"
                                    id="display_from_account_no"></span>
                            </td>
                        </tr>

                        <tr>
                            <td>To Account:</td>
                            <td>
                                <span class="d-block font-13 text-primary text-bold display_to_account_name"
                                    id="display_to_account_name"> </span>

                                <span class="d-block font-13 text-primary text-bold display_to_account_no"
                                    id="display_to_account_no"> </span>

                            </td>
                        </tr>

                        <tr>
                            <td>Amount:</td>
                            <td>
                                <span class="font-15 text-primary h3 display_currency" id="display_currency"> </span>
                                &nbsp;
                                <span class="font-15 text-primary h3 display_transfer_amount"
                                    id="display_transfer_amount"></span>

                            </td>
                        </tr>

                        <tr>
                            <td>Purpose:</td>
                            <td>
                                <span class="font-13 text-primary h3 display_purpose" id="display_purpose"></span>
                            </td>
                        </tr>

                        <tr>
                            <td>Category:</td>
                            <td>
                                <span class="font-13 text-primary h3 display_category" id="display_category"></span>

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

                            <td colspan="2">

                                <div class="alert alert-info form-control col-md-12" role="alert">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="terms_and_conditions"
                                            name="terms_and_conditions" id="terms_and_conditions">
                                        <label class="custom-control-label " for="terms_and_conditions">
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
            <!-- Center modal content -->
            <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header text-center ">

                        </div>
                        <div class="modal-body transfer_pin_modal">
                            <h3 class="modal-title text-primary text-center" id="myCenterModalLabel ">ENTER TRANSACTION
                                PIN</h3>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-9  text-center">
                                    <form action="#" autocomplete="off" aria-autocomplete="off">
                                        <input type="text" name="user_pin" maxlength="4" autocomplete="off"
                                            aria-autocomplete="off" class="form-control key hide_on_print" id="user_pin"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        <br>
                                        <button class="btn btn-success" type="button" id="transfer_pin"
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

                <span> <button class="btn btn-secondary btn-rounded" type="button" id="back_button"> <i
                            class="mdi mdi-reply-all-outline"></i>&nbsp;Back</button>
                    &nbsp; </span>
                <span>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded " type="button" id="confirm_transfer_button"
                        data-toggle="modal" data-target="#centermodal">
                        <span id="confirm_transfer">Confirm
                            Transfer</span>
                        <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner"
                            aria-hidden="true" style="display: none"></span>
                        <span id="spinner-text" style="display: none">Loading...</span>
                    </button>
                </span>

                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print" type="button" id="print_receipt"
                        onclick="window.print()" style="display: none">Print
                        Receipt
                    </button></span>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>

</div>
