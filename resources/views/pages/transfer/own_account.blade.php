@extends('layouts.master')

@section('content')

<legend></legend>

    <div class="row">
        <div class="col-12">
            <div class="card card-background-image">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-8">
                            <p class="sub-header font-18 purple-color">
                                MY OWN ACCOUNT TRANSFER

                            </p>
                            <hr>


                            <div class="row" id="transaction_form">


                                <div class="col-md-7">
                                    <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
                                        @csrf
                                        <div class="form-group">
                                            <label class="h6">Transfer From</label>


                                            <select class="custom-select" id="from_account" required>
                                                <option value="">Select Account</option>

                                                {{--  <option value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                    Saving Account~001023468976001~GHS~2000
                                                 </option>  --}}

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
                                            <label class="h6">Transfer To</label>

                                            <select class="custom-select" id="to_account" required>
                                                <option value="">Select Account</option>

                                                 <option value="Currenct Account~8888888888888~USD~800">
                                                    Currenct Account ~ 8888888888888 ~ USD</option>
                                            </select>


                                            <table
                                                class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card" >
                                                <tbody>
                                                    <tr>

                                                        <td>
                                                            <a class="text-body font-weight-semibold display_to_account_type"></a>
                                                            <small class="d-block display_to_account_name"></small>
                                                            <small class="d-block display_to_account_no"></small>
                                                        </td>

                                                        <td class="text-right font-weight-semibold">
                                                             {{--  <span class="display_to_account_currency"></span>  --}}
                                                            {{--  <span class="display_to_account_amount"></span>  --}}

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
                                            <label class="">Expense Type</label>

                                            {{-- <label class="h6">Category</label> --}}

                                            <select class="custom-select" id="category" required>
                                                <option value="">Select Category</option>
                                                <option value="001~Fees">Fees</option>
                                                <option value="002~Electronics">Electronics</option>
                                                <option value="003~Travels">Travels</option>
                                                <option value="004~Travels">Others</option>
                                            </select>

                                        </div>


                                        <div class="form-group">
                                            <label class="">Expense Narration</label>

                                            {{-- <label class="h6">Category</label> --}}

                                            <input type="text" class="form-control" id="purpose" placeholder="Enter purpose / narration" required>

                                        </div>




                                        <div class="form-group">

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Schedule
                                                    Payments</label>
                                            </div>
                                            <legend></legend>


                                            <div class="form-group" id="frequency">
                                                <label class="">Payment Frequency</label>

                                                {{-- <label class="h6">Category</label> --}}

                                                <select class="custom-select" id="select_frequency" required>
                                                    <option value="">Select Frequency</option>
                                                    <option value="001~Weekly">Weekly</option>
                                                    <option value="002~Bi-Weekly">Bi-Weekly</option>
                                                    <option value="003~Monthly">Monthly</option>
                                                    <option value="004~Quaterly">Quaterly</option>
                                                </select>

                                            </div>

                                            <input type="text" class="form-control" id="schedule_payment_contraint_input">

                                            <input type="date" class="form-control" id="schedule_payment_date">

                                        </div>





                                        <div class="form-group text-right">
                                            <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                                &nbsp; Next &nbsp;</button>
                                        </div>




                                    </form>
                                </div> <!-- end col -->



                                <div class="col-md-5 text-center" style="margin-top: 80px;">

                                    <img src="{{ asset('assets/images/wallet1.jpg') }}" class="img-fluid" alt="" style="opacity: 0.5">
                                </div> <!-- end col -->


                                <!-- end row -->



                            </div>

                            <div class="row" id="transaction_summary">


                                <div class="col-md-12">
                                    <div class="border card p-3 mt-4 mt-lg-0 rounded">
                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

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
                                                            <span class="font-13 text-primary h3 display_schedule_payment_date" id="display_schedule_payment_date"> N/A

                                                            </span>
                                                            &nbsp; | &nbsp;

                                                            <span class="font-13 text-primary h3 display_frequency"id="display_frequency">

                                                            </span>
                                                        </td>
                                                    </tr>

