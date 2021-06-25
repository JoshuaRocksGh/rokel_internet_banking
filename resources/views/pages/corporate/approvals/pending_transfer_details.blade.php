@extends('layouts.approval_detail')

@section('content')

    <div>

        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-1"></div>

                            <div class="col-md-10">
                                <p class="sub-header font-18 purple-color">
                                    <a href="javascript:window.open('', '_self').close();"
                                        onclick="function(){window.top.close()}">
                                        <i class="mdi mdi-arrow-left-thick "></i>&nbsp; TRANSFER DETAILS

                                    </a>

                                </p>




                                <div class="row card card-body" id="transaction_summary">


                                    <div class="col-md-12">
                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                            <h4 class="header-title mb-3"> Other Bank Transfer</h4>

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

                                                <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                        id="confirm_button">Confirm Transfer </button></span>
                                                <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                        id="confirm_button">Print Receipt </button></span>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->





                                </div>



                            </div>

                            <div class="col-md-1"></div>

                        </div> <!-- end card-body -->



                    </div> <!-- end col -->

                </div> <!-- end row -->



            </div>


            <script src="https://code.jquery.com/jquery-3.6.0.js"
                integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function() {

                    {{-- hide select accounts info --}}
                    $(".from_account_display_info").hide()
                    $(".to_account_display_info").hide()
                    $("#schedule_payment_date").hide()
                    $('#schedule_payment_contraint_input').hide()
                    $('.display_schedule_payment_date').text('N/A')


                    $("#transaction_summary").show()

                    {{-- $("#next_button").click(function(e) {
                    e.preventDefault()

                    $("#transaction_summary").show()
                }) --}}


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

                            $(".display_from_account_amount").text(formatToCurrency(parseFloat(
                                from_account_info[4]
                                .trim())))
                            {{-- alert('and show' + from_account_info[3].trim()) --}}
                            $(".from_account_display_info").show()
                        }




                        {{-- alert(from_account_info[0]); --}}
                    });


                    $("#to_account").change(function() {
                        var to_account = $(this).val()
                        {{-- alert(to_account) --}}
                        if (to_account.trim() == '' || to_account.trim() == undefined) {
                            {{-- alert('money') --}}
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
                            $(".display_to_account_amount").text(formatToCurrency(parseFloat(to_account_info[4]
                                .trim())))

                            $(".to_account_display_info").show()
                        }




                        {{-- alert(to_account_info[0]); --}}
                    });


                    $("#amount").keyup(function() {
                        var from_account = $('#from_account').val()
                        var to_account = $('#to_account').val()
                        if (from_account.trim() == '' || to_account.trim() == '') {
                            alert('Please select source and destination accounts')
                            $(this).val('')
                            return false;
                        } else {
                            var transfer_amount = $(this).val()
                            $(".display_transfer_amount").text(formatToCurrency(parseFloat(to_account_info[4]
                                .trim())))
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




                    $("#next_button").click(function() {
                        {{-- var t =  $("#schedule_payment_date").val()
                    alert(t) --}}
                        {{-- return false; --}}
                        var from_account = $('#from_account').val()
                        var to_account = $('#to_account').val()
                        var transfer_amount = $('#amount').val()
                        var category = $('#category').val()

                        var purpose = $('#purpose').val()

                        var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                        var schedule_payment_date = $('#schedule_payment_date').val();

                        if (schedule_payment_contraint_input.trim() != '' && schedule_payment_date.trim() ==
                            '') {
                            $('.display_schedule_payment_date').text('N/A') // shedule date NULL
                            alert('Select schedule date for subsequent transfers')
                            return false;
                        }


                        $('.display_schedule_payment_date').text(schedule_payment_date)


                        if (from_account.trim() == '' || to_account.trim() == '' || transfer_amount
                            .trim() == '' || category.trim() == '' || purpose.trim() == '') {
                            alert('Field must not be empty')
                            return false
                        } else {
                            //set purpose and category values
                            var category_info = category.split("~")
                            $("#display_category").text(category_info[1])
                            $("#display_purpose").text(purpose)


                            $("#transaction_summary").show()
                        }


                    });


                });

            </script>
        @endsection
