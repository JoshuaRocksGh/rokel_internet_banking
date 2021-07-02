@extends('layouts.print')

@section('styles')

    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->

@endsection

@section('content')


                <div class="card-body" >


                    <div class="row" style="zoom: 0.9">



                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr class="">

                                    <th colspan="7">

                                       <div class="row">

                                            <div class="col-xs-4 col-md-2">
                                                <img src="{{ asset('assets/images/rokel_logo.png') }}" alt="" class="img-fluid">
                                            </div>

                                            <div class="col-xs-8 col-md-6">

                                                <span class="h3">Sierra Leone Commercial Bank</span><br>
                                                <span class="h5"> Christian Smith Building</span><br>
                                                <span class="h5"> 29/31 Siaka Stevens Street</span><br>
                                                <span class="h5"> Freetown, Sierra Leone</span>

                                            </div>

                                       </div>


                                    </th>

                                </tr>

                                <tr  class="" style="background-color: #dce0e1!important;">
                                    <th colspan="7">

                                       <div class="row">

                                        <div class="col-xs-3 col-md-2"></div>

                                            <div class="col-xs-5 col-md-3">
                                            <h3 class=""> <b>Account Details</b> </h3>
                                            <h5 class="">Name: <b class="account_description">Kwabena Ampah</b> </h5>
                                            <h5 class="">Account NO: <b class="account_number">012453234578521</b> </h5>
                                            <h5 class="">Product: <b class="account_product">SAVINGS ACCOUNT</b> </h5>
                                            <h5 class="">From: <b class="start_date"> 29-JUN-2001 </b> To <b class="end_date"> 29-JUN-2001 </b> </h5>

                                        </div>

                                        <div class="col-xs-5 col-md-3">
                                            <h3 class=""> <b>Balance Details</b> </h4>
                                            <h5 class="">Currency: <b class="account_currency">SLL</b>  </h5>
                                            <h5 class="">Book Balance : <b class="account_legder_balance" >6,893,899,990.00</b> </h5>
                                            <h5 class="">Cleared Balance : <b class="account_available_balance" >6,893,899,990.00</b> </h5>

                                        </div>

                                       </div>

                                       <div class="row">

                                        <div class="col-xs-3 col-md-2"></div>
                                       </div>


                                    </th>

                                </tr>


                                <tr class="bg-info text-dark ">
                                    <td>Value Date</td>
                                    <td>Amount (SLL)<span class="account_number_display_"></span></td>
                                    <td>Balance (SLL)<span class="account_description_display_"></span></td>
                                    {{--  <td>Explanation <span class="account_currency_display_"></span> </td>  --}}
                                    <td>Transaction Details <span class="account_product_display_"></span> </td>
                                    <td>Document Ref <span class=""></span> </td>
                                    <th>Batch No</th>
                                </tr>

                            </thead>
                            <tbody id="transaction_history">


                            </tbody>
                        </table>



                    </div>





    </div>


@endsection

@section('scripts')

    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>
    {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
    <script>
        // creates multiple instances

    </script>

    <script>



        $(document).ready(function() {

            var account_number = @json($account_number);
            var start_date = @json($start_date);
            var end_date = @json($end_date);
            var transLimit = '10';

            setTimeout(function(){
                getAccountBalanceInfo(account_number)
                getAccountTransactions(account_number, start_date, end_date, transLimit)
            }, 200)





            function getAccountTransactions(account_number, start_date, end_date, transLimit) {



                $.ajax({
                    "type": "POST",
                    "url": "account-transaction-history",
                    datatype: "application/json",
                    data: {
                        "accountNumber": account_number,
                        "endDate": end_date,
                        "entrySource": "A",
                        "startDate": start_date,
                        "transLimit": transLimit
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.responseCode == '000') {

                            tranactions = response.data

                            load_data_into_table(tranactions, account_number, start_date, end_date)


                        } else {

                        }

                    },
                    error: function(xhr, status, error) {

                    }
                })
            }


            function getAccountBalanceInfo(account_number) {
                $.ajax({
                    "type": "POST",
                    "url": "api/account-balance-info",
                    datatype: "application/json",
                    data: {
                        "accountNumber": account_number,
                        "authToken": "15D2A303-98FD-43A6-86E4-F24FC7436069",
                        "endDate": "",
                        "entrySource": "A",
                        "startDate": "",
                        "transLimit": "string"
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.responseCode == '000') {

                            let data = response.data

                            $('.account_description').text(data.ACCOUNT_DESCRIPTION)
                            $('.account_number').text(data.ACCOUNT_NUMBER)
                            $('.account_product').text(data.PRODUCT)
                            $('.start_date').text(start_date)
                            $('.end_date').text(end_date)

                            $('.account_currency').text(data.CURRENCY)
                            $('.account_legder_balance').text(data.LEGDER_BALANCE)
                            $('.account_available_balance').text(data.AVAILABLE_BALANCE)

                        } else {

                        }
                    },
                    error: function(xhr, status, error) {

                    }
                })
            }

            function formatToCurrency(amount) {
                return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
            };

            function load_data_into_table(data, account_number, start_date, end_date) {

                account_number = account_number
                start_date = start_date
                end_date = end_date

                if (data.length > 0) {

                    $.each(data, function(index){


                        let debit = `
                        <tr>

                            <td>${data[index].valueDate}</td>
                            <td>${formatToCurrency(parseFloat(data[index].amount))}</td>
                            <td>${formatToCurrency(parseFloat(data[index].runningBalance))}</td>
                            <td>${data[index].narration}</td>
                            <td>${data[index].documentReference}</td>
                            <td>${data[index].batchNumber}</td>
                        </tr>

                        `;

                        console.log(debit)



                        $('#transaction_history').append(debit)
                    })


                } else {

                }



            }





        })

    </script>

@endsection