{{--
                                                    <tr>
                                                        <td>Payment Frequency: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3 display_frequency"
                                                                id="display_frequency"></span>
                                                        </td>
                                                    </tr>  --}}


                                                    <tr>
                                                        <td>Transfer Date: </td>
                                                        <td>
                                                            <span class="font-13 text-primary h3"
                                                                id="display_transfer_date">{{  date('d F, Y') }}</span>
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
                                            <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                    id="back_button">Back</button> &nbsp; </span>
                                            <span>&nbsp; <button class="btn btn-primary btn-rounded" type="button"
                                                    id="confirm_button">Confirm Transfer </button></span>
                                            <span>&nbsp; <button class="btn btn-light btn-rounded" type="button"
                                                    id="confirm_button">Print Receipt </button></span>
                                        </div>
                                    </div>

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
                                <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                                    @csrf
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


        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>

            function from_account(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-my-account',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#from_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));
                        $('#to_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance));

                        });
                    },

                })
            }


            $(document).ready(function() {

                setTimeout(function(){
                    from_account();
                },3000);

                function sweet_alert(){
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

                $("#transaction_form").show()
                $("#transaction_summary").hide()

                {{--  $("#next_button").click(function(e) {
                    e.preventDefault()
                    $("#transaction_form").hide()
                    $("#transaction_summary").show()
                })  --}}

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

                        // Sweet alert function



                        var to_account = $('#to_account').val()

                        if ((from_account.trim() == to_account.trim()) && from_account.trim() != '' &&
                            to_account.trim() != '') {
                            {{--  alert('can not transfer to same account')  --}}

                            toaster('Can not send to same account', 'error' )
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
                        // alert(to_account_info[0].trim())
                        //$(".display_to_account_amount").text(formatToCurrency(Number(to_account_info[4].trim())))

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
                        $(".display_transfer_amount").text(formatToCurrency(Number(transfer_amount)));
                    }

                });


                function formatToCurrency(amount) {
                    return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
                };


                // CHECK BOX CONSTRAINT SCHEDULE PAYMENT
                $("input:checkbox").on("change", function() {
                    if ($(this).is(":checked")) {
                        {{--  console.log("Checkbox Checked!");  --}}
                        $("#schedule_payment_date").show()
                        $("#frequency").show()
                        $(".display_schedule_payment").text('YES')
                        $('#schedule_payment_contraint_input').val('TRUE')

                    } else {
                        {{--  console.log("Checkbox UnChecked!");  --}}
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


                {{-- $("#transaction_form").click(function() {}) --}}

                $("#next_button").click(function() {
                    {{--  var t =  $("#schedule_payment_date").val()
                    alert(t)  --}}
                    {{--  return false;  --}}
                    var from_account = $('#from_account').val()
                    var to_account = $('#to_account').val()
                    var transfer_amount = $('#amount').val()
                    var category = $('#category').val()
                    var select_frequency_ = $('#select_frequency').val()
                    var purpose = $('#purpose').val()

                    var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                    var schedule_payment_date = $('#schedule_payment_date').val();


                    var from_account_ = $('#from_account').val().split('~');
                    var to_account_ = $('#to_account').val().split('~');
                    var schdule_pay = $("#customCheck1 input[type='checkbox']:checked").val();
                        {{--  console.log(schdule_pay);  --}}
                    if(from_account_[2] == to_account_[1]){
                        {{--  alert('You can not send to same account');  --}}

                        toaster('Can not send to same account', 'error' )
                        return false;
                    }

                    if(schedule_payment_contraint_input.trim() != '' && schedule_payment_date.trim() == ''){
                        $('.display_schedule_payment_date').text('N/A') // shedule date NULL
                        toaster('Select schedule date for subsequent transfers', 'error' )
                        {{-- alert('Select schedule date for subsequent transfers') --}}
                        return false;
                    }


                    $('.display_schedule_payment_date').text(schedule_payment_date)


                    if (from_account.trim() == '' || to_account.trim() == '' || transfer_amount.trim() == '' || category.trim() == '' || purpose.trim() == '' ) {
                        {{-- alert('Field must not be empty') --}}
                        toaster('Field must not be empty', 'error' )
                        return false
                    }else{
                        //set purpose and category values
                        var category_info = category.split("~")

                        var select_frequency_info = select_frequency_.split("~")

                        $("#display_category").text(category_info[1])
                        $("#display_frequency").text(select_frequency_info[1])
                        $("#display_purpose").text(purpose)

                        $("#transaction_form").hide()
                        $("#transaction_summary").show()
                    }

                });


                {{-- function user_pin(){
                    let pin = 1234;

                    if ($('#user_pin').val() == pin){
                        toaster('Field must not be empty', 'error' )
                    }else{
                        toaster('Field must not be empty', 'error' )
                        return false;
                    }
                } --}}

                function toaster(message, icon )
                {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
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


                // SUBMIT TO API

                $('#confirm_button').click(function(e){
                    e.preventDefault();


                    //user_pin();
                    let pin = $('#user_pin').val();

                    if ( pin != '1234'){
                        toaster('Incorrect pin entered', 'error')
                        return false;
                    }

                    var from_account = $('#from_account').val().split('~');
                    var to_account = $('#to_account').val().split('~');
                    var category = $('#category').val().split('~');
                    var select_frequency = $('#select_frequency').val().split('~')




                    //GET VALUES
                    var from_account_ = from_account[2];
                    var to_account_ = to_account[1];
                    var transfer_amount = $('#amount').val();
                    var category_ = category[1];
                    var select_frequency_ = select_frequency[1];
                    var purpose = $('#purpose').val();

                    var schedule_payment_contraint_input = $('#schedule_payment_contraint_input').val()
                    var schedule_payment_date = $('#schedule_payment_date').val();

                    $.ajax({

                        'type' : 'POST',
                        'url' : 'own-account-api',
                        "datatype" : "application/json",
                        'data' : {
                            'from_account' : from_account_ ,
                            'to_account' : to_account_ ,
                            'transfer_amount' : transfer_amount ,
                            'category' : category_ ,
                            'select_frequency' : select_frequency_ ,
                            'purpose' : purpose ,
                            'schedule_payment_type' : schedule_payment_contraint_input ,
                            'schedule_payment_date' : schedule_payment_date,

                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:
                        function(response){

                            console.log(response.responseCode)
                            if(response.responseCode == "000"){
                                toaster('Transfer Successful', 'success' )

                            }else{

                                toaster('Transfer Failed', 'error' )

                        }
                    }

                    })


                })
            });

    </script>
@endsection
