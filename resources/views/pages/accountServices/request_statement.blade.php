@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">REQUEST A STATEMENT</h2>


                        <hr>


                        <div class="row" id="transaction_form">

                            <div class="col-md-2"></div>

                            <div class="col-md-8">

                                <div class="">

                                 <table class="table mb-0 table-striped table-bordered">

                                    <tbody>
                                        <tr class="bg-secondary text-white">
                                            <td>Request Details</td>
                                        </tr>

                                        <tr>
                                        </tr>

                                    </tbody>


                                </table>

                                <p>


                                    <form role="form" class="parsley-examples">
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-5 col-form-label">Account Number<span
                                                        class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select class="custom-select " id="account_number" required>
                                                        <option value="">Select Account</option>
                                                        {{-- <option value="CA - PERSONAL ~kwabeane Ampah~001023468976001~GHS~2000">
                                                            Current Account ~ 001023468976001 </option> --}}
                                                            <option value="001023468976001">001023468976001</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="statementType" class="col-5 col-form-label">
                                                    Type of Statement
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select class="custom-select " id="statementType" required>
                                                        <option value="">Select Type of Statement</option>
                                                        <option value="VISA">VISA</option>
                                                        <option value="ELECTRONIC">ELECTRONIC</option>
                                                        <option value="ORDINARY">ORDINARY</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="pUBranch" class="col-5 col-form-label">
                                                    <label>Pick Up Branch</label>
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select ect class="custom-select " id="pUBranch" required>
                                                        <option value="">-----Not Selected-----</option>
                                                        <option value="Accra">Accra</option>
                                                        <option value="ADONKIA BRANCH">ADONKIA BRANCH</option>
                                                        <option value="WILBERFORCE BRANCH">WILBERFORCE BRANCH</option>
                                                        <option value="PORT LOKKO BRANCH">PORT LOKKO BRANCH</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="duration" class="col-5 col-form-label">
                                                    <label>Transaction Period</label>
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="btn-group mb-2">
                                                    <input type="date" id="startDate" />
                                                    <input type="date" id="endDate" />

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                    <div class="col-8 offset-4 text-right">
                                                        <br>

                                                        <button type="button" id="submit_button"class="btn btn-primary btn-rounded waves-effect waves-light">
                                                            Submit
                                                        </button>

                                                    </div>
                                                </div>

                                            </div>
                                    </form>

                                </p>


                            </div> <!-- end card-box -->


                            {{-- </div> --}}
                        </div>

                        <div class="col-md-2"></div> <!-- end col -->


                            <!-- end row -->



                        </div>

                        {{-- <div class="row" id="transaction_summary">


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

                                                        <span class="font-13 text-primary text-bold display_to_account_type"
                                                            id="display_to_account_type"> </span>
                                                        <span
                                                            class="d-block font-13 text-primary text-bold display_to_account_name"
                                                            id="display_to_account_name"> </span>
                                                        <span
                                                            class="d-block font-13 text-primary text-bold display_to_account_no"
                                                            id="display_to_account_no"> </span>


                                                        <span
                                                            class="d-block font-13 text-primary text-bold display_to_account_name"
                                                            id="online_display_beneficiary_alias_name"> Daniel
                                                            Hammond</span>

                                                        <span
                                                            class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                                            id="">0000333030303 </span>
                                                        &nbsp; | &nbsp;
                                                        <span
                                                            class="font-13 text-primary h3 online_display_beneficiary_account_currency"
                                                            id=""> GHS
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
                                                        <span class="font-13 text-primary h3 display_schedule_payment_date"
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
                                                        <span class="font-13 text-primary h3" id="display_posted_by">Kwabena
                                                            Ampah</span>
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





                        </div> --}}



                    </div>

                    <div class="col-md-1"></div>

                </div> <!-- end card-body -->

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function toaster(message, icon, timer )
                {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: timer,
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
        $(document).ready(function(){

            $("#account_number").change(function(){
                var account_number = $("#account_number").val();
                console.log(account_number);
            });

            $("#statementType").change(function(){
                var statementType = $("#statementType").val();
                console.log(statementType);
            });

            $("#pUBranch").change(function(){
                var pickUpBranch = $("#pUBranch").val();
                console.log(pickUpBranch);
            });

            $("#startDate").change(function(){
                var startDate = $("#startDate").val();
                console.log(startDate);
            });

            $("#endDate").change(function(){
                var endDate = $("#endDate").val();
                console.log(endDate);
            });

        });
    </script>

@endsection
