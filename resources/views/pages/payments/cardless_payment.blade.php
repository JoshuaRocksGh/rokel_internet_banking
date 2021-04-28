@extends('layouts.master')

@section('styles')

    <style>
        @media print {
            .hide_on_print {
                display: none
            }
        }

        @font-face {
            font-family: 'password';
            font-style: normal;
            font-weight: 400;
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

        input.key {
            font-family: 'password';
            width: 100px;
            height: 26px;
        }

    </style>


@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8  card-body">
                            <h3 class=" m-t-0 text-primary">CARDLESS PAYMENT</h3>

                            <p class="text-muted font-14 m-b-20">
                                <span>
                                    <b class="text-danger">Please Note: </b>
                                    <b>Use the platform to make payment without a card.</b>
                                </span>
                            </p>
                            <hr>


                            <div class="row" id="cardless_payment_form">


                                <div class="col-md-6">
                                    <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <label class="h6">Pay From<span class="text-danger">*</span></label>


                                            <select class="custom-select" id="from_account" required>
                                                <option value="">Select Account</option>
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


                                        <div class="form-group">
                                            <label class="">Enter Amount<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                required>
                                        </div>


                                        <div class="form-group">

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Schedule
                                                    Payments</label>
                                            </div>
                                            <legend></legend>

                                            <input type="text" class="form-control" id="schedule_payment_contraint_input">

                                            <label class="">Value Date</label>

                                            <input type="date" class="form-control" id="schedule_payment_date">

                                        </div>


                                        <br><br>







                                    </form>
                                </div> <!-- end col -->



                                <div class="col-md-6">


                                    <div class="form-group">
                                        <label class="">Reciever Name<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" id="reciever_name"
                                        placeholder="Reciever Name" autocomplete="off" required>

                                        <table
                                            class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card">
                                            <tbody>
                                                <tr>

                                                    <td>
                                                        <a
                                                            class="text-body font-weight-semibold"></a>
                                                        <small class="d-block display_reciever_name"></small>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>

                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Reciever Phone Number<span class="text-danger">*</span></label>

                                        <input type="text" class="form-control" id="reciever_phoneNum"
                                            placeholder="Reciever Phone Number" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>

                                    </div>


                                    <div class="form-group">
                                        <label class="">Reciever Address<span class="text-danger">*</span></label>

                                        {{-- <label class="h6">Category</label> --}}

                                        <input type="text" class="form-control" id="reciever_address"
                                            placeholder="Reciever Address" autocomplete="off" required>

                                    </div>
                                    {{-- <img src="{{ asset("land_asset/images/own-account-img.PNG") }}" /> --}}

                                    {{-- <img src="{{ asset('assets/images/wallet1.jpg') }}" class="img-fluid" alt="" style="opacity: 0.5"> --}}

                                    <div class="form-group text-right">
                                        <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                            &nbsp; Next &nbsp;</button>
                                    </div>
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

                            <div class="row" id="cardless_payment_summary">


                                <div class="col-md-12">
                                    <div class="border card p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Cardless Payment Summary</h4>

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
                                                        <td>Reciever Name:</td>
                                                        <td>
                                                            <span
                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                id="display_to_account_no"> </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Reciever Phone Number:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_category"
                                                                id="display_reciever_phoneNum"></span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Schedule Payment:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_schedule_payment"
                                                                id="display_schedule_payment">NO </span>
                                                            &nbsp;
                                                            <span
                                                                class="font-13 text-primary h3 display_schedule_payment_date"
                                                                id="display_schedule_payment_date"> N/A

                                                            </span>
                                                            &nbsp;

                                                            <span class="font-13 text-primary h3 display_frequency"
                                                                id="display_frequency">

                                                            </span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Payment Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_payment_date">{{ date('d F, Y') }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Posted By: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_posted_by">
                                                            {{ session()->get('userAlias') }}</span>
                                                        </td>
                                                    </tr>

                                                    <tr class="hide_on_print">
                                                        <td>Enter Pin: </td>
                                                        <td>

                                                            <input type="text" name="user_pin" class="form-control key"
                                                                id="user_pin"
                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

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
                                                    id="confirm_button"><span id="confirm_transfer">Confirm Transfer</span>
                                                    <span class="spinner-border spinner-border-sm mr-1" role="status"
                                                        id="spinner" aria-hidden="true"></span>
                                                    <span id="spinner-text">Loading...</span>
                                                </button></span>
                                            <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
                                                    type="button" id="print_receipt" onclick="window.print()">Print Receipt
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


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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

                        });
                    },

                })
            }



            $(document).ready(function() {

                $('#spinner').hide(),
                    $('#spinner-text').hide(),
                    $('#print_receipt').hide();

                setTimeout(function() {
                    from_account();
                }, 200);

                function sweet_alert() {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: false,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'error',
                        title: 'Can not send to same account'
                    })
                }

                {{-- hide select accounts info --}}
                $(".from_account_display_info").hide()
                $(".to_account_display_info").hide()
                $("#schedule_payment_date").hide()
                $("#frequency").hide()
                $('#schedule_payment_contraint_input').hide()
                $('.display_schedule_payment_date').text('N/A')

                $("#cardless_payment_form").show()
                $("#cardless_payment_summary").hide()

                $("#next_button").click(function(e) {
                    e.preventDefault();

                    //go to the cardless payment summary page...
                    // let from_account = $('#from_account').val();
                    let from_account_ = $('#from_account').val().split('~');
                    let amount = $('#amount').val();
                    let reciever_name = $('#reciever_name').val();
                    let reciever_phoneNum = $('#reciever_phoneNum').val();
                    let reciever_address = $('#reciever_address').val();

                    let schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                    let schedule_payment_date = $('#schedule_payment_date').val();



                    let schdule_pay = $("#customCheck1 input[type='checkbox']:checked").val();



                    $('.display_schedule_payment_date').text('| ' + schedule_payment_date)


                    if (from_account == '' || amount =='' || reciever_name == '' || reciever_phoneNum == '' || reciever_address =='') {
                        toaster('Field must not be empty', 'error', 10000)
                        return false
                    } else {
                        //set purpose and category values
                        var category_info = category.split("~")

                        {{-- var select_frequency_info = select_frequency_.split("~") --}}

                        $("#display_category").text(category_info[1])
                        {{-- $("#display_frequency").text(select_frequency_info[1]) --}}
                        $("#display_purpose").text(purpose)

                        $("#cardless_payment_form").hide()
                        $("#cardless_payment_summary").show()
                    }

                    $("#cardless_payment_form").hide();
                    $("#cardless_payment_summary").show();
                });

                $("#back_button").click(function(e) {
                    e.preventDefault()
                    $("#cardless_payment_summary").hide();
                    $("#cardless_payment_form").show();

                })

                //for testing process
                $('#from_account').change(function(){
                    var from_account = $('#from_account').val();
                    console.log(from_account);
                    alert(from_account);
                });

                $('#amount').change(function(){
                    var amount = $('#amount').val();
                    console.log(amount);
                });

                $('#reciever_name').change(function(){
                    var reciever_name = $('#reciever_name').val();
                    console.log(reciever_name);
                });

                $('#reciever_phoneNum').change(function(){
                    var reciever_phoneNum = $('#reciever_phoneNum').val();
                    console.log(reciever_phoneNum);
                });

                $('#reciever_address').change(function(){
                    var reciever_address = $('#reciever_address').val();
                    console.log(reciever_address);
                });


                //end of testing process




                // CHECK BOX CONSTRAINT SCHEDULE PAYMENT
                $("input:checkbox").on("change", function() {
                    if ($(this).is(":checked")) {
                        {{-- console.log("Checkbox Checked!"); --}}
                        $("#schedule_payment_date").show()
                        $("#frequency").show()
                        $(".display_schedule_payment").text('YES')
                        $('#schedule_payment_contraint_input').val('TRUE')

                    } else {
                        {{-- console.log("Checkbox UnChecked!"); --}}
                        $("#schedule_payment_date").val('')
                        $("#schedule_payment_date").hide()
                        $("#frequency").hide()
                        $('.display_schedule_payment').text('NO')
                        $('.display_schedule_payment_date').text('N/A')

                        $('#schedule_payment_contraint_input').val('')
                        $('#schedule_payment_contraint_input').hide()
                        $('#schedule_payment_date').val('')
                    }
                });


                {{-- $("#cardless_payment_form").click(function() {}) --}}

                $("#next_button").click(function() {



                });

            });

        </script>
    @endsection
