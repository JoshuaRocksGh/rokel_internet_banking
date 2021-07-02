@extends('layouts.master')

@section('content')

    <div class="">

        <div class="container-fluid">
            <br>
            <!-- start page title -->
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">
                        <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                        CHEQUE BOOK REQUEST

                    </h4>
                </div>

                <div class="col-md-6 text-right">
                    <h6>

                        <span class="flaot-right">
                            <b class="text-primary"> Account Services </b> &nbsp; > &nbsp; <b class="text-danger">CHEQUE BOOK REQUEST</b>


                        </span>

                    </h6>

                </div>

                <div class="col-md-12 ">
                    <hr class="text-primary" style="margin: 0px;">
                </div>

            </div>
        </div>


        <div class="row">

            <div class="col-12">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class=" col-md-7 m-2" id="request_form_div"
                                            style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
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
                                                                    <b class="col-md-6 text-primary">My Account &nbsp; <span
                                                                            class="text-danger">*</span> </b>


                                                                    <select class="form-control col-md-6 " id="my_account"
                                                                        required>
                                                                        <option value="">Select Account</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary" for="leaflet" >
                                                                        Leftlets
                                                                        <span class="text-danger">*</span></b>

                                                                            <select class="form-control col-md-6" id="leaflet" required>
                                                                                <option value="">-- Select number --</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select>
                                                                </div>

                                                                <div class="form-group row">

                                                                    <b class="col-md-6 text-primary">Branch
                                                                        <span class="text-danger">*</span></b>

                                                                        <select class="form-control col-md-6" id="branch" required>
                                                                            <option value="">-- Selected Branch --</option>
                                                                        </select>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <b class="col-md-6 text-primary">Enter Pin
                                                                        <span class="text-danger">*</span></b>

                                                                        <input type="text" class="form-control col-md-6" id="pin" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">


                                                                </div>




                                                                <div class="form-group text-right ">
                                                                    <button type="button"
                                                                    class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success"
                                                                    id="submit_cheque_request">
                                                                    <span class="submit-text">Submit</span>
                                                                    <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner" aria-hidden="true"></span>
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

                                <div class="col-md-4 m-2" id="atm_request_summary"
                                            style="background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));">
                                            <br><br>
                                            <div class=" col-md-12 card card-body">
                                                {{-- <br><br> --}}
                                                <div class="row">
                                                    <span class="col-md-12 success-message"></span>
                                                    <h6 class="col-md-5">Account Name:</h6>
                                                    <span class="text-primary display_my_account_name col-md-7"></span>

                                                    <h6 class="col-md-5">Account Number:</h6>
                                                    <span class="text-primary display_my_account_no col-md-7"></span>

                                                    <h6 class="col-md-5">Available Balance:</h6>
                                                    <span class="text-primary display_my_account_amount col-md-7"></span>

                                                    <h6 class="col-md-5">Account Currency:</h6>
                                                    <span class="text-primary display_my_account_currency col-md-7"></span>

                                                    <h6 class="col-md-5">Number Of Leaves:</h6>
                                                    <span class="text-success display_leaflet col-md-7"></span>

                                                    <h6 class="col-md-5">Pick Up Branch:</h6>
                                                    <span class="text-success display_branch col-md-7"></span>
                                                </div>
                                            </div>

                                            <div class="form-group text-center display_button_print">

                                                <span> <button class="btn btn-secondary btn-rounded" type="button"
                                                        id="back_button" >Back</button> &nbsp; </span>
                                                <span>&nbsp;
                                                <span>&nbsp; <button class="btn btn-light btn-rounded hide_on_print"
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <script>

            function my_account(){
                $.ajax({
                    type: 'GET',
                    'url' : 'get-my-account',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#my_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));

                        });
                    },
                    error: function(xhr, status, error) {

                        setTimeout ( function(){ my_account() }, $.ajaxSetup().retryAfter )
                    }

                })
            }



            function branches(){
                $.ajax({
                    type: 'GET',
                    'url' : 'get-bank-branches-list-api',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#branch').append($('<option>', { value : data[index].branchCode+'~'+data[index].branchDescription}).text(data[index].branchDescription));

                        });
                    },
                    error: function(xhr, status, error) {

                        setTimeout ( function(){ branches() }, $.ajaxSetup().retryAfter )
                    }

                })
            }



            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            };


            function toaster(message, icon, timer)
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



        $(document).ready(function() {

            //hide spinner on display of the main screen..
            $(".display_button_print").hide();
            $("#spinner").hide();
            $("#spinner-text").hide();
            setTimeout(function(){
                branches()
                my_account()
            }, 1000)



            $("#my_account").change(function() {
                var my_account = $(this).val()

                    my_account_info = my_account.split("~")
                    // set summary values for display
                    $(".display_my_account_type").text(my_account_info[0].trim())
                    $(".display_my_account_name").text(my_account_info[1].trim())
                    $(".display_my_account_no").text(my_account_info[2].trim())
                    $(".display_my_account_currency").text(my_account_info[3].trim())

                    $(".display_currency").text(my_account_info[3].trim()) // set summary currency

                    $(".display_my_account_amount").text(formatToCurrency(parseFloat(my_account_info[4]
                        .trim())))

                        console.log
                    {{-- alert('and show' + my_account_info[3].trim()) --}}
                    $(".my_account_display_info").show()





                // alert(my_account_info[0]);
            });


            $("#leaflet").change(function() {
                $('.display_leaflet').text("")
                var leaflet = $(this).val()
                if(leaflet != ""){
                    $('.display_leaflet').text(leaflet)
                }


            })




            $("#branch").change(function() {
                $('.display_branch').text("")
                var branch = $(this).val()
                if(branch != ""){
                    let branch_info = branch.split("~")
                    console.log(branch)
                    $('.display_branch').text(branch_info[1])
                }


            })

            $("#submit_cheque_request").click(function(){

                //show button features after the submit button has been pressed..


                //MY ACCOUNT
                let my_account = $('#my_account').val()
                //Leaflet
                let leaflet = $('#leaflet').val()
                //branch
                let branch = $('#branch').val()

                let pin = $('#pin').val()





                if(branch == "" || my_account == "" || leaflet == "" || pin == ""){
                    toaster("Please fill all required fieilds", "error", 6000);
                }else{

                    let branch_info = branch.split("~")
                    let branchCode = branch_info[0]

                    my_account_info = my_account.split("~")
                    let accountNumber = my_account_info[2].trim()


                    $(".submit-text").hide();
                    $("#spinner").show();
                    $("#spinner-text").show();



                    $.ajax({

                        'type' : 'POST',
                        'url' : 'submit-cheque-book-request',
                        "datatype" : "application/json",
                        'data' : {
                            'accountNumber' : accountNumber.trim() ,
                            'branchCode' : branchCode.trim() ,
                            'leaflet' : leaflet.trim() ,
                            'pinCode' : pin
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success:
                        function(response){

                             console.log(response)

                            if(response.responseCode == '000'){
                                toaster(response.message, 'success', 200000 )
                                $("#request_form_div").hide()
                                $(".disappear-after-success").hide()
                                $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" style="zoom: 0.5"/>')
                                {{-- $(".hh").text(response.message) --}}
                                $("#request_detail_div").show()
                                $(".display_button_print").show();


                            }else{

                                toaster(response.message, 'error', 9000 );
                                $('#spinner').hide()
                                $('#spinner-text').hide()
                                $(".submit-text").show()


                        }
                    }

                    })


                }
              })


        });

    </script>

@endsection
