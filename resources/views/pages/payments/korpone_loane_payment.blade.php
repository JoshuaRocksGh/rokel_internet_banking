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

    <div class="">

        <div class="container-fluid">
            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                        KORPONE LOANE
                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> Payment </b> &nbsp; > &nbsp; <b class="text-danger">Korpone loane Payment</b>


                        </span>

                    </h6>

                </div>

                <div class="col-md-12 ">
                    <hr class="text-primary" style="margin: 0px;">
                </div>

            </div>
        </div>

            <div class="card-box">

                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#send_korpor_page" data-toggle="tab" aria-expanded="false" class="nav-link send_korpor_tab">
                            Send Korpor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile1" data-toggle="tab" aria-expanded="true" class="nav-link active reverse_korpor_tab">
                            Reverse Korpor
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages1" data-toggle="tab" aria-expanded="false" class="nav-link redeem_korpor_tab">
                            Redeem Korpor
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="send_korpor_page">
                        <div class="row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="row">
                                            <div class=" col-md-7 rtgs_card m-2" id="request_form_div"
                                                                style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                                                <br><br><br>

                                                                <form action="#" class="select_beneficiary" id="payment_details_form" autocomplete="off"
                                                                    aria-autocomplete="none">
                                                                    @csrf
                                                                    <div class="row container">
                                                                        <div class="col-md-1"></div>
                                                                        <div class="col-md-9">

                                                                            {{-- <br><br><br> --}}
                                                                            <div class="row">
                                                                                {{-- <div class="col-md-1"></div> --}}

                                                                                <div class="col-md-12">

                                                                                    <div class="form-group row mb-3">
                                                                                        <b class="col-md-5 text-primary">Pay From&nbsp; <span
                                                                                                class="text-danger">*</span> </b>


                                                                                        <select class="form-control col-md-7 " id="from_account"
                                                                                            required>
                                                                                            <option value="">Select Account
                                                                                            </option>


                                                                                        </select>
                                                                                    </div>



                                                                                    <div class="form-group row mb-3" id="pay_from_account">

                                                                                        <b class="col-md-5 text-primary">Amount&nbsp;
                                                                                            <span class="text-danger">*</span></b>


                                                                                        <input type="text" class="form-control col-md-7" id="amount"
                                                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                                                            required>
                                                                                        <br>



                                                                                    </div>



                                                                                    <div class="form-group row">

                                                                                        <b class="col-md-5 text-primary"> Receiver Name &nbsp; <span
                                                                                                class="text-danger">*</span></b>


                                                                                                <input type="text" class="form-control col-md-7" id="receiver_name"
                                                                                                placeholder="enter receiver name" autocomplete="off" required>
                                                                                                <br>

                                                                                    </div>

                                                                                    <div class="form-group row">

                                                                                        <b class="col-md-5 text-primary"> Receiver's Phone Number: &nbsp; <span
                                                                                                class="text-danger">*</span></b>

                                                                                                <input type="text" class="form-control col-md-7" id="receiver_phoneNum" placeholder="receiver Phone Number" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                                                                                <br>

                                                                                    </div>

                                                                                    <div class="form-group row">

                                                                                        <b class="col-md-5 text-primary"> Receiver's Address: &nbsp; <span
                                                                                                class="text-danger">*</span></b>

                                                                                                <input type="text" class="form-control col-md-7" id="receiver_address" placeholder="receiver Address" autocomplete="off" required>
                                                                                                <br>

                                                                                    </div>

                                                                                    <div class="form-group row">

                                                                                        <b class="col-md-5 text-primary" for="pin" >
                                                                                            Enter Your Pin
                                                                                            <span class="text-danger">*</span></b>
                                                                                            <input type="password" class="form-control col-md-7" id="user_pin"
                                                                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">



                                                                                    </div>

                                                                                    <div class="form-group text-right ">
                                                                                        <button type="button"
                                                                                        class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success"
                                                                                        id="confirm_button">
                                                                                        <span class="submit-text">Submit</span>
                                                                                        <span class="spinner-border spinner-border-sm mr-1" id="spinner" role="status" aria-hidden="true"></span>
                                                                                        <span id="spinner-text">Loading...</span>
                                                                                    </button>
                                                                                    </div>


                                                                                </div>

                                                                                {{-- <div class="col-md-1"></div> --}}
                                                                            </div>









                                                                        </div>
                                                                        <div class="col-md-1"></div>

                                                                    </div>











                                                                </form>


                                            </div> <!-- end col -->

                                            <div class="col-md-4 rtgs_card_right m-2" id="atm_request_summary"
                                                        style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                                                        <br><br>
                                                        <div class=" col-md-12 card card-body">
                                                            {{-- <br><br> --}}
                                                            <div class="row">
                                                                <span class="col-md-12 success-message"></span>
                                                                <h6 class="col-md-5">Account Name:</h6>
                                                                <span class="text-primary display_from_account_name col-md-7"></span>

                                                                <h6 class="col-md-5">Account Number:</h6>
                                                                <span class="text-primary display_from_account_no col-md-7"></span>

                                                                <h6 class="col-md-5">Available Balance:</h6>
                                                                <span class="text-primary display_from_account_amount col-md-7"></span>

                                                                <h6 class="col-md-5">Account Currency:</h6>
                                                                <span class="text-primary display_currency col-md-7"></span>

                                                                <h6 class="col-md-5">Amount:</h6>
                                                                <span class="text-primary display_amount col-md-7"></span>


                                                                <h6 class="col-md-5">Receiver's Name: </h6>
                                                                <span class="text-success display_receiver_name col-md-7"></span>

                                                                <h6 class="col-md-5">Receiver's Phone Number:</h6>
                                                                <span class="text-success display_receiver_phoneNum col-md-7"></span>

                                                                <h6 class="col-md-5">Receiver's Address:</h6>
                                                                <span class="text-success display_receiver_address col-md-7"></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group text-center display_button_print">

                                                            <span>&nbsp;
                                                            <span>&nbsp; <button class="btn btn-light btn-rounded"
                                                                    type="button" id="print_receipt" onclick="window.print()">Print
                                                                    Receipt
                                                                </button></span>
                                                        </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="reverse_korpor_page">
                        <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 100%;">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="d-block img-fluid" style="min-height: 100%" src="{{ asset('assets/images/ads/sim_korpor_ad.jpeg') }}" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" style="height: 100%" src="{{ asset('assets/images/ads/sim_korpor_ad_2.jpeg') }}" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block img-fluid" style="min-height"src="{{ asset('assets/images/ads/sim_korpor_ad_3.jpeg') }}" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="redeem_korpor_page">

                    </div>
                </div>

            </div>
    </div><!-- end card-box-->




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

            function toaster(message, icon, timer) {
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



            $(document).ready(function() {

                    $("#spinner").hide();
                    $("#spinner-text").hide();
                    // $('#print_receipt').hide();

                    $(".display_button_print").hide();


                setTimeout(function() {
                    from_account();
                }, 200);

                function sweet_alert(message, icon, timer) {
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
                        icon: icon,
                        title: message
                    })
                }

                {{-- hide select accounts info --}}
                $(".from_account_display_info").hide()
                $(".to_account_display_info").hide()
                $("#schedule_payment_date").hide()
                $("#frequency").hide()
                $('#schedule_payment_contraint_input').hide()
                $('.display_schedule_payment_date').text('N/A')

                // $("#profile1").click(function(){
                //     // $(".send_korpor").hide();
                // });

                $(".reverse_korpor_tab").click(function(){
                    $("#send_korpor_page").hide();
                    $("#reverse_korpor_page").show();
                });

                $(".send_korpor_tab").click(function(){
                    $("#send_korpor_page").show();
                    $("#reverse_korpor_page").hide();

                });


                //show card after the from_account value changes
                $("#from_account").change(function() {
                    var from_account = $(this).val()
                    {{-- alert(from_account) --}}
                    if (from_account == '' || from_account.trim() == undefined) {
                        {{-- alert('money') --}}
                        // $(".from_account_display_info").hide()

                    } else {
                        from_account_info = from_account.split("~")


                        // var to_account = $('#to_account').val()

                        // set summary values for display
                        $(".display_from_account_type").text(from_account_info[0].trim())
                        $(".display_from_account_name").text(from_account_info[1].trim())
                        $(".display_from_account_no").text(from_account_info[2].trim())
                        $(".display_from_account_currency").text(from_account_info[3].trim())

                        $(".display_currency").text(from_account_info[3].trim()) // set summary currency

                        amt = from_account_info[4].trim()

                        $(".display_from_account_amount").text(formatToCurrency(Number(from_account_info[4]
                            .trim())))
                        $(".from_account_display_info").show()
                    }





                });

                $("#receiver_name").change(function(){
                    var receiver_name = $("#receiver_name").val();
                    $(".display_receiver_name").text(receiver_name);
                });

                $("#receiver_phoneNum").change(function(){
                    var receiver_phoneNum = $("#receiver_phoneNum").val();
                    $(".display_receiver_phoneNum").text(receiver_phoneNum);
                });

                $("#receiver_address").change(function(){
                    var receiver_address = $("#receiver_address").val();
                    $(".display_receiver_address").text(receiver_address);
                })

                $("#amount").change(function(){
                    var amount = $("#amount").val();
                    $(".display_amount").text(amount);
                });


                function formatToCurrency(amount) {
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                }

                // $("#next_button").click(function(e) {
                //     e.preventDefault();

                //     //go to the cardless payment summary page...
                //     // let from_account = $('#from_account').val();
                //     let from_account = $('#from_account').val().split('~');
                //     let transfer_amount = $('#amount').val();
                //     let receiver_name = $('#receiver_name').val();
                //     let receiver_phoneNum = $('#receiver_phoneNum').val();
                //     let receiver_address = $('#receiver_address').val();
                //     let sender_name = @json(session()->get('userAlias'));
                //     let user_pin = $('#user_pin').val();


                //     if (from_account == '' || amount == '' || receiver_name == '' || receiver_phoneNum ==
                //         '' || receiver_address == '') {
                //         toaster('Field must not be empty', 'error', 10000)
                //         return false
                //     } else {

                //         //hide the payment form and show the summary form
                //         $("#cardless_payment_form").hide()
                //         $("#cardless_payment_summary").show();

                //         amt = from_account_info[4].trim();
                //         if (amt < transfer_amount) {
                //             toaster('Insufficient account balance', 'error', 9000);
                //             return false
                //         } else {

                //             //display this is the payment summary
                //             $("#display_amount").text(transfer_amount);
                //             $("#display_receiver_name").text(receiver_name);
                //             $("#display_receiver_address").text(receiver_name);
                //             $("#display_receiver_phoneNum").text(receiver_phoneNum);



                //         }


                //     }

                //     $("#cardless_payment_form").hide();
                //     $("#cardless_payment_summary").show();



                // });


                // $("#back_button").click(function(e) {
                //     e.preventDefault()
                //     $("#cardless_payment_summary").hide();
                //     $("#cardless_payment_form").show();

                // });



                $('#confirm_button').click(function() {
                    let from_account = from_account_info[2].trim();
                    // $('#from_account').val().split('~');
                    // from_account = from_account[2].trim;
                    let transfer_amount = $('#amount').val();
                    let receiver_name = $('#receiver_name').val();
                    let receiver_phoneNum = $('#receiver_phoneNum').val();
                    let receiver_address = $('#receiver_address').val();
                    let sender_name = @json(session()->get('userAlias'));
                    let user_pin = $('#user_pin').val();
                    console.log(sender_name);


                    if (from_account == '' || amount == '' || receiver_name == '' || receiver_phoneNum ==
                        '' || receiver_address == '') {
                        toaster('Fields must not be empty', 'error', 10000)
                        return false
                    } else {

                        //hide the payment form and show the summary form
                        $("#cardless_payment_form").hide()
                        $("#cardless_payment_summary").show();

                        amt = from_account_info[4].trim();
                        if (amt < transfer_amount) {
                            toaster('Insufficient account balance', 'error', 9000);
                            return false
                        } else {

                            //display this is the payment summary
                            $("#display_amount").text(transfer_amount);
                            $("#display_receiver_name").text(receiver_name);
                            $("#display_receiver_address").text(receiver_name);
                            $("#display_receiver_phoneNum").text(receiver_phoneNum);



                        }

                            if (user_pin == "") {
                                toaster('enter your pin', 'error', 9000);
                                console.log("Error is from here.");
                                return false;
                            } else {

                                    $('#spinner').show(),
                                    $('#spinner-text').show(),
                                    // $('#print_receipt').hide();
                                    $('.submit-text').hide();
                                $.ajax({

                                    'type': 'POST',
                                    'url': 'initiate-korpor',
                                    "datatype": "application/json",
                                    'data': {
                                        'amount': transfer_amount,
                                        'debit_account': from_account,
                                        'pin_code': user_pin,
                                        'receiver_address': receiver_address.trim(),
                                        'receiver_name': receiver_name.trim(),
                                        'receiver_phone': receiver_phoneNum
                                    },
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    },
                                    success: function(response) {

                                        console.log(response)

                                        if (response.responseCode == '000') {
                                            toaster(response.message, 'success', 20000);
                                            $("#request_form_div").hide();
                                            $('.display_button_print').show();
                                        } else {

                                            toaster(response.message, 'error', 9000);

                                            $('#spinner').hide();
                                            $('#spinner-text').hide();
                                            $('.submit-text').show();
                                            // $('#confirm_payment').show();
                                            // $('#confirm_button').attr('disabled', false);
                                        }
                                    }
                                });
                            }
                    }
                });

                //for testing process
                $('#from_account').change(function() {
                    var from_account = $('#from_account').val();
                    console.log(from_account);
                    // alert(from_account);
                });

                $('#amount').change(function() {
                    var amount = $('#amount').val();
                    console.log(amount);
                });

                $('#receiver_name').change(function() {
                    var receiver_name = $('#receiver_name').val();
                    console.log(receiver_name);
                });

                $('#receiver_phoneNum').change(function() {
                    var receiver_phoneNum = $('#receiver_phoneNum').val();
                    console.log(receiver_phoneNum);
                });

                $('#receiver_address').change(function() {
                    var receiver_address = $('#receiver_address').val();
                    console.log(receiver_address);
                });

                $('#user_pin').change(function() {
                    var user_pin = $('#user_pin').val();
                    console.log(user_pin);
                });
                //end of testing process




            });

        </script>
    @endsection
