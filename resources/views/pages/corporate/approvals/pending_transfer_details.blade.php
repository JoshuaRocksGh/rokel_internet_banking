@extends('layouts.approval_detail')

@section('styles')

    <style>
        @media print {
            .hide_on_print {
                display: none;
            }

            ;
        }

        @page {
            size: A4;
            {{-- margin: 10px; --}}
        }

        @media print {

            html,
            body {
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

    <div class="container-fluid">

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
                                                                <h4 class="text-primary"><strong>ROKEL COMMERCIAL
                                                                        BANK</strong>
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

                                                        <div class="container col-md-10 text-center">
                                                            <div class="col-md-12">

                                                                <div class="row ">
                                                                    <span class="col-md-6 text-left h4">Issue Date</span>
                                                                    <span class="col-md-6 text-right text-primary h4"
                                                                        id="request_date">25-12-2021</span>
                                                                </div>
                                                                {{--  <br>  --}}
                                                                <hr class="mt-0">
                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Request Type</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="request_type">Own Account
                                                                        Transfer</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class=" row">
                                                                    <span class="col-md-6 text-left h4">Posted By</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="posted_by">Cobby
                                                                        Eyeson</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class=" row">
                                                                    <span class="col-md-6 text-left h4">Debit Account</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="debit_account">004008210057725128</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Beneficiary Name</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="beneficiary_name">Dansoman, Accra - Ghana</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Beneficiary Account</span>
                                                                    <span class="col-md-6 text-right text-primary h4"
                                                                        id="beneficiary_account">004008215057725152 </span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Beneficiary Address</span>
                                                                    <span class="col-md-6 text-right text-primary h4"
                                                                        id="beneficiary_address">004008215057725152 </span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Amount</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="amount">1000,000.00</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Total Amount</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="total_amount">10,000,000.00</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Currency</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="currency">SLL</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Narration</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="narration">RTGS TESTING</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Catergory</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="category">Salary</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Batch Number</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="batch_number">1594663539</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Reference Number</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="reference_number">1594663539</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Frequency</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="frequency">03~MONTHLY</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Cheque Number From</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="cheque_number_from">000123</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Cheque Number To</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="cheque_number_to">000200</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Branch Code</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="branch_code">102235</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Transaction Start Date</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="transaction_start_date">25-07-2021</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Transaction End Date</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="transaction_end_date">04-08-2021</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="row">
                                                                    <span class="col-md-6 text-left h4">Number of Leaflet</span>
                                                                    <span class="col-md-6 text-right text-primary h4" id="number_of_leaflet">50</span>
                                                                </div>
                                                                <hr class="mt-0">

                                                                <div class="mt-1">

                                                                    <div class="col-md-12 mb-3">
                                                                        <div class="row">
                                                                            <div class="col-md-2"></div>
                                                                            <button class="btn btn-danger waves-effect waves-light col-md-3 btn-lg"
                                                                                type="button">Reject
                                                                                <i class="mdi mdi-cancel"></i>
                                                                            </button>
                                                                            <div class="col-md-2"></div>
                                                                            <button class="btn btn-success waves-effect waves-light col-md-3 btn-lg"
                                                                                type="button">Appove
                                                                                <i class="mdi mdi-check-all"></i>
                                                                            </button>
                                                                            <div class="col-md-2"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-1"></div>


                                                        <br><br>

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
                                        <h4 class="mb-1 text-center">Account Mandate</h4>
                                        <h2 id="account_mandate">1A OR 2B</h2>
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
                                </div>

                                {{-- <br> --}}
                                <div class="card">
                                    <div class="p-3 mt-4 mt-lg-0">
                                        <h4 class="mb-1 text-center">Initiated By</h4>
                                        <h2 id="initiated_by">Cobby Enterprise</h2>
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
                                </div>

                                {{-- <br> --}}
                                <div class="card">
                                    <div class="p-3 mt-4 mt-lg-0">
                                        <h4 class="mb-1 text-center">Approvers</h4>
                                        <h2 class="approvers">Jonas Korankye</h2>
                                        <h2 class="approvers">Joshua Tetteh</h2>
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
                                </div>



                            </div>

                        </div>
                    </div>

                </div> <!-- end card-body -->



            </div> <!-- end col -->

        </div> <!-- end row -->



    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
            function account_mandate() {

                var customer = @json($customer_no);
                var request = @json($request_id);
                var mandate = @json($mandate)

                console.log(customer);
                console.log(request);
                console.log(mandate);

                $.ajax({
                    type : 'GET',
                    url : "../../pending-request-details-api?customer_no=" + customer + "&request_id=" + request ,
                    datatype : 'application/json',
                    success: function(){
                         console.log(response);
                        {{-- alert('Successful'); --}}
                    },
                    error: function(xhr, status, error) {

                    }
                })
            }


        $(document).ready(function() {

            setTimeout(function() {
                account_mandate();

            },700);


         });
    </script>
@endsection
