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
                                                    <select class="custom-select " id="from_account_1" required>
                                                        <option value="">Select Account</option>
                                                        <option value="CA - PERSONAL ~kwabeane Ampah~001023468976001~GHS~2000">
                                                            Current Account ~ 001023468976001 </option>

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

                                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">
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

    <script>
        $(document).ready(function() {


            $(".select_onetime").css("display", "none");
            $(".select_beneficiary").css("display", "block");

            // $(".select_beneficiary").show();
            //$(".select_onetime").hide();

            var type = $("input[type='radio']:checked").val();

            $(".radio").click(function() {

                var type = $("input[type='radio']:checked").val();

                if (type == 'beneficiary') {
                    $(".select_onetime").css("display", "none");
                    $(".select_beneficiary").css("display", "block");

                    // set amonut to empty
                    $("#amount").val('');


                    //$(".select_onetime").hide();
                    //$(".select_beneficiary").show();

                }
                if (type == 'onetime') {

                    $(".select_beneficiary").css("display", "none");
                    $(".select_onetime").css("display", "block");

                    // set amonut to empty
                    $("#amount").val('');

                    // $(".select_beneficiary").hide();
                    //$(".select_onetime").show();
                }

            });



            // hide seleect accounts info
            $(".from_account_display_info").hide()
            $(".to_account_display_info").hide()
            $("#schedule_payment_date").hide()
            $('#schedule_payment_contraint_input').hide()
            $('.display_schedule_payment_date').text('N/A')

            $("#transaction_form").show()
            $("#transaction_summary").hide()

            {{-- $("#next_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_form").hide()
                    $("#transaction_summary").show()
                }) --}}

            $("#back_button").click(function(e) {
                e.preventDefault()
                $("#transaction_summary").hide()
                $("#transaction_form").show()

            })

            {{-- Event on From Account field --}}

            $("#from_account").change(function() {
                var from_account = $(this).val()
                {{-- alert(from_account) --}}
                if (from_account.trim() == '' || from_account.trim() == undefined) {
                    {{-- alert('money') --}}
                    $(".from_account_display_info").hide()

                } else {
                    from_account_info = from_account.split("~")
                    {{-- alert('continue') --}}

                    var to_account = $('#to_account').val()

                    if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' &&
                        to_account.trim() != '') {
                        alert('can not transfer to same account')
                        $(this).val('')
                    }

                    // set summary values for display
                    $(".display_from_account_type").text(from_account_info[0].trim())
                    $(".display_from_account_name").text(from_account_info[1].trim())
                    $(".display_from_account_no").text(from_account_info[2].trim())
                    $(".display_from_account_currency").text(from_account_info[3].trim())

                    $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                    $(".display_from_account_amount").text(formatToCurrency(Number(from_account_info[4]
                        .trim())))
                    {{-- alert('and show' + from_account_info[3].trim()) --}}
                    $(".from_account_display_info").show()
                }




                // alert(from_account_info[0]);
            });


            $("#to_account").change(function() {
                var to_account = $(this).val()
                {{-- alert(to_account) --}}
                if (to_account.trim() == '' || to_account.trim() == undefined) {

                    $(".to_account_display_info").hide()

                } else {
                    to_account_info = to_account.split("~")


                    var from_account = $('#from_account').val()

                    if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' &&
                        to_account.trim() != '') {
                        alert('can not transfer to same account')
                        $(this).val('')
                    }

                    // set summary values for display
                    $(".display_to_account_type").text(to_account_info[0].trim())
                    $(".display_to_account_name").text(to_account_info[1].trim())
                    $(".display_to_account_no").text(to_account_info[2].trim())
                    $(".display_to_account_currency").text(to_account_info[3].trim())
                    $(".display_to_account_amount").text(formatToCurrency(Number(to_account_info[4]
                        .trim())))

                    $(".to_account_display_info").show()
                }




                // alert(to_account_info[0]);
            });


            $("#amount").keyup(function() {

                var type = $("input[type='radio']:checked").val();
                //alert(type);
                //return false;

                if (type == 'beneficiary') {
                    var from_account = $('#from_account').val()
                    var to_account = $('#to_account').val()

                    if (from_account.trim() == '' || to_account.trim() == '') {
                        alert('Please select source and destination accounts')
                        $(this).val('')
                        return false;
                    } else {
                        var transfer_amount = $(this).val()
                        $(".display_transfer_amount").text(formatToCurrency(Number(transfer_amount.trim())))
                    }

                } else if (type == 'onetime') {

                    var from_account = $('#from_account').val()
                    var onetime_beneficiary_alias_name = $('#onetime_beneficiary_alias_name').val()
                    var onetime_beneficiary_account_number = $('#onetime_beneficiary_account_number').val()
                    var onetime_beneficiary_account_currency = $('#onetime_beneficiary_account_currency')
                        .val()
                    var onetime_beneficiary_email = $('#onetime_beneficiary_email').val()
                    var onetime_beneficiary_phone = $('#onetime_beneficiary_phone').val()

                    console.log(onetime_beneficiary_alias_name)
                    console.log(onetime_beneficiary_account_number)
                    console.log(onetime_beneficiary_account_currency)


                    if (from_account.trim() == '' || onetime_beneficiary_alias_name.trim() == '' ||
                        onetime_beneficiary_account_number.trim() == '' ||
                        onetime_beneficiary_account_currency.trim() == '') {
                        alert('Please select source and destination accounts')
                        $(this).val('')
                        return false;
                    } else {
                        //alert('set')
                        var transfer_amount = $(this).val()
                        $(".display_transfer_amount").text(formatToCurrency(Number(transfer_amount.trim())))
                    }

                } else {
                    alert(type + ' 00000000 Select either beneficiary or onetime beneficiary')
                    $(this).val('')
                    return false;
                }




            })


            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            };


            // CHECK BOX CONSTRAINT SCHEDULE PAYMENT
            $("input:checkbox").on("change", function() {
                if ($(this).is(":checked")) {
                    console.log("Checkbox Checked!");
                    $("#schedule_payment_date").show()
                    $(".display_schedule_payment").text('YES')
                    $('#schedule_payment_contraint_input').val('TRUE')

                } else {
                    console.log("Checkbox UnChecked!");
                    $("#schedule_payment_date").val('')
                    $("#schedule_payment_date").hide()
                    $('.display_schedule_payment').text('NO')
                    $('.display_schedule_payment_date').text('N/A')

                    $('#schedule_payment_contraint_input').val('')
                    $('#schedule_payment_contraint_input').hide()
                    $('#schedule_payment_date').val('')
                }
            });





            // NEXT BUTTON CLICK
            $("#next_button").click(function() {

                var type = $("input[type='radio']:checked").val();

                var from_account = $('#from_account').val()
                var transfer_amount = $('#amount').val()
                var category = $('#category').val()
                var purpose = $('#purpose').val()
                var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                var schedule_payment_date = $('#schedule_payment_date').val();

                if (from_account.trim() == '' || transfer_amount.trim() == '' || category.trim() == '' ||
                    purpose.trim() == '') {
                    alert('Field must not be empty')
                    return false

                }

                //set purpose and category values
                var category_info = category.split("~")
                $("#display_category").text(category_info[1])
                $("#display_purpose").text(purpose)

                $("#transaction_form").hide()
                $("#transaction_summary").show()



                if (schedule_payment_contraint_input.trim() != '' && schedule_payment_date.trim() == '') {
                    $('.display_schedule_payment_date').text('N/A') // shedule date NULL
                    alert('Select schedule date for subsequent transfers')
                    return false;
                }

                $('.display_schedule_payment_date').text(schedule_payment_date)

                if (type == 'beneficiary') {

                    var to_account = $('#to_account').val()

                    $('.display_schedule_payment_date').text(schedule_payment_date)


                    if (from_account.trim() == '' || to_account.trim() == '' || transfer_amount.trim() ==
                        '' || category.trim() == '' || purpose.trim() == '') {
                        alert('Field must not be empty')
                        return false
                    } else {
                        //set purpose and category values
                        var category_info = category.split("~")
                        $("#display_category").text(category_info[1])
                        $("#display_purpose").text(purpose)

                        $("#transaction_form").hide()
                        $("#transaction_summary").show()
                    }




                } else if (type == 'onetime') {

                    var from_account = $('#from_account').val()

                    // ONETIME BENEFICIARY DETAILS
                    var onetime_beneficiary_alias_name = $('#onetime_beneficiary_alias_name').val()
                    var onetime_beneficiary_account_number = $('#onetime_beneficiary_account_number').val()
                    var onetime_beneficiary_account_currency = $('#onetime_beneficiary_account_currency')
                        .val()
                    var onetime_beneficiary_name = $('#onetime_beneficiary_name').val()
                    var onetime_beneficiary_email = $('#onetime_beneficiary_email').val()
                    var onetime_beneficiary_phone = $('#onetime_beneficiary_phone').val()


                    console.log(onetime_beneficiary_alias_name)
                    console.log(onetime_beneficiary_account_number)
                    console.log(onetime_beneficiary_account_currency)


                    // END OF ONETIME BENEFICIARY DETAILS


                    if (from_account.trim() == '' || onetime_beneficiary_account_number.trim() == '' ||
                        transfer_amount.trim() == '' || category.trim() == '' || purpose.trim() == '') {
                        alert('Field must not be empty')
                        return false
                    } else {
                        //set purpose and category values
                        var category_info = category.split("~")
                        $("#display_category").text(category_info[1])
                        $("#display_purpose").text(purpose)

                        $("#transaction_form").hide()
                        $("#transaction_summary").show()
                    }




                } else {
                    alert('CHOOSE EITHER BENEFICIARY OR ONTIME')
                }




                /*

                var from_account = $('#from_account').val()
                var to_account = $('#to_account').val()
                var transfer_amount = $('#amount').val()
                var category = $('#category').val()

                var purpose = $('#purpose').val()

                var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                var schedule_payment_date = $('#schedule_payment_date').val();

                if(schedule_payment_contraint_input.trim() != '' && schedule_payment_date.trim() == ''){
                    $('.display_schedule_payment_date').text('N/A') // shedule date NULL
                    alert('Select schedule date for subsequent transfers')
                    return false;
                }


                $('.display_schedule_payment_date').text(schedule_payment_date)


                if (from_account.trim() == '' || to_account.trim() == '' || transfer_amount.trim() == '' || category.trim() == '' || purpose.trim() == '' ) {
                    alert('Field must not be empty')
                    return false
                }else{
                    //set purpose and category values
                    var category_info = category.split("~")
                    $("#display_category").text(category_info[1])
                    $("#display_purpose").text(purpose)

                    $("#transaction_form").hide()
                    $("#transaction_summary").show()
                }

                */


                /**
                $.ajax({
                    type: "POST"
                    url: "submit-own-account-transfer"
                    data: {
                        "send_from": send_from,
                        "send_to": send_to,
                        "cashier_id": cashier_id,
                        "text_area": text_area,
                        "amount": amount,
                        "cashier_id": cashier_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    success: function() {
                        Swal.fire(
                            'Post Successful',
                            ' ',
                            'success'
                        )
                    }
                })


                 */
            });


        });

    </script>
@endsection
