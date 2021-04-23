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

                            <p class="text-muted font-14 m-b-20">
                                Parsley is a javascript form validation library. It helps you provide your
                                users with feedback on their form submission before sending it to your
                                server.
                            </p>
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

                                                        {{-- <option value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                    Saving Account~001023468976001~GHS~2000
                                                 </option> --}}

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
                                                            <option value="MTN">MTN</option>
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
                                        <div class="col-6">


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
                                        </div>

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



                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->




                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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

                $("#payment_details_form").submit(function(e) {
                    e.preventDefault();

                    $(".radio").click(function() {


                        var type = $("input[type='radio']:checked").val();
                        console.log(type);

                        if (type == "beneficiary") {
                            var from_account = $("#from_account").val().split();
                            var from_account_ = from_account;
                            var amount = $("#amount").val();
                            var receipient_number = $("#receipient_number").val();
                            var receipient_network = $("#network_type").val();
                            var category = $("#category").val();
                            var naration = $("#purpose").val();

                            console.log(from_account_);
                            console.log(amount);
                            console.log(receipient_number);
                            console.log(receipient_network);
                            console.log(category);
                            console.log(naration);

                        }

                        if (type == "onetime") {
                            var from_account = $("#from_account").val();
                            var amount = $("#amount").val();
                            var onetime_receipient_number = $("#onetime_receipient_number").val();
                            var onetime_receipient_network = $("#onetime_network_type").val();
                            var category = $("#onetime_category").val();
                            var naration = $("#onetime_purpose").val();

                            console.log(from_account);
                            console.log(amount);
                            console.log(onetime_receipient_number);
                            console.log(onetime_receipient_network);
                            console.log(category);
                            console.log(naration);
                        }





                    })


                })

            });

        </script>
    @endsection
