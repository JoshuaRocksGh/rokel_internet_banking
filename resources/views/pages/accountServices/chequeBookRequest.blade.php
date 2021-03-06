@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">CHEQUE BOOK REQUEST</h2>
                        <hr>


                        <div class="row" >

                            <div class="col-md-7" id="request_form_div">

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
                                                <label for="inputEmail3" class="col-4 col-form-label">MY Account<span
                                                        class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select class="custom-select " id="my_account" required>
                                                        <option value="">Select Account</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="hori-pass2" class="col-4 col-form-label">
                                                    Leaflets
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select class="custom-select " id="leaflet" required>
                                                        <option value="">-- Select number --</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="webSite" class="col-4 col-form-label">
                                                    <label> Branch</label>
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <select class="custom-select " id="branch" required>
                                                        <option value="">-- Selected Branch --</option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="hori-pass2" class="col-4 col-form-label">
                                                    Enter Your Pin
                                                    <span class="text-danger">*</span></label>
                                                <div class="col-7">
                                                    <input type="text" class="form-control" id="pin" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">

                                                </div>
                                            </div>

                                            {{-- <div class="form-group row">


                                                    <div class="col-7 offset-4 text-right">

                                                        <button type="button"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light">
                                                            Submit
                                                        </button>

                                                    </div>


                                            </div> --}}


                                        </form>

                                    </p>


                                </div> <!-- end card-box -->


                            </div>


                            <div class="col-md-5 disappear-after-success" id="request_detail_div">

                                <table class="table mb-0 table-striped table-bordered">

                                    <tbody>
                                        <tr class="bg-secondary text-white">
                                            <td>Request Details</td>
                                        </tr>
                                        <tr class="">

                                            <td>
                                                <a
                                                    class="text-body font-weight-semibold   display_my_account_name"></a>
                                                <small class="d-block   display_my_account_no"></small>
                                                <span class="text-right   font-weight-semibold">
                                                    <span class="display_my_account_currency"></span>
                                                <span class="  display_my_account_amount"></span>
                                                </span>
                                            </td>



                                        </tr>
                                        <tr class="">
                                            <td>
                                                <span class="text-right font-weight-semibold">
                                                    <span class="display_leaflet"></span>
                                                </span>
                                            </td>

                                        </tr>
                                        <tr class="">
                                            <td>
                                                <span class="text-right font-weight-semibold">
                                                    <span class="display_branch"></span>
                                                </span>
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                                <br>

                                <div class="form-group row">
                                    <div class="col-8 offset-4 text-right">
                                        <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success" id="submit_cheque_request">
                                            Submit
                                        </button>

                                    </div>
                                </div>


                            </div> <!-- end col -->

                        <div class="col-md-5 text-center">
                        {{-- <span class="hh"><span> --}}
                        <p class="display-4 text-center text-success success-message ">

                        </p>
                    </div>


                        <!-- end row -->



                    </div>


                </div>

                <div class="col-md-1"></div>

            </div> <!-- end card-body -->

        </div>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <script>

            function my_account(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-my-account',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#my_account').append($('<option>', { value : data[index].accountType+'~'+data[index].accountDesc+'~'+data[index].accountNumber+'~'+data[index].currency+'~'+data[index].availableBalance}).text(data[index].accountType +'~'+ data[index].accountNumber +'~'+data[index].currency+'~'+data[index].availableBalance));

                        });
                    },

                })
            }



            function branches(){
                $.ajax({
                    'type': 'GET',
                    'url' : 'get-bank-branches-list-api',
                    "datatype" : "application/json",
                    success:function(response){
                        console.log(response.data);
                        let data = response.data
                        $.each(data, function(index) {

                        $('#branch').append($('<option>', { value : data[index].branchCode+'~'+data[index].branchDescription}).text(data[index].branchDescription));

                        });
                    },

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

                    $(".display_my_account_amount").text(formatToCurrency(Number(my_account_info[4]
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
                    $('.display_leaflet').text("Leaflet: " + leaflet)
                }


            })




            $("#branch").change(function() {
                $('.display_branch').text("")
                var branch = $(this).val()
                if(branch != ""){
                    let branch_info = branch.split("~")
                    console.log(branch)
                    $('.display_branch').text("Pickup Branch: " + branch_info[1])
                }


            })

            $("#submit_cheque_request").click(function(){

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
                                $(".success-message").html('<img src="{{ asset("land_asset/images/statement_success.gif") }}" />')
                                {{-- $(".hh").text(response.message) --}}
                                $("#request_detail_div").show()


                            }else{

                                toaster(response.message, 'error', 9000 );


                        }
                    }

                    })


                }
              })


        });

    </script>
@endsection
