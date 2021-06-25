@extends('layouts.approval_detail')

@section('styles')

    <style>
        @media print {
            .hide_on_print {
                display: none ;
            };
        }

        @page {
            size: A4;
            {{--  margin: 10px;  --}}
          }
          @media print {
                html, body {
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

    <div>

        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="card-body ">
                        <div class="row">
                            {{-- <div class="col-md-1"></div> --}}

                            <div class="col-md-8">

                                <div class="receipt">
                                    <div class="container card card-body">

                                        <div class="container">
                                            <div class="">
                                                <div class="col-md-12 body-main">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-4 "> <img class="img " alt="InvoIce Template"
                                                                    src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_LIGHT')) }} "
                                                                    style="zoom: 0.6" /> </div>
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-4 text-right">
                                                                <h4 class="text-primary"><strong>ROKEL COMMERCIAL BANK</strong>
                                                                </h4>
                                                                <p>25-27 Siaka Stevens St</p>
                                                                <p> Freetown, Sierra Leone</p>
                                                                <p>rokelsl@rokelbank.sl</p>
                                                                <p>(+232)-76-22-25-01</p>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="page-header">
                                                            <h2>Approval Form</h2>
                                                        </div>
                                                        <br>
                                                        <div class="col-md-1"></div>
                                                        <div class="col-md-10">
                                                            <div class="col-md-12">

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Issue Date</span>
                                                                <span class="col-md-6" id="request_date">25/12/2021</span>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Request Type</span>
                                                                <span class="col-md-6" id="request_type">Own Account Transfer</span>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Posted By</span>
                                                                <span class="col-md-6" id="posted_by">Cobby Eyeson</span>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Beneficiary Name</span>
                                                                <span class="col-md-6" id="beneficiary_name">Dangote Cement Limited</span>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Beneficiary Account</span>
                                                                <span class="col-md-6" id="beneficiary_account">004004100435210194	</span>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Amount</span>
                                                                <span class="col-md-6" id="amount">1000,000.00</span>
                                                            </div>

                                                            <div class="form-group row mb-3">
                                                                <span class="col-md-6">Currency</span>
                                                                <span class="col-md-6" id="currency">SLL</span>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-1"></div>


                                                        <br>
                                                        {{-- <div>
                                                            <div class="col-md-12">
                                                                <p><b>Date Posted :</b> {{ date('d F, Y') }}</p> <br /> <br />
                                                                <p><b>Posted By : {{ session('userId') }}</b></p>
                                                            </div>
                                                        </div> --}}
                                                        <br><br>
                                                        {{-- <div class="row">
                                                            <div class="col-md-5"></div>
                                                            <div class="col-md-2">
                                                                  <button class="btn btn-light btn-rounded hide_on_print text-center"
                                                                    type="button" onclick="window.print()">Print
                                                                    Receipt
                                                                </button>


                                                            </div>
                                                            <div class="col-md-5"></div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card ">
                                    <div class="p-3 mt-4 mt-lg-0">
                                        <h2 class="mb-1 text-left">Account Mandate</h2>
                                        <h3 id="account_mandate">1A OR 2B</h3>
                                        {{-- <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td id="account_mandate"><h3></h3></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}

                                    </div>
                                    {{-- <br> --}}
                                    <div class="p-3 mt-4 mt-lg-0">
                                        <h2 class="mb-1 text-left">Initiated By</h2>
                                        <h3 id="initiated_by">Cobby Enterprise</h3>
                                        {{-- <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td id="initiated_by"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}

                                    </div>
                                    {{-- <br> --}}
                                    <div class="p-3 mt-4 mt-lg-0">
                                        <h2 class="mb-1 text-left">Approvers</h2>
                                        <h3 class="approvers">Jonas Korankye</h3>
                                        <h3 class="approvers">Joshua Tetteh</h3>
                                        {{-- <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="approvers"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="approvers"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}

                                    </div>
                                    <br>
                                    <div class="col-md-12 mb-3">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <button class="btn btn-danger waves-effect waves-light col-md-3 " type="button">Reject

                                            </button>
                                            <div class="col-md-2"></div>
                                            <button class="btn btn-success waves-effect waves-light col-md-3" type="button">Appove

                                            </button>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- end card-body -->



                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>
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
