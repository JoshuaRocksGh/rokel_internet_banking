@extends('layouts.master')


@section('content')


    <div class="container-fluid">
        <br>
        <!-- start page title -->
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                    MOBILE MONEY BENEFICIARY

                </h4>
            </div>

            <div class="col-md-6 text-right">
                <h6>

                    <span class="flaot-right">
                        <b class="text-primary"> Beneficiary </b> &nbsp; > &nbsp; <b class="text-primary"> Add Beneficiary
                        </b>
                        &nbsp; > &nbsp; <b class="text-danger">Mobile Money Beneficiary</b>


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


                    <div class="col-md-6 m-2 h-100" id="transaction_summary"
                        style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                        <br><br><br>

                        <div class="row"></div>

                        {{-- <div class="col-md-1"></div> --}}

                        <div class="col-md-12">
                            <form action="#" id="same_bank_beneficiary_form_summary" autocomplete="off"
                                aria-autocomplete="off">

                                <div class="col-md-12">
                                    <div class="card card-body">

                                        <h4 class="text-primary"> Beneficiary Details</h4>
                                        <hr>

                                        <div class="form-group row mb-2">
                                            <b class="col-md-6 ">Beneficiary Name:</b>
                                            <span class="col-md-6 text-primary" id="display_beneficiary_name"></span>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <b class=" col-md-6"> Beneficiary Number:</b>
                                            <span class="col-md-6 text-primary" id="display_beneficiary_number"></span>
                                        </div>

                                        <div class="form-group row mb-2">
                                            <b class="col-md-6 "> Beneficiary Network:</b>
                                            <span class="col-md-6 text-primary" id="display_beneficiary_network"></span>
                                        </div>



                                    </div>
                                </div>

                            </form>
                        </div>
                        <br>
                        <div class="form-group">

                            <button type="button" class="btn btn-rounded btn-secondary mb-2" id="save_beneficiary_back">
                                <i class="mdi mdi-reply-all-outline"></i> &nbsp; Back
                            </button>



                            <button type="button" class="btn btn-primary btn-rounded float-right" id="add_beneficiary">Add
                                Beneficiary &nbsp;
                                <i class="fe-arrow-right"></i>
                                {{-- <span id="confirm_transfer">Confirm Transfer</span> --}}
                                {{-- <span class="spinner-border spinner-border-sm mr-1" role="status" id="spinner"
                                        aria-hidden="true"></span> --}}
                                {{-- <span id="spinner-text">Loading...</span> --}}
                            </button>

                        </div>


                    </div>

                    <div class="col-md-6 m-2 h-100" id="transaction_form"
                        style="background-image: linear-gradient(to bottom right, white, rgb(201, 223, 230));">
                        <br>
                        <div class="row ">

                            {{-- <div class="col-md-1"></div> --}}

                            <div class="col-md-12 ">
                                <form action="#" id="same_bank_beneficiary_form" autocomplete="off" aria-autocomplete="off">
                                    {{-- @csrf --}}
                                    <div class="col-md-12">

                                        <h4 class="text-primary"> Beneficiary Details</h4>
                                        <hr>

                                        <div class="form-group row">
                                            <b class=" col-md-4 text-primary"> Beneficiary Name &nbsp; <span
                                                    class="text-danger">*</span></b>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="beneficiary_name"
                                                    parsley-trigger="change" placeholder="Beneficiary Name" required>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <b class="col-md-4 text-primary"> Beneficiary Number<span
                                                    class="text-danger">*</span></b>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="beneficiary_mobile_number"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                    parsley-trigger="change" placeholder="Beneficiary Mobile Number"
                                                    required>
                                            </div>

                                        </div>


                                        <div class="form-group row">

                                            <b class="col-md-4 text-primary"> Beneficiary Network &nbsp;<span
                                                    class="text-danger">*</span></b>

                                            <div class="col-md-8">
                                                <select name="" id="beneficiary_network" class="form-control" required>
                                                    <option value=""> -- Select Network -- </option>
                                                    <option value="MTN">MTN</option>
                                                </select>
                                            </div>

                                        </div>



                                        {{-- <p class="sub-header font-13">
                                                    Providing beneficairy email and checking

                                                </p> --}}
                                        <br><br>

                                        <div class="form-group text-right ">

                                            <button class="btn btn-primary waves-effect waves-light btn-rounded "
                                                type="submit" id="save_beneficiary">Next &nbsp;<i
                                                    class="fe-arrow-right"></i></button>
                                        </div>

                                    </div>

                                </form>




                            </div> <!-- end col -->




                            {{-- <div class="col-md-1"></div> --}}
                            <!-- end row -->



                        </div>
                    </div>

                    <div class="col-md-5">
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
                                    style="min-height: 120px; max-height: auto;">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block img-fluid" style="min-height: 100%"
                                                src="{{ asset('assets/images/ads/rokel.jpeg') }}" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" style="height: auto;"
                                                src="{{ asset('assets/images/ads/sim_korpor_ad_6.jpeg') }}"
                                                alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block img-fluid" style="min-height"
                                                src="{{ asset('assets/images/ads/sim_korpor_ad_7.jpeg') }}"
                                                alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
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
        function paymentType() {
            var payment_type = @json($payment_type);
            console.log(payment_type);
            $.ajax({
                type: 'GET',
                url: '../get-payment-types-api',
                datatype: "application/json",
                success: function(response) {
                    {{-- console.log(response) --}}
                    let data = response.data.data
                    {{-- console.log(data) --}}

                    $.each(data, function(index) {
                        let type = data[index].paymentType
                        {{-- console.log(type); --}}
                        if (payment_type == type) {
                            console.log(data[index].paySubTypes[index])

                            var image = new Image();
                            var base64_string = data[index].paySubTypes[index].paymentLogo
                            image.src = "data:image/png;base64," + base64_string

                            $('#beneficiary_network').append($('<option>', {
                                value: data[index].paySubTypes[index].paymentAccount + '~' +
                                    data[index].paySubTypes[index].paymentCode + '~' +
                                    data[index].paySubTypes[index].paymentLabel
                            }).text(image +
                                '~' + data[index].paySubTypes[index].paymentDescription
                            ));
                        }


                    })
                },
                error: function(xhr, status, error) {

                    setTimeout(function() {
                        paymentType()
                    }, $.ajaxSetup().retryAfter)
                }
            })
        }

        $(document).ready(function() {

            {{-- $('#save_beneficiary').hide(''); --}}
            $('#spinner').hide(),
                $('#spinner-text').hide(),
                $('#marked_fields').show();

            $('#transaction_summary').hide();
            $('#account_number_error').hide();
            $('#account_name_error').hide();
            $('#beneficiary_name_error').hide();
        })


        setTimeout(function() {
            paymentType();
        }, 200);


        function toaster(message, icon) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 10000,
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
        };

        $('#same_bank_beneficiary_form').submit(function(e) {
            e.preventDefault()

            var beneficiary_name = $('#beneficiary_name').val();
            $('#display_beneficiary_name').text(beneficiary_name)
            console.log(beneficiary_name)

            var beneficiary_mobile_number = $('#beneficiary_mobile_number').val();
            $('#display_beneficiary_number').text(beneficiary_mobile_number)
            console.log(beneficiary_mobile_number);

            var beneficiary_network = $('#beneficiary_network').val();
            $('#display_beneficiary_network').text(beneficiary_network)
            console.log(beneficiary_network)



            $('#transaction_summary').toggle('500');
            $('#transaction_form').hide();


        })

        $('#save_beneficiary_back').click(function(e) {
            e.preventDefault()

            $('#transaction_form').toggle('500');
            $('#transaction_summary').hide();
        })

        $('#add_beneficiary').click(function(e) {
            e.preventDefault();
            var payment_type = @json($payment_type)


            var beneficiary_name = $('#beneficiary_name').val();


            var beneficiary_mobile_number = $('#beneficiary_mobile_number').val();



        })
    </script>

@endsection
