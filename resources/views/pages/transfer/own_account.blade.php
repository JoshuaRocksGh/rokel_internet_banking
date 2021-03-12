@extends('layouts.master')

@section('content')

    <legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color">
                                MY OWN ACCOUNT TRANSFER

                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7" >
                                    <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                        @csrf
                                        <div class="form-group">
                                            <label class="h6">Transfer From</label>


                                            <select class="custom-select " id="from_account" required>
                                                <option value="">Select Account</option>
                                                <option value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">Saving Account ~ 001023468976001 </option>

                                            </select>


                                                <table class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info">
                                                    <tbody>
                                                        <tr>

                                                            <td>
                                                                <a class="text-body font-weight-semibold display_from_account_name"></a>
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
                                            <label class="h6">Transfer To</label>

                                            <select class="custom-select" id="to_account" required>
                                                <option value="">Select Account</option>
                                                <option value="Currenct Account~Joshua Tetteh~8888888888888~USD~800">Currenct Account ~ 8888888888888 </option>
                                            </select>


                                            <table class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info" >
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <a class="text-body font-weight-semibold display_to_account_name"></a>
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

                                        <div class="form-group">
                                            <label class="">Enter Amount</label>
                                            <input type="text" class="form-control" id="amount"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            {{--  <label class="h6">Category</label>  --}}

                                            <select class="custom-select" id="category" required>
                                                <option value="">Select Category</option>
                                                <option value="Fees">Fees</option>
                                                <option value="Electronics">Electronics</option>
                                                <option value="Travels">Travels</option>
                                            </select>

                                        </div>


                                        <div class="form-group">

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Schedule Payments</label>
                                            </div>
                                            <legend></legend>

                                            <input type="date" class="form-control" id="schedule_payment_date" >

                                            </div>



                                        <div class="form-group text-right">
                                            <button class="btn btn-primary btn-rounded" type="button" id="next_button" > &nbsp; Next &nbsp;</button>
                                        </div>




                                    </form>
                                </div> <!-- end col -->



                                <div class="col-md-4 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/wallet.png') }}" class="img-fluid" alt="">
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

                            <div class="row" id="transaction_summary">


                                <div class="col-md-10"  >
                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                        <div class="table-responsive">
                                            <table class="table mb-0">

                                                <tbody>
                                                    <tr>
                                                        <td>From Account:</td>
                                                        <td>
                                                            <span class="font-13 text-primary" id="display_from_account_type"> Savings Account </span>
                                                            <span class="font-13 text-primary" id="display_from_account_name"> Kwabena Ampah </span>
                                                            <span class="d-block font-13 text-primary" id="display_from_account_no"> 00211003994033</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>To Account:</td>
                                                        <td>

                                                            <span class="font-13 text-primary" id="display_to_account_type"> Jousha Tetteh </span>
                                                            <span class="font-13 text-primary" id="display_to_account_name"> Jousha Tetteh </span>
                                                            <span class="d-block font-13 text-primary" id="display_to_account_no"> 00211003994033</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Amount:</td>
                                                        <td>
                                                            <span class="font-15 text-primary h3" id="display_curreny">GHS &nbsp; </span>
                                                            <span class="font-15 text-primary h3" id="display_transfer_amouunt"> 1,200.00 </span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Category:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3" id="display_category">Grocery </span>

                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Purpose:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3" id="display_purpose">Please, Buy five sardine and twenty beef for Ama </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Schedule Payment:</td>
                                                        <td>
                                                            <span class="font-13 text-primary h3" id="display_schedule_payment">YES &nbsp;</span>
                                                            |
                                                            <span class="font-13 text-primary h3" id="display_schedule_payment_date">&nbsp; 3 April, 2020 </span>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>Transfer Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3" id="display_transfer_date">10 March, 2020</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Posted BY: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3" id="display_posted_by">Kwabena Ampah</span>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Enter Pin: </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" name="user_pin" class="form-control" id="user_pin" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                        <br>
                                        <div class="form-group text-center">
                                           <span> <button class="btn btn-secondary btn-rounded" type="button" id="back_button" >Back</button> &nbsp; </span>
                                           <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button" id="confirm_button" >Confirm Transfer </button></span>
                                           <span>&nbsp; <button class="btn btn-light btn-rounded" type="button" id="confirm_button" >Print Receipt </button></span>
                                        </div>
                                    </div>

                                </div> <!-- end col -->


                                <div class="col-md-2 text-center">
                                    <br><br><br>
                                    <img src="{{ asset('assets/images/wallet.png') }}" class="img-fluid" alt="">
                                </div> <!-- end col -->


                            </div>



                        </div>

                        <div class="col-md-2"></div>

                    </div> <!-- end card-body -->


                    <!-- Modal -->
                    <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="POST" id="confirm_details">
                                    <div class="modal-header">
                                        <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                            Details</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>

                                    <div class="modal-body">

                                        From: <span class="font-13 text-primary" id="display_from_account"> &nbsp
                                        </span><br><br>
                                        To: <span class="font-13 text-muted" id="display_to_account"> &nbsp </span><br><br>
                                        Schedule Payments: <span class="font-13 text-muted" id="display_payments"> &nbsp
                                        </span><br><br>
                                        Amount: <span class="font-13 text-muted" id="display_amount"> &nbsp </span><br><br>
                                        Naration: <span class="font-13 text-muted" id="display_naration"> &nbsp
                                        </span><br><br>
                                        Transaction fee: <span class="font-13 text-muted" id="display_trasaction_fee">
                                        </span><br><br>
                                        Total: <span class="font-13 text-muted" id="display_total"> &nbsp </span><br><br>

                                        <div class="form-group">
                                            <label class="font-16 purple-color">Enter Pin</label>
                                            <input type="text" class="form-control" id="pin" data-toggle="input-mask"
                                                placeholder="enter pin" required
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                        </div>

                                    </div>



                                    <div class="modal-footer">
                                        <button type="send" id="send" class="btn btn-primary" data-target="#multiple-two"
                                            data-toggle="modal" data-dismiss="modal">Send</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->




                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {

                {{--  hide seleect accounts info  --}}
                $(".from_account_display_info").hide()
                $(".to_account_display_info").hide()

                $("#transaction_form").show()
                $("#transaction_summary").hide()

                $("#next_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_form").hide()
                    $("#transaction_summary").show()
                })

                $("#back_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_summary").hide()
                    $("#transaction_form").show()

                })

                {{--  Event on From Account field  --}}

                $("#from_account").change(function(){
                    var from_account = $(this).val()
                    {{--  alert(from_account)  --}}
                    if(from_account.trim() == '' || from_account.trim() == undefined){
                        {{--  alert('money')  --}}
                        $(".from_account_display_info").hide()

                    }else{
                        from_account_info = from_account.split("~")
                        {{--  alert('continue')  --}}

                        var to_account = $('#to_account').val()

                        if( (from_account.trim() == to_account.trim()) && from_account.trim() == '' && to_account.trim() == '' ){
                            alert('can not transfer to same account')
                            $(this).val('')
                        }

                        // set summary values for display
                        $("#display_from_account_type").text(from_account_info[0].trim())
                        $(".display_from_account_name").text(from_account_info[1].trim())
                        $(".display_from_account_no").text(from_account_info[2].trim())
                        $(".display_from_account_currency").text(from_account_info[3].trim())
                        $(".display_from_account_amount").text(formatToCurrency(Number(from_account_info[4].trim())))
                        {{--  alert('and show' + from_account_info[3].trim())  --}}
                        $(".from_account_display_info").show()
                    }




                    {{--  alert(from_account_info[0]);  --}}
                  });


                  $("#to_account").change(function(){
                    var to_account = $(this).val()
                    {{--  alert(to_account)  --}}
                    if(to_account.trim() == '' || to_account.trim() == undefined){
                        {{--  alert('money')  --}}
                        $(".from_account_display_info").hide()

                    }else{
                        to_account_info = to_account.split("~")


                        var from_account = $('#from_account').val()

                        if( (from_account.trim() == to_account.trim()) && from_account.trim() == '' && to_account.trim() == '' ){
                            alert('can not transfer to same account')
                            $(this).val('')
                        }

                        // set summary values for display
                        $("#display_to_account_type").text(to_account_info[0].trim())
                        $(".display_to_account_name").text(to_account_info[1].trim())
                        $(".display_to_account_no").text(to_account_info[2].trim())
                        $(".display_to_account_currency").text(to_account_info[3].trim())
                        $(".display_to_account_amount").text(formatToCurrency(Number(to_account_info[4].trim())))

                        $(".to_account_display_info").show()
                    }




                    {{--  alert(to_account_info[0]);  --}}
                  });



                function formatToCurrency(amount) {
                    return  amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                };


                {{--  $("#transaction_form").click(function() {})  --}}

                $("#next_button").click(function() {
                    var send_from = $('#from_account').val();
                    var send_to = $('#to_account').val();
                    var custom_check = $('#customCheck1').is(":checked");
                    var custom_check2 = $('#customCheck2').is(":checked");
                    var text_area = $('#textarea').val();
                    var amount = $('#amount').val();

                    {{-- console.log(send_from,send_to,custom_check,text_area,amount) --}}

                    $("#display_from_account").text(send_from);
                    $("#display_to_account").text(send_to);
                    $("#display_amount").text(amount);
                    $("#display_naration").text(text_area);
                    $("#display_trasaction_fee").text();
                    $("#display_total").text();

                    if (custom_check == true) {
                        var checked = ("Payments Scheduled")
                        $("#display_payments").text(checked);

                    } else {
                        var unchecked = ("No Scheduled Payments")
                        $("#display_payments").text(unchecked);

                    };


                    {{-- $('#confrim_details').send(function(e){
                $.ajax({
                    type: "POST"
                    url: "submit-own-account-transfer"
                    data: {
                        "send_from" : send_from,
                        "send_to" : send_to,
                        "cashier_id" : cashier_id,
                        "text_area" : text_area,
                        "amount" : amount,
                        "cashier_id" : cashier_id
                    },
                     headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    success: function(){
                        Swal.fire(
                            'Post Successful',
                            ' ',
                            'success'
                        )
                    }
                })

            }) --}}

                });
            });

        </script>
    @endsection
