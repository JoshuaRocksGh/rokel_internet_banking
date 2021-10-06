<div class="col-md-7 site-card m-2" id="transaction_summary">
    <br>
    <div class="col-md-12">
        <div class="card border p-3 mt-4 mt-lg-0 rounded">
            <h4 class="header-title mb-3">Transfer Detail Summary</h4>

            <p class="display-4 text-center text-success success-message "></p>

            <div class="table-responsive table-striped table-bordered">
                <table class="table mb-0">

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
                                <span class="font-13 text-primary text-bold display_from_account_type"
                                    id="display_from_account_type"></span>
                                <span class="d-block font-13 text-primary text-bold display_from_account_name"
                                    id="display_from_account_name"> </span>
                                <span class="d-block font-13 text-primary text-bold display_from_account_no"
                                    id="display_from_account_no"></span>
                            </td>
                        </tr>

                        <tr>
                            <td>To Account:</td>
                            <td>

                                <span class="font-13 text-primary text-bold display_to_account_type"
                                    id="display_to_account_type"> </span>
                                <span class="d-block font-13 text-primary text-bold display_to_account_name"
                                    id="display_to_account_name"> </span>
                                <span class="d-block font-13 text-primary text-bold display_to_account_no"
                                    id="display_to_account_no"> </span>


                                {{-- <span class="d-block font-13 text-primary text-bold display_to_account_name"
                                                id="online_display_beneficiary_alias_name"> </span> --}}

                                <span class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                    id="online_display_beneficiary_account_no"> </span>
                                {{-- &nbsp; | &nbsp; --}}
                                <span class="font-13 text-primary h3 online_display_beneficiary_account_currency"
                                    id="online_display_beneficiary_account_currency">
                                </span>

                                <span class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                    id="online_display_beneficiary_email"> </span>

                                <span class="d-block font-13 text-primary text-bold online_display_beneficiary_phone"
                                    id="online_display_beneficiary_phone"> </span>


                            </td>
                        </tr>

                        <tr>
                            <td>Amount:</td>
                            <td>
                                <span class="font-15 text-primary h3 display_currency" id="display_currency"> </span>
                                &nbsp;
                                <span class="font-15 text-primary h3 display_converted_amount"
                                    id="display_transfer_amount"></span>

                            </td>
                        </tr>


                        <tr>
                            <td>Category:</td>
                            <td>
                                <span class="font-13 text-primary h3 display_category" id="display_category"></span>

                            </td>
                        </tr>


                        <tr>
                            <td>Purpose:</td>
                            <td>
                                <span class="font-13 text-primary h3 display_purpose" id="display_purpose"></span>
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
            <!-- end table-responsive -->
            <br>
            <div class="form-group text-center">

                <span> <button class="btn btn-secondary btn-rounded" type="button" id="back_button"><i
                            class="mdi mdi-reply-all-outline"></i>
                        &nbsp;Back</button> &nbsp; </span>
                <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button" id="confirm_transfer_button">
                        <span id="confirm_transfer">Confirm Transfer</span>
                        <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner"
                            aria-hidden="true" style="display: none"></span>
                        <span id="spinner-text" style="display: none">Loading...</span>
                    </button></span>
                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print" type="button" style="display: none"
                        id="print_receipt" onclick="window.print()">Print
                        Receipt
                    </button></span>
            </div>
        </div>

    </div> <!-- end col -->

</div>