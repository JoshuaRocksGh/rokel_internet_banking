@extends('layouts.master')

@section('content')

    <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <h2 class="header-title m-t-0 text-primary">MOBILE MONEY PAYMENT</h2>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-12">
                                    <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                        @csrf
                                        <div class="row">
                                            {{-- LEFT SIDE COLOUMN --}}
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="h6">Transfer From<span
                                                            class="text-danger">*</span></label>


                                                    <select class="custom-select" id="from_account" required>
                                                        <option value="">Select Account</option>

                                                        <option value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                    Saving Account~001023468976001~GHS~2000
                                                 </option>

                                                    </select>


                                                    <table
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
                                                    </table>


                                                </div>


                                            </div>

                                            {{-- RIGHT SIDE COL0UMN --}}

                                            <div class="col-6">

                                                <div class="form-group">
                                                    <label class="">Enter Amount:<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="amount"
                                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label class="h6">Network Type</label>

                                                    <select class="custom-select" id="network_type" required>
                                                        <option value="">Select Account</option>
                                                        <option value="MTN">MTN</option>
                                                        <option value="VODAFONE">VODAFONE</option>
                                                        <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                    </select>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radio" type="radio" name="onetime"
                                                    id="inlineRadio1" value="beneficiary" checked="checked">
                                                <label class="form-check-label" for="inlineRadio1">Select
                                                    beneficiary</label>
                                            </div>
                                            &nbsp;&nbsp;
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input radio" type="radio" name="onetime"
                                                    id="inlineRadio2" value="onetime">
                                                <label class="form-check-label" for="inlineRadio2">Onetime
                                                    beneficiary</label>
                                            </div>
                                        </div>
                                        <hr>

                                        {{-- SELECTED BENEFICIARY FORM --}}
                                        <div class="form-group" id="beneficiary_selected">
                                            <div class="row">
                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="">Receipient Mobile Number:<span
                                                                class="text-danger">*</span></label>

                                                        <select class="custom-select receipient_number"
                                                            id="receipient_number">
                                                            <option value="">Select Receipient Number</option>
                                                            <option value="0244563254">0244563254</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select>
                                                        {{-- <input type="text" class="form-control" id="Receipient_number"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                            required> --}}
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Category:<span class="text-danger">*</span></label>

                                                        <select class="custom-select category" id="category">
                                                            <option value="">Select Category</option>
                                                            <option value="001~Fees">Fees</option>
                                                            <option value="002~Electronics">Electronics</option>
                                                            <option value="003~Travels">Travels</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="" for="">Receipient Network Type:<span
                                                                class="text-danger">*</span></label>
                                                        <select class="custom-select network_type" id="network_type">
                                                            <option value="">Select Network Type</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select>


                                                        {{-- <label class="">Receipient Mobile Number</label>
                                                        <input type="text" class="form-control" id="amount"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                            required> --}}
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Enter Naration:<span
                                                                class="text-danger">*</span></label>

                                                        <input type="text" class="form-control purpose" id="purpose"
                                                            placeholder="Enter purpose / narration">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- ONETIME BENEFICIARY SCREEN --}}
                                        <div class="form-group" id="onetime_beneficiary">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="">Enter Receipient Mobile Number:<span
                                                                class="text-danger">*</span></label>

                                                        {{-- <select class="custom-select col-7" id="receipient_number" required>
                                                            <option value="">Select Receipient Number</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select> --}}
                                                        <input type="text" class="form-control"
                                                            id="onetime_receipient_number" placeholder="Enter Number"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class=""> Select Category:<span
                                                                class="text-danger">*</span></label>

                                                        <select class="custom-select" id="onetime_category">
                                                            <option value="">Select Category</option>
                                                            <option value="001~Fees">Fees</option>
                                                            <option value="002~Electronics">Electronics</option>
                                                            <option value="003~Travels">Travels</option>
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <label class="" for=""> Select Receipient Network Type:<span
                                                                class="text-danger">*</span></label>
                                                        <select class="custom-select" id="onetime_network_type">
                                                            <option value="">Select Network Type</option>
                                                            <option value="MTN">MTN</option>
                                                            <option value="VODAFONE">VODAFONE</option>
                                                            <option value="AIRTEL TOGO">AIRTEL TOGO</option>
                                                        </select>


                                                        {{-- <label class="">Receipient Mobile Number</label>
                                                        <input type="text" class="form-control" id="amount"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                            required> --}}
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="">Enter Naration:<span
                                                                class="text-danger">*</span></label>

                                                        <input type="text" class="form-control" id="onetime_purpose"
                                                            placeholder="Enter purpose / narration">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- SCHEDULE PAYMENTS --}}
                                        {{-- <div class="col-6">


                                            <div class="form-group">

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Schedule
                                                        Payments</label>
                                                </div>
                                                <legend></legend>

                                                <input type="text" class="form-control"
                                                    id="schedule_payment_contraint_input">

                                                <input type="date" class="form-control" id="schedule_payment_date">

                                            </div>
                                        </div> --}}

                                        <div class="form-group">


                                        </div>
                                        <div class="form-group">



                                            <table
                                                class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info">
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <a
                                                                class="text-body font-weight-semibold display_to_account_name"></a>
                                                            <small class="d-block display_to_account_no"></small>
                                                        </td>

                                                        <td class="text-right font-weight-semibold">
                                                            <span class="display_to_account_currency"></span>
                                                            <span class="display_to_account_amount"></span>

                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>


                                        </div>

                                        {{-- <hr> --}}
                                        {{-- <div class="form-group">
                                            <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Select beneficiary</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Onetime</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        {{-- <hr> --}}

                                        {{-- <div class="form-group">
                                            <label class="">Receipient Mobile Number</label>
                                            <input type="text" class="form-control" id="Receipient_number"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                required>
                                        </div> --}}





                                        {{-- <div class="form-group">
                                            <label class="">Enter Amount</label>
                                            <input type="text" class="form-control" id="amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                required>
                                        </div> --}}











                                        <div class="form-group text-right">
                                            <button class="btn btn-primary btn-rounded" type="submit" id="next_button">
                                                &nbsp; Next &nbsp;</button>
                                        </div>




                                    </form>
                                </div> <!-- end col -->



                                {{-- <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/payment-icon-images/mobile_money/mobile_money_logos.jpg') }}" class="img-fluid" alt="">
                                </div> <!-- end col --> --}}


                                <!-- end row -->



                            </div>

                            <div class="row" id="transaction_summary">


                                <div class="col-md-12">
                                    <div class=" border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                        <div class="table-responsive table-striped table-bordered">
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
                                                        <td>Receipient Mobile Number:</td>
                                                        <td>

                                                            <span
                                                                class="font-13 text-primary text-bold display_to_account_type"
                                                                id="display_to_receipient_network_type"> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id=""> </span>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>


                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                id="online_display_beneficiary_alias_name"> </span>

                                                            <span
                                                                class="font-13 text-primary h3 online_display_beneficiary_account_no"
                                                                id="online_display_beneficiary_account_no"> </span>
                                                            &nbsp; | &nbsp;
                                                            <span
                                                                class="font-13 text-primary h3 online_display_beneficiary_account_currency"
                                                                id="display_to_receipient_number">
                                                            </span>

                                                            <span
                                                                class="d-block font-13 text-primary text-bold online_display_beneficiary_email"
                                                                id="online_display_beneficiary_email"> </span>

                                                            <span
                                                                class="d-block font-13 text-primary text-bold online_display_beneficiary_phone"
                                                                id="online_display_beneficiary_phone"> </span>


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
                                                    id="confirm_button"><span id="confirm_transfer">Confirm
                                                        Transfer</span>
                                                    <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                        id="spinner" aria-hidden="true"></span>
                                                    <span id="spinner_text">Loading...</span>
                                                </button></span>
                                            <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                    id="print_receipt" onclick="window.print()">Print Receipt
                                                </button></span>
                                        </div>
                                    </div>

                                </div> <!-- end col -->





                            </div>


                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->




                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            function from_account() {
                $.ajax({
                    'type': 'GET',
                    'url': 'get-my-account',
                    "datatype": "application/json",
                    success: function(response) {
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                            $('#from_account').append($('<option>', {
                                value: data[index].accountType + '~' + data[index]
                                    .accountDesc + '~' + data[index].accountNumber + '~' +
                                    data[index].currency + '~' + data[index]
                                    .availableBalance
                            }).text(data[index].accountType + '~' + data[index].accountNumber +
                                '~' + data[index].currency + '~' + data[index].availableBalance
                            ));
                            $('#to_account').append($('<option>', {
                                value: data[index].accountType + '~' + data[index]
                                    .accountNumber + '~' + data[index].currency + '~' +
                                    data[index].availableBalance
                            }).text(data[index].accountType + '~' + data[index].accountNumber +
                                '~' + data[index].currency + '~' + data[index].availableBalance
                            ));

                        });
                    },

                })
            }

            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            };


            $(document).ready(function() {

                setTimeout(function() {
                    from_account();
                }, 200);

                $("#beneficiary_selected").show();
                $("#onetime_beneficiary").hide();
                $("#spinner").hide();
                $("#print_receipt").hide();
                $("#spinner_text").hide();

                $(".radio").click(function() {
                    var type = $("input[type='radio']:checked").val();

                    if (type == "beneficiary") {
                        $("#beneficiary_selected").show();
                        $("#onetime_beneficiary").hide();
                    }

                    if (type == "onetime") {
                        $("#onetime_beneficiary").show();
                        $("#beneficiary_selected").hide();

                    }
                })

                {{-- hide select accounts info --}}
                $(".from_account_display_info").hide()
                $(".to_account_display_info").hide()
                $("#schedule_payment_date").hide()
                $('#schedule_payment_contraint_input').hide()
                $('.display_schedule_payment_date').text('N/A')

                $("#transaction_form").show()
                $("#transaction_summary").hide()



                $("#back_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_summary").hide()
                    $("#transaction_form").show()

                })

                $("#from_account").change(function() {
                    var from_account = $(this).val()

                    if (from_account.trim() == '' || from_account.trim() == undefined) {
                        alert('money')
                        $(".from_account_display_info").hide()

                    } else {
                        from_account_info = from_account.split("~")

                        var to_account = $('#to_account').val()


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
                        {{-- alert('and show '  + from_account_info[3].trim()) --}}
                        $(".from_account_display_info").show()





                        // alert(from_account_info[0]);
                    }

                })

                function toaster(message, icon, timer) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,

                        timerProgressBar: false,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: icon,
                        title: message,
                        timer: timer
                    })
                };

                $("#next_button").click(function(e) {
                    e.preventDefault();


                        var type = $("input[type='radio']:checked").val();
                        console.log(type);

                        if (type == "beneficiary") {

                            var from_account = $("#from_account").val().split('~');
                            {{-- var from_account_ = from_account[2]; --}}
                            $("#display_from_account_type").text();
                            $("#display_from_account_name").text();
                            $("#display_from_account_no").text();

                            var amount = $("#amount").val();
                            $("#display_currency").text();
                            $("#display_transfer_amount").text(amount);

                            var receipient_number = $("#receipient_number").val();
                            $("#display_to_receipient_number").text(receipient_number);

                            var receipient_network = $("#network_type").val();
                            $("#display_to_receipient_network_type").text(receipient_network);

                            var category = $("#category").val().split('~');
                            var category_ = category[1]
                            $("#display_category").text(category_);

                            {{-- var category_ = category[0] ; --}}
                            var naration = $("#purpose").val();
                            $("#display_purpose").text(naration);

                            {{-- console.log(from_account);
                            console.log(amount);
                            console.log(receipient_number);
                            console.log(receipient_network);
                            console.log(category);
                            console.log(naration); --}}



                            $("#transaction_form").hide()
                            $("#transaction_summary").show()


                        }

                        if (type == "onetime") {

                            var from_account = $("#from_account").val();
                            $("#display_from_account_type").text();
                            $("#display_from_account_name").text();
                            $("#display_from_account_no").text();

                            var amount = $("#amount").val();
                            $("#display_currency").text();
                            $("#display_transfer_amount").text(amount);

                            var onetime_receipient_number = $("#onetime_receipient_number").val();
                            $("#display_to_receipient_number").text(receipient_number);

                            var onetime_receipient_network = $("#onetime_network_type").val();
                            $("#display_to_receipient_network_type").text(receipient_network);

                            var category = $("#onetime_category").val();
                            $("#display_category").text(category);

                            var naration = $("#onetime_purpose").val();
                            $("#display_purpose").text(naration);

                            {{-- console.log(from_account);
                            console.log(amount);
                            console.log(onetime_receipient_number);
                            console.log(onetime_receipient_network);
                            console.log(category);
                            console.log(naration); --}}

                            $("#transaction_form").hide()
                            $("#transaction_summary").show()
                        }


                        $("#confirm_button").click(function(e){
                            e.preventDefault();


                            var type = $("input[type='radio']:checked").val();
                            {{-- console.log(type); --}}

                            if (type == "beneficiary"){

                                var from_account = $("#from_account").val().split('~');
                                var from_account_ = from_account[2];
                                var currency = from_account[3];
                                var amount = $("#amount").val();
                                var receipient_number = $("#receipient_number").val();
                                var receipient_network = $("#network_type").val();
                                var category = $("#category").val().split('~');
                                var category_ = category[0];
                                var naration = $("#purpose").val();
                                var user_pin = $("#user_pin").val();

                                {{-- console.log(from_account);
                                console.log(from_account_);
                                console.log(currency);
                                console.log(amount);
                                console.log(receipient_number);
                                console.log(receipient_network);
                                console.log(category_);
                                console.log(naration);
                                console.log(user_pin); --}}


                                $.ajax({
                                    "type" : "POST" ,
                                    "url" : "mobile-money-api",
                                    "datatype" : "application/json",
                                    "data" : {
                                        'from_account' : from_account_ ,
                                        'amount' : amount ,
                                        'currency' : currency ,
                                        'category_' : category_ ,
                                        'receipient_number' : receipient_number ,
                                        'receipient_network' : receipient_network ,
                                        'naration' : naration ,
                                        'user_pin' : user_pin

                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response){
                                        {{-- console.log(response); --}}
                                        if (response.responseCode == '000'){
                                            toaster(response.message ,'success', 10000) ;
                                        }else {
                                            toaster(response.message ,'error', 6000) ;
                                        }
                                    }
                                })


                            }

                            if (type == "onetime"){
                                {{-- alert('onetime'); --}}

                                var from_account = $("#from_account").val().split('~');
                                var from_account_ = from_account[2];
                                var currency = from_account[3];
                                var amount = $("#amount").val();
                                var receipient_number = $("#onetime_receipient_number").val();
                                var receipient_network = $("#onetime_network_type").val();
                                var category = $("#onetime_category").val().split('~');
                                var category_ = category[0];
                                var naration = $("#onetime_purpose").val();
                                var user_pin = $("#user_pin").val();

                                {{-- console.log(from_account); --}}
                                console.log(from_account_);
                                console.log(currency);
                                console.log(amount);
                                console.log(receipient_number);
                                console.log(receipient_network);
                                console.log(category_);
                                console.log(naration);
                                console.log(user_pin);


                                $.ajax({
                                    "type" : "POST" ,
                                    "url" : "mobile-money-api",
                                    "datatype" : "application/json",
                                    "data" : {
                                        'from_account' : from_account_ ,
                                        'amount' : amount ,
                                        'currency' : currency ,
                                        'category_' : category_ ,
                                        'receipient_number' : receipient_number ,
                                        'receipient_network' : receipient_network ,
                                        'naration' : naration ,
                                        'user_pin' : user_pin

                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response){
                                        {{-- console.log(response); --}}
                                        if (response.responseCode == '000'){
                                            toaster(response.message ,'success', 10000) ;
                                        }else {
                                            toaster(response.message ,'error', 6000) ;
                                        }
                                    }
                                })

                            }




                        })





                })

            });

        </script>
    @endsection
